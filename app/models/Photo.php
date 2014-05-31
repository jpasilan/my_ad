<?php

class Photo extends Eloquent
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';


    /**
     * Guarded model attributes.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Polymorphic relation to various models.
     *
     * @return mixed
     */
    public function photoable()
    {
        return $this->morphTo();
    }


} 