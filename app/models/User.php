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

}
