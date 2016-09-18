

$(document).ready(function() {
   
    // are we running in native app or in a browser?
    window.isphone = false;
    if(document.URL.indexOf("http://") === -1 
        && document.URL.indexOf("https://") === -1) {
        window.isphone = true;
    }
    onDeviceReady();
/*
    if( window.isphone ) {
        document.addEventListener("deviceready", onDeviceReady, false);
    } else {
        onDeviceReady();
    }
*/
});

function getButtonUrl(button,service) {
  var action = button.attr('data-action'); 
  var group = button.attr('data-group'); 
  var schalt = button.attr('data-switch'); 
  return 'http://192.168.178.20/switch/service/'+service+'.php?group='+group+'&switch='+schalt+'&action='+action;
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

function onDeviceReady() {
  alert('hello switch');
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
};


