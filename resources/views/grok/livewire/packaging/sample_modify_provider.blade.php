<?php


    // Some file, like 'src/GrokServiceProvider.php'
     public function boot()
    {
        ...
        // Make view available
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'grok');

        // Our Css/Js
        $this->publishes([
            __DIR__.'/public' => public_path('eleganttechnologies/grok'),
        ]);

        //Configure the routes offered by the application.
        // Still learning - this should work, but gives Trying to get property 'profile_photo_url' of non-object (View:
        #$this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load up each livewire component
        \Livewire::component('tassygroklivewirejet::a-a-nothing', \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\AANothing::class);
        \Livewire::component('tassygroklivewirejet::a-b-almost-nothing', \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\ABAlmostNothing::class);
        ...

    }
