$(document).ready(function(){
	  

    $('.fancybox').fancybox({
  helpers: {
    overlay: {
      locked: false
    }
  }
});

    var alturas = $('#novelty').height();
    $('.insumos').css('height',alturas);

    $('#indemn').click(function() {
     var iteration;
     iteration = $(this).data('iteration') || 1;
     switch (iteration) {
       case 1:
         $('.main-nav').addClass('activaos');
         break;
       case 2:
         $('.main-nav').removeClass('activaos');
         break;
     }
     iteration++;
     if (iteration > 2) {
       iteration = 1;
     }
     return $(this).data('iteration', iteration);
   });


	  $(window).scroll(function(){
        // Get container scroll position
        var fromTop = $(this).scrollTop();
        var chara2 = $('#novelty').offset().top;
        var chara = $('#novelty').offset().top - 160;

        if(fromTop >= chara){
               $('#header').addClass('oscuro');
        }else{
            $('#header').removeClass('oscuro');
        }


        

    });

});