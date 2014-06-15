<?php

class Ad extends Eloquent
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ads';


    /**
     * Guarded model attributes.
     *
     * @var array
     */
    protected $guarded = ['id', 'user_id', 'ad_category_id'];

    /**
     * Relationship to the AdCategory model.
     *
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo('AdCategory', 'ad_category_id');
    }


    /**
     * A hasMany polymorphic relation to the Image model.
     *
     * @return mixed
     */
    public function photos()
    {
        return $this->morphMany('Photo', 'photoable');
    }


    /**
     * Relationship to the User model.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }


    /**
     * A hasOne polymorphic relation to the Address model.
     *
     * @return mixed
     */
    public function address()
    {
        return $this->morphOne('Address', 'addressable');
    }


    /**
     * Search ad scope.
     *
     * @param $query
     * @return mixed
     */
    public function scopeSearch($query)
    {
        // The owner and owned parameters are exclusive of each other.
        if (Input::has('owner')) {
            $query->where('user_id', '=', Input::get('owner'));
        } else if (Input::has('owned') && Sentry::check()) {
            $query->where('user_id', '=', Sentry::getUser()->id);
        }

        // Search for the ad category. It can be either by id or name, token name that is.
        if (Input::has('category')) {
            $category = Input::get('category');

            // Check if it's a parent category.
            if (is_numeric($category)) {
                $parentCategory = AdCategory::where('id', '=', $category)
                    ->whereNull('parent_id')
                    ->first();
            } else {
                $parentCategory = AdCategory::where('name', '=', $category)
                    ->whereNull('parent_id')
                    ->first();
            }

            // If so, get the category's children.
            $children = null;
            if ($parentCategory) {
                $children = $parentCategory->children->lists('name');
            }

            $query->whereHas('category', function($q) use($children, $category)
            {
                if ($children) {
                    $q->whereIn('name', $children);
                } else {
                    if (is_numeric($category)) {
                        $q->where('id', '=', $category);
                    } else {
                        $q->where('name', '=', $category);
                    }
                }
            });
        }

        // Search for the ad title.
        if (Input::has('title')) {
            $query->where('title', 'LIKE', '%' . Input::get('title') . '%');
        }

        // Search for the ad condition.
        if (Input::has('condition')) {
            $query->where('ad_condition', '=', Input::get('condition'));
        }

        // Search for the ad price
        if (Input::has('price_low') && Input::has('price_high')) {
            $query->whereBetween('price', [(float)Input::get('price_low'), (float)Input::get('price_high')]);
        } else if (Input::has('price_low')) {
            $query->where('price', '>=', (float)Input::get('price_low'));
        } else if (Input::has('price_high')) {
            $query->where('price', '<=', (float)Input::get('price_high'));
        }

        // Search for ad by status. By default, this will be those with the 'open' status.
        $status = Input::has('status') ? Input::get('status') : 'open';
        $query->where('status', '=', $status);

        return $query;
    }


    /**
     * Recent ad scope.
     *
     * @param $query
     * @return mixed
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'DESC');
    }

} 