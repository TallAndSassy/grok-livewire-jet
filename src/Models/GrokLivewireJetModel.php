<?php

namespace TallAndSassy\GrokLivewireJet\Models;

use Illuminate\Database\Eloquent\Model;

class GrokLivewireJetModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'grok-livewire-jet';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
