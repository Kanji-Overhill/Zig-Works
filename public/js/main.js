$( document ).ready(function() {
    $(".filters-group button").click(function(){
    	
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.grid-item').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".grid-item").not('.'+value).hide('3000');
            $('.grid-item').filter('.'+value).show('3000');
            
        }
    });
    $(".share-link").click(function(e){
        e.preventDefault();
        $(this).addClass("d-none");
        $(".social-share").removeClass("d-none");
    });
    $(".grid-item").click(function(){
        $(".email-share").removeClass("d-none");
        $(".email-input").addClass("d-none");
        $(".email-success").addClass("d-none");
        $(".social-share").addClass("d-none");
    });

});