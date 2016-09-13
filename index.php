<!DOCTYPE html>
<html lang="de">
<head>
<title>Schalter</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<style>
.switch .btn-group {
	align:center;
}
.switch .title {
	font-size:x-large;
}
.switch  {
	margin-top:2em;
}
</style>
 
</head>
<body>

<div class="container" >
<div class="row" >

<div class="switch col-xs-6">
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="A" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="A" data-action="0">AUS</button>
</div> <div class="title"> Fernsehecke </div>
</div>

<div class="switch col-xs-6">
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="B" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="B" data-action="0">AUS</button>
</div> <div class="title"> Tetris Lampe </div>
</div>

<div class="switch col-xs-6">
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="C" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="C" data-action="0">AUS</button>
</div> <div class="title"> Ladegerät </div>
</div>

<div class="switch col-xs-6">
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="D" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="D" data-action="0">AUS</button>
</div> <div class="title"> TODO </div>
</div>

</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
$(function(){

   $('.switch button').on('click',function(event){

         var button = $(event.target);
 
         var action = button.attr('data-action'); 
         var group = button.attr('data-group'); 
         var schalt = button.attr('data-switch'); 

         $.get('http://homepi/switch/switch.php?group='+group+'&switch='+schalt+'&action='+action,
		function(data){
			
		});
	
   });


   $('.switch').each(function(i,elem){
       	
   });

});
</script>

</body>
</html>
