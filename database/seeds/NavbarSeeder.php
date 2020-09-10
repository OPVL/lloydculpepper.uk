<?php

use App\Util\Navbar\Link;
use App\Util\Navbar\Navbar;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navbars = collect(config('navbars'));
        $navbars->each(function ($navbar, $slug): void {
            // dump(__METHOD__, $navbar, $slug);

            $persistNavbar  = Navbar::updateOrCreate(
                ['slug' => $slug],
                ['name' => $navbar['name']]
            );

            $links = $persistNavbar->links->pluck('label');
            
            collect($navbar['links'])->reject(function (array $link) use ($links): bool {
                // dd(__METHOD__, $link, $links);
                return $links->contains($link['label']);
            })->each(function (array $link) use ($persistNavbar): void {
                $persistNavbar->links()->saveMany([new Link($link)]);
            });
            dump($persistNavbar->links()->count());
            // collect($navbar['links'])
            //     ->each(function (array $link) use ($links): void {
            //         dump(__METHOD__, $links, $links->first());
            //         $links->find
            //     });
        });

        // $navbar->links()->saveMany([
        //     new Link(['label' => 'About', 'href' => 'about']),
        //     new Link(['label' => 'Projects', 'href' => 'projects']),
        //     new Link(['label' => 'Blog', 'href' => 'blog']),
        //     new Link(['label' => 'Contact', 'href' => 'contact']),
        // ]);
    }
}
