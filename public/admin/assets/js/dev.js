var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){
    'use strict'


    $(document).on('change', '.restaurantStatus', function(){
        var val = $(this).data('val');
        var status = 0;
        if($(this).prop('checked')){
            status = 1;
        }else{
            status = 2;
        }

        $.getJSON(host+'/restaurants/status/'+val+'/'+status, function(data){
            if(data.status == '100'){
                Swal.fire(
                  'Success!',
                  data.message,
                  'success'
                );
            }
        });
    });

});