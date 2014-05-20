<?php

class Country extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * Get list of countries.
     *
     * @return mixed
     */
    public static function getList()
    {
        return static::orderBy('name')->lists('name', 'id');
    }

}