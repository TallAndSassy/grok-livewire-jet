<?php

namespace TallAndSassy\GrokLivewireJet\Components\DemoUiChunks;

use Livewire\Component;

class BCButtonModal extends Component
{
    public int $count = 205;
    public bool $showingModal = false;

    public function doClick()
    {
        $this->count = $this->count + 5;
    }


    public function render()
    {
        return view('tassygroklivewirejet::grok.livewire.demo-ui-chunks.b-c-button-modal');
    }
}
