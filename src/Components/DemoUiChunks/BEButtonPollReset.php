<?php

namespace TallAndSassy\GrokLivewireJet\Components\DemoUiChunks;

use Livewire\Component;

class BEButtonPollReset extends Component
{
    public int $count = 0;

    public function doClick()
    {
        $this->count = 0;
        #session()->flash('message', 'Counter reset');

        #flash('Your request was successful!')->success()->livewire($this);
        #flash('Your request was noticed!')->notice()->livewire($this);
    }
    public function render()
    {
        $this->count = $this->count + 1;

        return view('tassygroklivewirejet::grok.livewire.demo-ui-chunks.b-e-button-poll-reset');

    }
}
