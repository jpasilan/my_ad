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


} 