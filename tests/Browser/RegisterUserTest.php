<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function text_check_if_root_site_is_correct(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test')
                    ->assertSee('Laravel');
        });
    }
}
