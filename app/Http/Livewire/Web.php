<?php

namespace App\Http\Livewire;
use App\Models\Feature;
use App\Models\Apartament;
use App\Models\ApartamentFeature;
use App\Models\Landlord;
use App\Models\User;
use App\Notifications\Verify;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Illuminate\Notifications\Messages\MailMessage;
use  DateTime;
class Web extends Component
{
    public $features = [];
    public $feature_ids = [];
    public $message = null;

    
    public function render()
    {
        return view('livewire.web');
    }

    
 
/** https://laravel.com/docs/8.x/notifications#formatting-mail-messages
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
    public function getApproves($apartament_id)
    {
        // if user is older 18 send
        $user = auth()->user();
        $today = new DateTime(date("Y-m-d"));
        $userAge = new DateTime($user->birthday);
        $days = $today->diff($userAge)->days;
        $years=round($days/365);

        $ocuupated= Apartament::find($apartament_id)->reserved;
        $landlord_id=Apartament::find($apartament_id)->landlord_id;
        if($years < 18){
            return  $this->message ='18';
     
        }elseif($apartament_id == 0){
            return   $this->message ='occupied';
        }else{
                $details=[
                    'greeting'=>'Hello!!!',
                    'body'=>'If you click on the following link you will validate the reservation of the flat',                   
                    'actiontext'=>'Validate the flat reserved',
                    'actionurl'=>url('/approve/'.$landlord_id),
                    'lastline'=>'thank you!'
                ];
            
         
           $user_id=LandLord::find($landlord_id)->user_id;     
           $landlord=User::find($user_id);
           Notification::send($landlord,new Verify($details));
           return   $this->message ='ok';
        }
    }



    public function mount(){
        $this->features = Feature::all();
    }
}
