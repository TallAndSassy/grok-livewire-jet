<?php

namespace TallAndSassy\GrokLivewireJet\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use TallAndSassy\GrokLivewireJet\GrokLivewireJetServiceProvider;

class TestCase extends Orchestra
{
    protected $userDefinedBladePrefix;
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'TallAndSassy\\GrokLivewireJet\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        // route prefix
        // this must match/sync with what was put in
        // tests/Feature/Http/Controllers/GrokLivewireJetControllerTest.php/setup
        // Hint: 'Blade Prefix' (all lowercase, no spaces) is a substition string when using this as a template
        $this->userDefinedBladePrefix = uniqid("Blah");
        Route::tassygroklivewirejet($this->userDefinedBladePrefix); # what is our prefix route (just for testing)?
    }

    protected function getPackageProviders($app)
    {
        return [
            GrokLivewireJetServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);


        include_once __DIR__.'/../database/migrations/create_grok_livewire_jet_table.php';
        (new \CreateGrokLivewireJetTable())->up();
    }
}
