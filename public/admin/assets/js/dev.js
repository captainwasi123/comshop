var host = $("meta[name='host']").attr("content");  
$(document).ready(function(){
    'use strict'


    //Restaurant
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

        $(document).on('click', '.deleteRestaurant', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to delete this restaurant!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/restaurants/status/'+val+'/4';
                }else{
                    Swal.close();
                }
            });
        });

        $(document).on('click', '.restoreRestaurant', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to restore this restaurant!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, restore it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/restaurants/restore/'+val;
                }else{
                    Swal.close();
                }
            });
        });


        $(document).on('click', '.editRestaurant', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to edit this restaurant!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, edit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/restaurants/edit/'+val;
                }else{
                    Swal.close();
                }
            });
        });


        $(document).on("click", ".browseProfilePhoto", function () {
            var file = $(this).parents().find(".profilePicRes");
            file.trigger("click");
        });
        $('.profilePicRes').change(function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoRes').attr('src', e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });


});