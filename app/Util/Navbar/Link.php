<?php

namespace App\Util\Navbar;

use Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Str;

/**
 * App\Util\Navbar\Link
 *
 * @property int $id
 * @property string $label
 * @property string|null $href
 * @property string|null $target
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Util\Navbar\Navbar[] $navbars
 * @property-read int|null $navbars_count
 * @method static \Illuminate\Database\Eloquent\Builder|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereHref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Link whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Link extends Model
{
    protected $fillable = ['label', 'href', 'target', 'index'];

    public function navbars(): BelongsToMany
    {
        return $this->belongsToMany(Navbar::class)
            ->using(LinkNavbar::class);
    }

    public function getTargetAttrAttribute(): string
    {
        $target = $this->attributes['target'];
        return $target !== null ?: "target={$this->target}";
    }

    public function getHrefAttribute(): string
    {
        $href = $this->attributes['href'];
        return Str::contains($href, ['http', '/']) ? $href : route($href);
    }

    public function __toString(): string
    {
        return "<a href='{$this->href}'{$this->targetAttr}>{$this->label}</a>";
    }
}
