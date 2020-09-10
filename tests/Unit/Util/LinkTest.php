<?php

namespace Tests\Unit\Util;

use App\Util\Navbar\Link;
use Tests\TestCase;

class LinkTest extends TestCase
{
    /** @test */
    public function scope_descending(): void
    {
        factory(Link::class, 3)->create();
        factory(Link::class)->create(['label' => 'First']);

        $link = Link::descending()->first();

        $this->assertEquals($link->label, 'First');
    }
}
