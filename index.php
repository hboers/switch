<!DOCTYPE html>
<html lang="de">
<head>
<title>Schalter</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Security-Policy" content="default-src 'self' 192.168.178.*;" />
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<style>
body {
  background-color:black;
}
.room {
  overflow:hidden;
  color:white;
  font-size:20px;
  margin-top:.5em;
  margin-bottom: .5em;
  border-bottom:1px solid white;
  white-space: nowrap;
}
.switch button { 
  width:50%;
}
.switch .btn-group { 
  width:100%;
}
.switch .btn-default.active{ 
  font-weight:bold;
}
.switch .btn-default.inactive, 
.switch .btn-primary.inactive {
  color: grey;
}
.switch .title {
  display:block;
  white-space: nowrap;
  float:left;
  overflow:hidden;
  font-size:16px;
  color: white;
}
.switch .time {
  float:right;
  overflow:hidden;
  font-size:14px;
  color: lightgrey;
}
.switch  {
  margin-bottom:1em;
}
</style>
 
</head>
<body>

<div class="container" >
<div class="row" >

<div class="col-xs-12">
<div class="room">Wohnzimmer</div>
</div>

<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title">TV</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="D" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="D" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>

<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title">fireTV, Sound, Apple TV, etc.</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="A" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="A" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>

<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title">Fluter</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="C" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="C" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>


<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title">Tetris Lampe</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11110" data-switch="B" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11110" data-switch="B" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>

<div class="col-xs-12">
<div class="room">Heinrich's Arbeitsplatz </div>
</div>

<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title"> Fluter</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11101" data-switch="A" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11101" data-switch="A" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>


<div class="col-xs-12">
<div class="room">Schlafzimmer</div>
</div>

<div class="switch col-md-4 col-xs-6 col-lg-3">
<div class="title">TV Schalfzimmer</div>
<div class="btn-group btn-toggle"> 
<button class="btn btn-lg btn-default" data-group="11101" data-switch="B" data-action="1">AN</button>
<button class="btn btn-lg btn-primary" data-group="11101" data-switch="B" data-action="0">AUS</button>
</div> 
<div class="time"> </div>
</div>

</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

function getButtonUrl(button,service) {
  var action = button.attr('data-action'); 
  var group = button.attr('data-group'); 
  var schalt = button.attr('data-switch'); 
  return 'http://192.168.178.20/switch/'+service+'.php?group='+group+'&switch='+schalt+'&action='+action;
}

function updateTime() {
  $('.switch div.time').html('&nbsp;');
  $('.switch button.btn-default.active').each(function(i,elem){
    var button = $(elem);
    var time = $(button).parents().eq(1).find('div.time');
    var url = getButtonUrl(button,'time'); 
    $.get(url, function(data){
       $(time).text(data);
    });
  });
}

function updateState() {
  $('.switch button').each(function(i,elem){
    var button = $(elem);
    var url = getButtonUrl(button,'state'); 
    $.get(url, function(data){
       $(button).removeClass('active');
       $(button).removeClass('inactive');
       $(button).addClass(data);
    });
  });
}

function update() {
  updateState();			
  setTimeout(updateTime,300);
}

$(function(){
  $('.switch button').on('click',function(event){
    var button = $(event.target);
    var url = getButtonUrl(button,'switch'); 
    $.get(url, function(data){
      update();			
    });
  });
  update();
  setInterval(
    function(){
      updateState();
    }, 60000);
  setInterval(
    function(){
      updateTime();
  }, 15000);
});

</script>

</body>
</html>
