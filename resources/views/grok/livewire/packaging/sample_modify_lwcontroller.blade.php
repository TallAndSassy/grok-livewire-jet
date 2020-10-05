// In file: 'packages/eleganttechnologies/grok/src/Components/DemoUiChunks/AANothing.php'


# namespace App\Http\Livewire\Flash; OLD NAMESPACE
  namespace TallAndSassy\GrokLivewireJet\Components\DemoUiChunks; #New, Package Namespace

public function render()
    {
        // was:
        // return view('livewire.demo-ui-chunks.a-a-nothing');
           return view('tassygroklivewirejet::livewire.demo-ui-chunks.a-a-nothing');
    }
