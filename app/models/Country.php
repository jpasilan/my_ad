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
     * Connection used by this model.
     *
     * @var string
     */
    protected $connection = 'mysqlgeo';

    /**
     * Relation to the Postal Code model.
     *
     * @return mixed
     */
    public function postal_codes()
    {
        return $this->hasMany('PostalCode', 'country_code', 'id');
    }

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