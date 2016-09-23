$(document).ready(function() {
    $(".cOverlay").click(function(e){
     if (e.target !== this)
    		return;
        $(".cOverlay").slideUp();
    });
        $(".contact-us").click(function(){
        $(".cOverlay").slideDown();
    });   

});