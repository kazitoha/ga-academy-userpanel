(function(){

    var timerId = null;
    function startSetInterval() {
      timerId = setInterval(function(){
        $( ".scrollitem:first" ).slideUp();
        setTimeout(function() {
          $( ".scrollitem:first" ).fadeIn().appendTo( ".scrollgroup" )
        }, 600);
      }, 7000);
    }
    startSetInterval();
  
    $('.scrollitem').mouseover(function(){
      clearInterval(timerId);
    }).mouseout(function(){
      startSetInterval();
    });
    
  })();
  