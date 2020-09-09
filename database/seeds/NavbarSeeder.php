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
        $navbar = factory(Navbar::class)->create([
            'slug' => config('navbar.pages.home'),
            'name' => 'Main'
        ]);

        $navbar->links()->saveMany([
            new Link(['label' => 'About', 'href' => 'home']),
            new Link(['label' => 'Projects', 'href' => 'home']),
            new Link(['label' => 'Blog', 'href' => 'home']),
            new Link(['label' => 'Contact', 'href' => 'home']),
        ]);
    }
}
