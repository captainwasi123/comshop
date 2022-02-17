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


        // buyeruser

           $(document).on('click', '.editUser', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to edit this user!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, edit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/users/edit/'+val;
                }else{
                    Swal.close();
                }
            });
            
        });


           $(document).on('click', '.blocktUser', function(){
             var user_id = $(this).data('id');
            var status = 2;
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to Block this user!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Block it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/users/statusBlock/'+user_id+'/'+status;
                }else{
                    Swal.close();
                }
            });
            
        });


              $(document).on('click', '.userDeleted', function(){
             var user_id = $(this).data('id');
            var status = 4;
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to Delete this user!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/users/userDeleted/'+user_id+'/'+status;
                }else{
                    Swal.close();
                }
            });
            
        });


           $(document).on('click', '.restoreUser', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to restore this User!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, restore it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/users/restore/'+val;
                }else{
                    Swal.close();
                }
            });
        });


   

     


    //Settings

        //Categories
            $(document).on('click', '.deleteCategory', function(){
                var val = $(this).data('id');
                Swal.fire({
                  title: 'Are you sure?',
                  text: "Want to delete this category!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = host+'/settings/categories/delete/'+val;
                    }else{
                        Swal.close();
                    }
                });
            });

            $(document).on('click', '.editCategory', function(){
                var val = $(this).data('id');
                $('#edit-catagories').modal('show');
                $('#edit-catagories .row').html('<img src="'+host+'/../public/loader.gif" />');
                $.get(host+'/settings/categories/edit/'+val, function(data){
                    $('#edit-catagories .row').html(data);
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
        
       

        $(document).on("click", ".browseProfilePhotoCat", function () {
            var file = $(this).parents().find(".profilePicCat");
            file.trigger("click");
        });
        $('.profilePicCat').change(function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoCat').attr('src', e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on("click", ".browseProfilePhotoCatE", function () {
            var file = $(this).parents().find(".profilePicCatE");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicCatE', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoCatE').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });



    // driver
           $(document).on("click", ".browseProfilePhotoDImage", function () {
            var file = $(this).parents().find(".profilePicDImage");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicDImage', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoDImage').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });


           $(document).on("click", ".browseProfilePhotoDCF", function () {
            var file = $(this).parents().find(".profilePicDCF");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicDCF', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoDCF').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

            $(document).on("click", ".browseProfilePhotoDCB", function () {
            var file = $(this).parents().find(".profilePicDCB");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicDCB', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoDCB').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

           $(document).on("click", ".browseProfilePhotoDLF", function () {
            var file = $(this).parents().find(".profilePicDLF");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicDLF', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoDLF').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $(document).on("click", ".browseProfilePhotoDLB", function () {
            var file = $(this).parents().find(".profilePicDLB");
            file.trigger("click");
        });
        $(document).on('change', '.profilePicDLB', function (e) {
            var fileName = e.target.files[0].name;

            var reader = new FileReader();
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                $('.previewProfilePhotoDLB').attr('src', e.target.result);
                console.log(e.target.result);
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        // driverstatus


           $(document).on('click', '.driverEdit', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to edit this Driver!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, edit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/drivers/edit/'+val;
                }else{
                    Swal.close();
                }
            });
            
        });

           $(document).on('click', '.driverActive', function(){
             var user_id = $(this).data('id');
            var status = 1;
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to Block this Driver!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Block it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/drivers/statusActive/'+user_id+'/'+status;
                }else{
                    Swal.close();
                }
            });
            
        });

          $(document).on('click', '.driverBlock', function(){
             var user_id = $(this).data('id');
            var status = 2;
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to Block this Driver!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Block it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/drivers/statusBlock/'+user_id+'/'+status;
                }else{
                    Swal.close();
                }
            });
            
        });

         $(document).on('click', '.driverDeleted', function(){
             var user_id = $(this).data('id');
            var status = 3;
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to Delete this Driver!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/drivers/driverDeleted/'+user_id+'/'+status;
                }else{
                    Swal.close();
                }
            });
            
        });


           $(document).on('click', '.driverRestore', function(){
            var val = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "Want to restore this Driver!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, restore it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/drivers/restore/'+val;
                }else{
                    Swal.close();
                }
            });
        });
});