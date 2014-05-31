<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryUser;

class User extends SentryUser
{


    /**
     * Relation to the Profile model.
     *
     * @return mixed
     */
    public function profile()
    {
        return $this->hasOne('Profile');
    }


    /**
     * Relation to the Ad model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ads()
    {
        return $this->hasMany('Ad');
    }


}
