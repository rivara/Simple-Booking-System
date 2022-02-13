
<?php 
use App\Models\Feature; 
use App\Models\ApartamentFeature;
use App\Models\Apartament;
use App\Models\Landlord;
?>
<div class="container">
    <div class="row">
       <!-- APARTAMENT SEARCH-->
            <div class="col-md-6">
                <div wire:ignore>
                    <label for="taskSelect" class="form-label">Select Tasks</label>
                        <select class="form-select" id="taskSelect" multiple="multiple" >
                            @foreach($features as $feature)
                                <option id="{{$feature->id}}" value="{{$feature->id}}" name="{{$feature->name}}">{{$feature->name}}</option>
                            @endforeach
                        </select>
                </div>
                <p>Selected Tasks :</p> 
                @forelse($selectedFeatures as $feature)
                    <b>#{{$feature}},</b>
                @empty
                    None
                @endforelse
            </div>
            <div class="col-md-6"></div>


        
        <!-- VALIDATION -->

            @if($message!=null)
                @if($message=='18')
                    <div id="message" class="alert alert-danger error" role="alert" >
                        Must be oltther tan 18 :(
                    </div>
                @endif
                @if($message=='occupied')
                    <div id="message" class="alert alert-danger error" role="alert">
                        This apartament is reserved :(
                    </div>
                @endif
                @if($message=='ok')
                    <div id="message" class="alert alert-success error" role="alert">
                        The request must be approved :)
                    </div>
                @endif
            @endisset

        <!-- APARTAMENT LIST-->
                <?php $apartament_ids=ApartamentFeature::whereIn('feature_id',$feature_ids )->distinct('apartament_id')->pluck('apartament_id')?>
                @foreach($apartament_ids as $apartament_id)
                    <div class="col-md-2"></div>
                    <div class="col-md-8 box">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">   
                                        <i class="fas fa-home fa-5x grey"></i>
                                    </div>
                                    <div class="col-md-4">   
                                        <p>Apartament:&nbsp;<b>{{Apartament::find($apartament_id)->description}}</b></p>
                                        <p>LandLord:&nbsp;<b>{{Landlord::find(Apartament::find($apartament_id)->landlord_id)->name }}</b></p>
                                    </div>  
                                    <div class="col-md-4"> 
                                        <br /><br />
                                        <button   wire:click="getApproves('{{ $apartament_id }}')"  class="btn btn-secondary floatright" value="{{$apartament_id}}">Get Approves</button>    
                                    </div> 
                                </div>   
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                @endforeach
        </div>
    </div>
</div>


<script>
       $(document).ready(function() {
        $('#taskSelect').select2();
        $('#taskSelect').on('change', function (e) {
            @this.set('selectedFeatures',[$("option:selected", this).text()]);
            //send to backend
            @this.set('feature_ids',$(this).val());
        });
        setTimeout(function() {
        $("#message").hide('blind', {}, 500)
        }, 5000);
});
</script>