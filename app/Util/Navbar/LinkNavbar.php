<?php

namespace App\Util\Navbar;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Util\Navbar\LinkNavbar
 *
 * @property-read \App\Util\Navbar\Link $link
 * @property-read \App\Util\Navbar\Navbar $navbar
 * @method static \Illuminate\Database\Eloquent\Builder|LinkNavbar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkNavbar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinkNavbar query()
 * @mixin \Eloquent
 */
class LinkNavbar extends Pivot
{
    protected $fillable = [
        'index',
    ];

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class);
    }

    public function navbar(): BelongsTo
    {
        return $this->belongsTo(Navbar::class);
    }
}
