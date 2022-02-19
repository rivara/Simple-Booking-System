@extends('layouts.app')
@livewireStyles
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Do it,Validate the apartament reserved</h1>
             <h2>thank you</h2>
             <h3>:)</h3>
        </div>
    </div>
</div>
<!-- update db with this information -->

<?php 
use App\Models\Apartament;
use App\Models\Landlord;
$landlord_id=LandLord::where('user_id',$id)->pluck('id');
Apartament::where('landlord_id',$landlord_id)->update(['reserved' => 1]);

?>
@endsection

