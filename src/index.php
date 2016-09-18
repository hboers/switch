<!DOCTYPE html>
<html lang="de">
<head>
<title>Schalter</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Security-Policy" content="default-src 'self' 192.168.178.*;" />
 
<link rel="stylesheet" href="bootstrap.min.css"> 
<link rel="stylesheet" href="bootstrap-theme.min.css">
<link rel="stylesheet" href="switch.css">
 
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

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="switch.js"></script>

</body>
</html>
