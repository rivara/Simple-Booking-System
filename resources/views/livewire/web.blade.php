
<?php 
use App\Models\Feature; 
use App\Models\ApartamentFeature;
use App\Models\Apartament;
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
        <!-- APARTAMENT LIST-->
                <!-- get element -->
                <?php 
                // $features=Feature::whereIn('id',$this->selectedFeatures)->get();
       // $apartaments_ids=ApartamentFeature::whereIn('feature_id',$this->selectedFeatures)->pluck('apartament_id');
       // $this->apartaments=Apartament::whereIn('id',$apartaments_ids)->get();
                ?>
                
                <?php $apartament_ids=ApartamentFeature::whereIn('feature_id',$feature_ids )->distinct('apartament_id')->pluck('apartament_id')?>

                @foreach($apartament_ids as $apartament_id)
                <div class="col-md-2"></div>
                <div class="col-md-8 box">
                    <div class="floatleft">
                            <i class="fas fa-home fa-5x orange"></i>
                    </div>
                    <div class="floatright">
                   
                        <b>{{Apartament::find($apartament_id)->description}}</b>
                        <b>{{Apartament::find($apartament_id)->reserved}}</b>
                        <button type="button" class="btn btn-primary floatright" value="{{$apartament_id}}">Get</button>    
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

        //@this.set('selectedFeatures', $(this).val());
        @this.set('selectedFeatures',[$("option:selected", this).text()]);
        //send to backend
        @this.set('feature_ids',$(this).val());
    });
});
</script>