<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    protected $table = 'activity_types';

    /**
     * Get the activity type group record associated with the activity types.
     */
    public function group()
    {
        return $this->belongsTo('App\ActivityTypeGroup');
    }

    public function getTranslationKeyAsString()
    {
        return trans('people.activity_type_'.$this->key);
    }
}
