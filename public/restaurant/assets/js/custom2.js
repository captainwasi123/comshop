var host = $("meta[name='host']").attr("content");
$(document).ready(function(){
    'use strict'


    setTimeout(function() {
       $('#websiteOverlay').addClass('loaded');
    }, 500);

    $(document).on('change', '#service_status',function() {
        var status = 0;
        if($(this).prop('checked')) {
            status = 1;
        } else {
            status = 0;
        }

        $.getJSON(host+'/setting/status/'+status, function(response){
            if(response.status == '100'){
                Swal.fire(
                    "Success!",
                    "Status Updated.",
                    "success"
                );
            }else{
                Swal.fire(
                    "Warning!",
                    "Something went wrong.",
                    "warning"
                );
            }
        });

    });
});


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



$(document).on("click", ".browseProfilePhoto", function () {
    var file = $(this).parents().find(".profilePic");
    file.trigger("click");
});
$('.profilePic').change(function (e) {
    var fileName = e.target.files[0].name;

    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("previewProfilePhoto").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});