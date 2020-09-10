<?php 

namespace Tests\Unit\Util;

use App\Util\Navbar\Link;
use Tests\TestCase;

class NavbarTest extends TestCase
{
    /** @test */
    public function can_get_built_target_attribute(): void
    {
        $this->markTestIncomplete('pending');
        $link = factory(Link::class)->make();

        dd(__METHOD__, $link);
    }
}