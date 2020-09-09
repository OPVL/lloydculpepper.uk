<?php

namespace App\Util\Observers;

use App\Util\Navbar\LinkNavbar;

class LinkNavbarObserver
{
    public function saving(LinkNavbar $pivot)
    {
        $totalLinks = $pivot->navbar->links->count();
        abort_if($totalLinks >= 8, 400, 'Maximum Link Limit Reached!');
        $pivot->index = $totalLinks;
    }
}
