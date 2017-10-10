<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Do not guard any values for mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Defines the relation to the user who submitted the link.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
