<?php

namespace App\Http\Livewire;
use App\Models\Feature;
use App\Models\Apartament;
use App\Models\ApartamentFeature;
use Livewire\Component;

class Web extends Component
{
    public $features = [];
    public $selectedFeatures = [];
    public $feature_ids = [];

   
    public function render()
    {
        //relationship m:n
       // $features=Feature::whereIn('id',$this->selectedFeatures)->get();
       // $apartaments_ids=ApartamentFeature::whereIn('feature_id',$this->selectedFeatures)->pluck('apartament_id');
       // $this->apartaments=Apartament::whereIn('id',$apartaments_ids)->get();

        return view('livewire.web');
    }

    
    public function mount(){
        $this->features = Feature::all();
    }
}
