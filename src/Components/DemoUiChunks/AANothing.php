<?php

namespace  TallAndSassy\GrokLivewireJet\Components\DemoUiChunks;

use Livewire\Component;

class AANothing extends Component
{
    public string $name = "JJByDefault";

    public function render()
    {
        return view('tassygroklivewirejet::grok.livewire.demo-ui-chunks.a-a-nothing');
    }
}
