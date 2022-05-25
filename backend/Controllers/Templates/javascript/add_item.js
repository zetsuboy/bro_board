$(document).ready(function() {

    $(".item_form").submit(function(event){
        event.preventDefault();

        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");
        var serData = $form.serialize();
        $inputs.prop("disabled", true);

        var request = $.ajax({
            url: "/pages/backend/add_item_to_database.php",
            type: "post",
            data: serData
        });

        request.done(function(response, textStatus, jqXHR){

        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            alert("Проблемы с соединением!");
        });

        request.always(function(){
            $inputs.prop("disabled", false);
        });
    });

});