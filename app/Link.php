<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Link extends Model
{
    /**
     * The good type of links.
     */
    const TYPE_GOO = 'goo';

    /**
     * The bad type of links.
     */
    const TYPE_BAAH = 'baah';

    /**
     * Do not guard any values for mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * boot
     *
     */
    public static function boot()
    {
        parent::boot();


        static::addGlobalScope('reverse_order', function (Builder $builder) {
            $builder->orderBy('id', 'DESC');
        });
    }

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
