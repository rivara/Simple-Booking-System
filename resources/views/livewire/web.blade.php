<div>
<div style="text-align: center">

    <button wire:click="increment">+</button>

    <h1>{{ $count }}</h1>
    
    <div class="container">
        <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">



  


        <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
      </script>
  
        <!--These jQuery libraries for 
           chosen need to be included-->
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js">
        </script>
        <link rel="stylesheet" 
              href=
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />
  
        <!--These jQuery libraries for select2 
            need to be included-->
        <script src=
"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js">
       </script>
        <link rel="stylesheet" 
              href=
"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
        <script>
            $(document).ready(function() {
                //Select2
                $(".country").select2({
                    maximumSelectionLength: 2,
                });
                //Chosen
                $(".country1").chosen({
                    max_selected_options: 2,
                });
            });
        </script>
    </head>
    <body>
        <form>
            <h4>Selections using Select2</h4>
            <select class="country"
                    multiple="true"
                    style="width: 200px;">
                <option value="1">India</option>
                <option value="2">Japan</option>
                <option value="3">France</option>
            </select>
        </form>
    </body>
</html>




























    
        </div>


            <div class="col-md-2"></div>
            <div class="col-md-8 box">
                <div class="floatleft">
                        <i class="fas fa-home fa-5x orange"></i>
                </div>
                <div class="floatright">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    </p>
                    <button type="button" class="btn btn-primary floatright">Get</button>    
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
</div>
