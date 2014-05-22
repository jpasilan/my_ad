<?php

class PostalCode extends Eloquent
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'postal_code';

    /**
     * Relation to the Country model.
     *
     * @return mixed
     */
    public function country()
    {
        return $this->belongsto('Country');
    }

}