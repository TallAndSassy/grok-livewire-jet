<?php

namespace TallAndSassy\GrokLivewireJet;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallAndSassy\GrokLivewireJet\GrokLivewireJet
 */
class GrokLivewireJetFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'grok-livewire-jet';
    }
}
