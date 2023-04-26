(function($){
     $(document).ready(function(){
         $(document).on('click', '.panel-heading',function(){
             $(this).closest('.panel').find('.panel-collapse').toggleClass('collapse');
             $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
        });
    });
})(jQuery);
