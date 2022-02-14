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

<input type="hidden" value={{$id}} id="id_user"  />
<!-- update db with this information -->
<script>
    $( document ).ready(function() {
    // send to db 
    $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 

    var id=$('#id_user').val();
    $.ajax({
          url:'/approve/finish',
          data:{id:id},
          type:'post',
          success: function () {
                alert("ok");
          },
          error:function(){
              alert('error!! it`s cant update');
          }
       });
    });
</script>
@endsection

