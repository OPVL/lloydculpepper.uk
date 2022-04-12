<?php

namespace App\Util\Navbar;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Util\Navbar\Navbar
 *
 * @property int $id
 * @property string $slug
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Util\Navbar\Link[] $links
 * @property-read int|null $links_count
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Navbar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Navbar extends Model
{
    protected $fillable = ['name', 'slug'];

    protected $with = ['links'];

    public function links(): BelongsToMany
    {
        return $this->belongsToMany(Link::class)
            ->using(LinkNavbar::class);
    }

    public function getEnabledLinksAttribute()
    {
        return $this->links->enabled();
    }
}
