
$(document).ready(function(){
    'use strict'


    $('#resetPasswordForm').on('submit',function(e){
        e.preventDefault();
        var form = $(this);
        var actionurl = e.currentTarget.action;
        var datalist = $(this).serialize();

        $.post(actionurl, datalist, function(response) {
            if(response.status == '100'){
                Swal.fire(
                  'Alert!',
                  response.message,
                  'warning'
                );
            }else if(response.status == '200'){
                Swal.fire(
                  'Success!',
                  response.message,
                  'success'
                );
                form.trigger("reset");
            }
        }, 'json');
        
    });

// Restaurant Profile Update
    $('#image-form').on('submit',function(e){
        e.preventDefault();
        Alert('abc');
        var form = $(this);
        var actionurl = e.currentTarget.action;
        var datalsit =$(this).serialize();
    
        $.post(actionurl, datalsit, function(response){
          if(response.status == '200'){
                Swal.fire(
                  'Success!',
                  response.message,
                  'success'
                );
         console.log(response)
            
        }, 'json');


    });


});