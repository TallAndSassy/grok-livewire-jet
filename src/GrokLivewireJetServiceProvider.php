<?php

namespace TallAndSassy\GrokLivewireJet;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TallAndSassy\GrokLivewireJet\Commands\GrokLivewireJetCommand;
use TallAndSassy\GrokLivewireJet\Http\Controllers\GrokLivewireJetController;

class GrokLivewireJetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/grok-livewire-jet.php' => config_path('grok-livewire-jet.php'),
                ],
                'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../resources/views' => base_path('resources/views/vendor/grok-livewire-jet'),
                ],
                'views'
            );

            $migrationFileName = 'create_grok_livewire_jet_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes(
                    [
                        __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path(
                            'migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName
                        ),
                    ],
                    'migrations'
                );
            }

            $this->publishes([
                 __DIR__.'/../resources/public' => public_path('eleganttechnologies/grok'),
                ], ['public']);

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('tallandsassy/grok-livewire-jet'),
            ], 'grok.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/tallandsassy/grok-livewire-jet'),
            ], 'grok.views');*/



            // Registering package commands.
            $this->commands(
                [
                    GrokLivewireJetCommand::class,
                ]
            );
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tassygroklivewirejet');


        Route::macro(
            'tassygroklivewirejet',
            function (string $prefix) {
                Route::prefix($prefix)->group(
                    function () {
                        // Prefix Route Samples -BEGIN-
                        // Sample routes that only show while developing...
                        if (App::environment(['local', 'testing'])) {
                            // prefixed url to string
                            Route::get(
                                '/TallAndSassy/GrokLivewireJet/sample_string', // you will absolutely need a prefix in your url
                                function () {
                                    return "Hello GrokLivewireJet string via blade prefix";
                                }
                            );

                            // prefixed url to blade view
                            Route::get(
                                '/TallAndSassy/GrokLivewireJet/sample_blade',
                                function () {
                                    return view('tassygroklivewirejet::sample_blade');
                                }
                            );

                            // prefixed url to controller
                            Route::get(
                                '/TallAndSassy/GrokLivewireJet/controller',
                                [GrokLivewireJetController::class, 'sample']
                            );
                        }
                        // Prefix Route Samples -END-

                        // TODO: Add your own prefixed routes here...
                    }
                );
            }
        );
        Route::tassygroklivewirejet('tassygroklivewirejet'); // This works. http://test-jet.test/tassygroklivewirejet/TallAndSassy/GrokLivewireJet/string
        // They are addatiive, so in your own routes/web.php file, do Route::tassygroklivewirejet('staff'); to
        // make http://test-jet.test/staff/TallAndSassy/GrokLivewireJet/string work


        // global url samples -BEGIN-
        if (App::environment(['local', 'testing'])) {
            // global url to string
            Route::get(
                '/grok/TallAndSassy/GrokLivewireJet/sample_string',
                function () {
                    return "Hello GrokLivewireJet string via global url.";
                }
            );

            // global url to blade view
            Route::get(
                '/grok/TallAndSassy/GrokLivewireJet/sample_blade',
                function () {
                    return view('tassygroklivewirejet::sample_blade');
                }
            );

            // global url to controller
            Route::get('/grok/TallAndSassy/GrokLivewireJet/controller', [GrokLivewireJetController::class, 'sample']);
        }
        // global url samples -END-

        // TODO: Add your own global routes here...

        \Livewire\Livewire::component('tassygroklivewirejet::a-a-nothing',               \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\AANothing::class);
        \Livewire\Livewire::component('tassygroklivewirejet::a-b-almost-nothing',        \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\ABAlmostNothing::class);
        \Livewire\Livewire::component('tassygroklivewirejet::a-c-nothing-but-formatted', \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\ACNothingButFormatted::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-a-button',                \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BAButton::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-b-button-count',          \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BBButtonCount::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-c-button-modal',          \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BCButtonModal::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-d-button-modal-dialog',   \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BDButtonModalDialog::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-e-button-poll-reset',     \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BEButtonPollReset::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-f-button-modal-wire',     \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BFButtonModalWire::class);
        \Livewire\Livewire::component('tassygroklivewirejet::b-f-button-modal-wire-form', \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\BFButtonModalWireForm::class);
        \Livewire\Livewire::component('tassygroklivewirejet::c-a-input',                 \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\CAInput::class);



        // GROK
        if (App::environment(['local', 'testing'])) {
            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'TallAndSassy', 'grok-livewire-jet', 'resources/views/grok', 'tassygroklivewirejet');//tassygroklivewirejet gets macro'd out
            Route::get('/grok/TallAndSassy/GrokLivewireJet', fn () => view('tassygroklivewirejet::grok/index'));
        }
        //        if (App::environment(['local', 'testing'])) {
        //            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'TallAndSassy', 'grok-jet-ui', 'resources/views/grok', 'tassygrokjetui');
        //            #Route::get('/grok/TallAndSassy/GrokJetUi', fn () => view('tassy::grok/index'));
        //        }
        // TODO: Add your own other boot related stuff here...
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/grok-livewire-jet.php', 'grok-livewire-jet');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
