<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <?php

      include_once('conn.php');

      if(!empty($_GET['search'])){

        $sea =$_GET['search'];

        $sql="SELECT * FROM product WHERE name LIKE '$sea'";

        $result= mysqli_query($con,$sql);

      }



      

      ?>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





    <title>buy our product</title>

  </head>

  <style>

  #filter{
    height:100%;

  }

  </style>

  <body>

 <div class="menu" style="opacity:70%;position:static;"<?php include('menu1.php'); ?>

 <div class="banner" style="background-color:#ffffcc;" width="100%"><center><img src="image/logo.jpeg"></center></div>

<br><br>

<div class="icon_filter"><img src="image/filter.png" alt="filter" width="25px"></div>

<button id="btn_search" class="btn btn-outline-success" type="submit" style="float:right;padding-right:10px;margin-top:-35px">ค้นหา <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">

  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>

</svg></button>

<input id="search" class="search" type="search" placeholder="ค้นหาสินค้า" aria-label="ค้นหาสินค้า" style="float:right;margin-top:-33px;padding-right:15px;">

</form>

<br>

<div class="container">

  <div class="row">

    <br>

    <h2 align="center">สั่งซื้อสินค้า</h2>

    <br>

    <div class="col-md-3" id="filter">

      <div class="list-group">

        <h3>หมวดหมู่</h3>

        <?php

    $query = "SELECT DISTINCT(type) FROM product";

    $result1 = mysqli_query($con,$query);

    foreach($result1 as $row){

      ?>

      <div class="list-group-item checkbox">

        <label>

        <input type="checkbox" class="type" value="<?php echo $row['type']; ?>"  > <?php echo $row['type']; ?>

        </label>

      </div>

    

       <?php } ?>

      </div>

<div class="list-group">

     <h3>ราคา</h3>

 <input type="hidden" id="hidden_minimum_price" value="0" />

                    <input type="hidden" id="hidden_maximum_price" value="1000" />

                    <p id="price_show">0 -1000</p>

                    <div id="price_range"></div>

					

                </div>    

    </div>

    <div class="col-md-9">

      <br />

<div class="row filter_data">

  

</div>

 </div>

   </div>

    </div>

<script src="slide.js">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){
  checksize();

   filter_data();

  function filter_data(){

    var action = 'fetch_data';

    var type = get_filter('type');

    var minimum_price = $('#hidden_minimum_price').val();

    var maximum_price = $('#hidden_maximum_price').val();

    $.ajax({

      url:"fetch_data.php",

      method:"POST",

      data:{action:action,type:type,minimum_price:minimum_price, maximum_price:maximum_price},

      success:function(data){

        $('.filter_data').html(data);

      }





    });

  }



  function get_filter(class_name){

    var filter = [];

    $('.'+class_name+':checked').each(function(){

         filter.push($(this).val());

   });

    return filter;

  }





 $("#btn_search").click(function(){

$.ajax({

  url: "fetch_data.php",

  type: "POST",

  data: {action:'search',find:$(".search").val()},

  success:function(data){

        $('.filter_data').html(data);

      }

  });

});

 $('#price_range').slider({

        range:true,

        min:0,

        max:1000,

        values:[0, 1000],

        step:10,

        stop:function(event, ui)

        {

            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);

            $('#hidden_minimum_price').val(ui.values[0]);

            $('#hidden_maximum_price').val(ui.values[1]);

            filter_data();

        }

    });

$(".type").click(function(){

filter_data();



});

$(".icon_filter").click(function(){

  $("#filter").slideToggle('slow');



});
function checksize(){
  var w = window.innerWidth;
  var h = window.innerHeight;
  if(w >= 900){
    $(".icon_filter").hide();
  }
  if(w < 1000){
    $("#filter").hide();
     }
}
});









    </script>



    <!-- Optional JavaScript; choose one of the two! -->



    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    -->

  </body>

</html>