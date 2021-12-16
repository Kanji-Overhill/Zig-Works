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

});