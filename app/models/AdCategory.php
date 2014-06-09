<?php

class AdCategory extends Eloquent
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ad_categories';


    /**
     * Relationship to the Ad model.
     *
     * @return mixed
     */
    public function ads()
    {
        return $this->hasMany('Ad', 'ad_category_id');
    }


    /**
     * Relation to the AdCategory parent model.
     *
     * @return mixed
     */
    public function parent()
    {
        return $this->belongsTo('AdCategory', 'parent_id');
    }


    /**
     * Relation to the AdCategory child model.
     *
     * @return mixed
     */
    public function children()
    {
        return $this->hasMany('AdCategory', 'parent_id', 'id');
    }


    /**
     * Retrieve a hierarchy of categories.
     *
     * @return array
     */
    public static function getList()
    {
        $collection = static::all();

        $list = [];
        foreach ($collection as $item) {
            if (!$item->parent_id) {
                foreach ($item->children()->orderBy('name')->get() as $child) {
                    // Translate names to the plural translations.
                    $list[Lang::choice("ads.{$item->name}", 2)][$child->id] = Lang::choice("ads.{$child->name}", 2);
                }
            }
        }

        return $list;
    }


} 