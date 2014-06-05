<?php

class Address extends Eloquent
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';


    /**
     * Guarded model attributes.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Polymorphic relation to several models.
     *
     * @return mixed
     */
    public function addressable()
    {
        return $this->morphTo();
    }


} 