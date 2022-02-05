

<div class="container">
    <div class="row">
       <!-- APARTAMENT SEARCH-->
            <div class="col-md-6">
                <div wire:ignore>
                    <label for="taskSelect" class="form-label">Select Tasks</label>
                        <select class="form-select" id="taskSelect" multiple="multiple" >
                            @foreach($features as $feature)
                                <option id="{{$feature->id}}">{{$feature->name}}</option>
                            @endforeach
                        </select>
                </div>
                <p>Selected Tasks :</p> 
                @forelse($selectedFeatures as $feature)
                    <b>{{$feature}},</b>
                @empty
                    None
                @endforelse
            </div>
            <div class="col-md-6"></div>
        <!-- APARTAMENT LIST-->
                @foreach($features as $feature)
                <div class="col-md-2"></div>
                <div class="col-md-8 box">
                    <div class="floatleft">
                            <i class="fas fa-home fa-5x orange"></i>
                    </div>
                    <div class="floatright">
                        <b>{{$feature->id}}</b>
                        <button type="button" class="btn btn-primary floatright">Get</button>    
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
        @this.set('selectedFeatures', $(this).val());
    });
});
</script>