var host = $("meta[name='host']").attr("content"); 

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


    //Products
        $(document).on('click', '.deleteProduct', function(){
            var id = $(this).data('id');
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = host+'/menus/delete/'+id;
                }else{
                    Swal.close();
                }
            });
        });

        $(document).on('click', '.editProduct', function(){
            var id = $(this).data('id');
            $('#editMenuModal').css({display: 'block', paddingRight:'8px'});
            $('#editMenuModal').addClass('show');
            $('#editMenuModal .modal-content').html('<img src="'+host+'/../public/loader.gif">');
            $.get(host+'/menus/edit/'+id, function(data){
                $('#editMenuModal .modal-content').html(data);
            });
        });

        $(document).on('click', '[data-dismiss="modal"]', function(){
            $('#editMenuModal').css({display: 'none'});
            $('#editMenuModal').removeClass('show');
        });



        $(document).on('click', '#addVariant', function(){
            $('#variant_block').append('<div class="form-row">\n\
                    <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <input type="text" class="form-control" name="variant_name[]" required>\n\
                        </select>\n\
                    </div>\n\
                    <div class="form-group col-lg-6 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <input type="text" class="form-control" name="variant_description[]" required>\n\
                        </select>\n\
                    </div>\n\
                    <div class="form-group col-lg-2 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <label for="inputZip"></label>\n\
                        <button type="button" class="btn btn-primary removeVariant">remove</button>\n\
                    </div>\n\
                </div>');
        });

        $(document).on('click', '.removeVariant', function(){
            var ele = $(this).parent().parent();
            ele.remove();
        });


        $(document).on('click', '#addVariant2', function(){
            $('#variant_block2').append('<div class="form-row">\n\
                    <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <input type="text" class="form-control" name="variant_name[]" required>\n\
                        </select>\n\
                    </div>\n\
                    <div class="form-group col-lg-6 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <input type="text" class="form-control" name="variant_description[]" required>\n\
                        </select>\n\
                    </div>\n\
                    <div class="form-group col-lg-2 col-md-12 col-12 no-margin pad-bot-30">\n\
                        <label for="inputZip"></label>\n\
                        <input type="hidden" name="variantId[]" value="0">\n\
                        <button type="button" class="btn btn-primary removeVariant2">remove</button>\n\
                    </div>\n\
                </div>');
        });


});