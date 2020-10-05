<?php


namespace TallAndSassy\GrokLivewireJet\Tests\Feature\Http\Controllers;

class GrokLivewireJetControllerTest extends \TallAndSassy\GrokLivewireJet\Tests\TestCase
{
    /** @test */
    public function global_urls_returns_ok()
    {
        // Test hard-coded routes...
        $this
            ->get('/grok/TallAndSassy/GrokLivewireJet/sample_string')
            ->assertOk()
            ->assertSee('Hello GrokLivewireJet string via global url.');
        $this
            ->get('/grok/TallAndSassy/GrokLivewireJet/sample_blade')
            ->assertOk()
            ->assertSee('Hello GrokLivewireJet from blade in TallAndSassy/GrokLivewireJet/groks/sample_blade');
        $this
            ->get('/grok/TallAndSassy/GrokLivewireJet/controller')
            ->assertOk()
            ->assertSee('Hello GrokLivewireJet from: TallAndSassy\GrokLivewireJet\Http\Controllers\GrokLivewireJetController::sample');
    }


    /** @test */
    public function prefixed_urls_returns_ok()
    {
        // Test user-defined routes...
        // Reproduce in routes/web.php like so
        //  Route::tassygroklivewirejet('staff');
        //  http://test-tallandsassy.test/staff/TallAndSassy/GrokLivewireJet/string
        //  http://test-tallandsassy.test/staff/TallAndSassy/GrokLivewireJet/blade
        //  http://test-tallandsassy.test/staff/TallAndSassy/GrokLivewireJet/controller
        $userDefinedBladePrefix = $this->userDefinedBladePrefix; // user will do this in routes/web.php Route::tassygroklivewirejet('url');

        // string
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/GrokLivewireJet/sample_string")
            ->assertOk()
            #->assertSee('hw(TallAndSassy\GrokLivewireJet\Http\Controllers\GrokLivewireJetController)');
        ->assertSee('Hello GrokLivewireJet string via blade prefix');

        // blade
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/GrokLivewireJet/sample_blade")
            ->assertOk()
            ->assertSee('Hello GrokLivewireJet from blade in TallAndSassy/GrokLivewireJet/groks/sample_blade');

        // controller
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/GrokLivewireJet/controller")
            ->assertOk()
            ->assertSee('Hello GrokLivewireJet from: TallAndSassy\GrokLivewireJet\Http\Controllers\GrokLivewireJetController::sample');
    }
}
