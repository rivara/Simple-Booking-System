<?php

namespace App\Http\Livewire;
use App\Models\Feature;
use App\Models\Apartament;
use App\Models\ApartamentFeature;
use Livewire\Component;
use  DateTime;
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

    
 
/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
    public function getApproves($apartament_id)
    {
        // if is older 18 send
        $user = auth()->user();
        $today = new DateTime(date("Y-m-d"));
        $userAge = new DateTime($user->birthday);
        $days = $today->diff($userAge)->days;
        $years=round($days/365);

        $ocuupated= Apartament::find($apartament_id)->reserved;

        if($years < 18){
            return  $this->message ='18';
     
        }elseif($apartament_id == 0){
            return   $this->message ='occupied';
        }else{
           
            //send mail 
            $url = url('/confirm/'.$apartament_id.'?1');
            return (new MailMessage)
            ->greeting('Hello!')
            ->line('One of your invoices has been paid!')
            ->action('Aprueve Invoice', $url)
            ->line('Thank you for using our application!');
        }
       


    }

  





    public function mount(){
        $this->features = Feature::all();
    }
}
