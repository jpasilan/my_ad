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
     * Relation to User model.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->hasOne('User');
    }
} 