<?php

class Profile extends Eloquent
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';


    /**
     * Guarded model attributes.
     *
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Relation to User model.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('User');
    }


} 