(function(){
    jQuery(document).ready(function() {
        /* ---------------------------------------------- /*
    * SLIDER
    /* ---------------------------------------------- */
        jQuery('.sliderhome').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:3000,
            items:1,
            navElement: 'div',
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
        }) 
    });
})(jQuery);