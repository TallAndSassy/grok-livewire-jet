<?php

namespace TallAndSassy\GrokLivewireJet\Components\DemoUiChunks;

use Livewire\Component;

class BBButtonCount extends Component
{
    public int $count = 99;

    public function doClick()
    {
        $this->count = $this->count + 1;
    }
    public function render()
    {
        return view('tassygroklivewirejet::grok.livewire.demo-ui-chunks.b-b-button-count');
    }
}
