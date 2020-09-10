<?php

namespace App\Util\Observers;

use App\Util\Navbar\LinkNavbar;

class LinkNavbarObserver
{
    public function creating(LinkNavbar $pivot)
    {
        $linkCount = $pivot->navbar->links()->count();
        // $totalLinks = 
        //     ->descending()
        //     ->first()->toSql();
        // $var = optional($pivot->navbar->links()->descending()->first())->
        abort_if($linkCount >= 8, 400, 'Maximum Link Limit Reached!');
        $pivot->index = $linkCount;
    }
}
