<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartament;
use App\Models\User;

class approveController extends Controller
{
    function change(Request $request)
    {
        $landlord_id=LandLord::where('user_id', $request->input('id'))->pluck('id');
        //Apartament::where('landlord_id',$landlord_id)->update(['reserved' => 1]);
        $apartament =  Apartament::where('landlord_id',$landlord_id)->get();
        $apartament->reserved ='1';
        $apartament->save();
        return response()->json();
   }
}
