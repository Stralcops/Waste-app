<div class="map">

<div id="draggable" class="ui-widget-content raphael draggable" >

</div>

<div id="posX">

</div>
<div id="posY">

</div>
<div id="finalX">

</div>
<div id="finalY">

</div>
<style media="screen">
  body{
    background: #362d24;
  }
  .map
  {
    height: 1000px;
    width:100%;
    background-image: url("<?php echo base_url() ?>assets/img/pa.jpg");
    background-repeat: no-repeat;
  }
  #posX{
    position: fixed;
    bottom: 20px;
    left: 20px;
    height: 50px;
    width: 100px;
  }
  #posY{

    position: fixed;
    bottom: 20px;
    left: 250px;
    height: 50px;
    width: 100px;
  }
</style>

</div>

<script type="text/javascript">

$(document).ready(function()
{
$( ".draggable" ).offset({ top: 838, left: 820 });

$( "#draggable" ).resizable({
    aspectRatio: 4 / 4
  });
$( function() {
  $( ".draggable" ).draggable( {
      drag: function(){
          var offset = $(this).offset();
          var xPos = offset.left;
          var yPos = offset.top;
          $('#posY').html('y: ' + yPos);
          $('#posX').html('x: ' + xPos);
      },
      stop: function(){
       var finalOffset = $(this).offset();
       var finalxPos = finalOffset.left;
       var finalyPos = finalOffset.top;

         var data = {
           posX_user: finalxPos,
           posY_user: finalyPos
         };
         $.ajax({
           url:'<?php echo base_url() ?>personnages/update_position',
           data: data,
           type: "POST",
           success(result)
           {
             console.log(result);

           },
           error(result)
           {
             console.log(result);
           }
         });


   },
  });

} );


});


</script>
