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
    public $message = null;

    
    public function render()
    {
        return view('livewire.web');
    }

    
 

    public function getApproves($apartament_id)
    {
        // if is older 18 send
        $user = auth()->user();
        $userAge=$user->birthday;
        $today = date("Y-m-d");
        // if apartamenmt is occupied
        $ocuupated= Apartament::find($apartament_id)->reserved;

        if($userAge < $today){
            $this->message ='18';//$apartament_id;
     
        }elseif($apartament_id == 0){
            $this->message ='occupied';
        }else{
            $this->message ='ok';
            //send mail 

        }
       
    }

  





    public function mount(){
        $this->features = Feature::all();
    }
}
