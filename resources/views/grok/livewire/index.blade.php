<x-grok::grok_page_layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LiveWire
        </h2>
    </x-slot>

    @php
    $asrGrokMe = \ElegantTechnologies\Grok\GrokWrangler::getAskGrok();//\ElegantTechnologies\Grok\GrokWrangler::getAsrGrok_byStaticClass(\ElegantTechnologies\Grok\GrokServiceProvider::class);

        $pathOffRouteToGroks = "vendor/{$asrGrokMe['grokViewOffPackageRoot']}/livewire";
//'vendor/tallandsassy/grok-livewire-jet/resources/views/grok/livewire/packaging/sample_sample_blade_new.blade.php' is not there.
//                                       resources/views/grok/livewire/packaging/sample_test_include_new.blade.php
//
    @endphp

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                    <x-jet-section-border/>
                     <x-grok::action-section>
                    <x-slot name="title">
                       Overview
                    </x-slot>

                    <x-slot name="description">
                        <div class="text-xs">
                        Getting oriented

                        </div>
                    </x-slot>
                      <x-slot name="content">
                          Livewire is a different beast. Each chunk consists of a
                          1) app/http/livewire/BlahController.php
                          2) views/resources/livewire/Blah.blade.php
                      </x-slot>
                     </x-grok::action-section>
                     <x-jet-section-border/>
                    <div id="livewirestuff">
                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                            <h3 class="text-2xl font-semibold text-gray-800">Now for a bunch of livewire stuff</h3>
                            <x-jet-section-border/>

                            @livewire('tassygroklivewirejet::a-a-nothing')
                            <x-jet-section-border/>
                            <x-grok::action-section title="Packaging stuff">
                                <x-slot name="description">
                                    @include('tassygroklivewirejet::grok.livewire.packaging.description',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
                                </x-slot>

                                <x-slot name="content">
                                    @include('tassygroklivewirejet::grok.livewire.packaging.content',['pathOffRouteToGroks'=>$pathOffRouteToGroks])
                                </x-slot>
                            </x-grok::action-section>

                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::a-b-almost-nothing')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::a-c-nothing-but-formatted')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-a-button')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-b-button-count')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-c-button-modal')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-d-button-modal-dialog')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-e-button-poll-reset')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::b-f-button-modal-wire')
                            <x-jet-section-border/>
                            livewire('tassygroklivewirejet::b-f-button-modal-wire-form')
                            <x-jet-section-border/>
                            @livewire('tassygroklivewirejet::c-a-input')
                            <x-jet-section-border/>


                        </div>

                    </div>
                    <x-jet-section-border/>

                </div>
            </div>
        </div>
    </div>


</x-grok::grok_page_layout>
