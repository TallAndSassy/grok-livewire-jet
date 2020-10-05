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
            fn (string $modelName) => 'TallAndSassy\\GrokLivewireJet\\Database\\Factories\\' . class_basename(
                $modelName
            ) . 'Factory'
        );


        $this->afterApplicationCreated(
            function () {
                $this->makeACleanSlate();
            }
        );

        $this->beforeApplicationDestroyed(
            function () {
                $this->makeACleanSlate();
            }
        );

        parent::setUp();
        Facade::setFacadeApplication(app());


        // route prefix
        // this must match/sync with what was put in
        // tests/Feature/Http/Controllers/GrokLivewireJetControllerTest.php/setup
        // Hint: 'Blade Prefix' (all lowercase, no spaces) is a substition string when using this as a template
        $this->userDefinedBladePrefix = uniqid("Blah");
        Route::tassygroklivewirejet($this->userDefinedBladePrefix); # what is our prefix route (just for testing)?
    }

    public function makeACleanSlate()
    {
        Artisan::call('view:clear');
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
        $app['config']->set(
            'database.connections.sqlite',
            [
                'driver' => 'sqlite',
                'database' => ':memory:',
                'prefix' => '',
            ]
        );

        // Using Livewire: Add this config view paths..... Big mess trying to cli testing to work.
        // see: https://forum.laravel-livewire.com/t/livewire-class-does-not-exists-package-development/1443/5
        #$app['config']->set('flatform', require  __DIR__ . '\..\config\flatform.php');
        $app['config']->set('view.paths', [__DIR__ . '/../views', resource_path('views')]);
        $app['config']->set('app.key', 'base64:Uk5k0bzyWzVEef0ylZMZFkiM8YebuHnoIlNNWvdC47U=');
        $this->afterApplicationCreated(
            function () {
                $this->makeACleanSlate();
            }
        );
        $this->beforeApplicationDestroyed(
            function () {
                $this->makeACleanSlate();
            }
        );
        \Illuminate\Support\Facades\Facade::setFacadeApplication(app());

        $app['config']->set('session.driver', 'file');


        include_once __DIR__ . '/../database/migrations/create_grok_livewire_jet_table.php';
        (new \CreateGrokLivewireJetTable())->up();
    }

    protected function resolveApplicationHttpKernel($app)
    {
        $app->singleton('Illuminate\Contracts\Http\Kernel', 'Tests\HttpKernel');
    }

    public function test_test_envirement()
    {
        $this->assertNotNull(app('flatform'));
    }
}
