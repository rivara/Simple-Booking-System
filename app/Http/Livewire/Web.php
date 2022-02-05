<?php

namespace App\Http\Livewire;
use App\Models\Feature;
use App\Models\Apartament;
use Livewire\Component;

class Web extends Component
{
    public $count = 0;

    public $features = [];
    public $selectedFeatures = [];

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        //relationship m:n
        //$features=Feature::whereIn('id',$this->selectedFeatures)->get();
        $features=Feature::all();
        dd($features);
        return view('livewire.web',['apartaments'=>$apartaments]);
    }

    
    public function mount(){
        $this->features = Feature::all();
    }
}
