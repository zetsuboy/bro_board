$(document).ready(function() {

    $("#sort_desc").click(function (event){
        event.preventDefault();
        var request = $.ajax({
            url: "/pages/backend/get_items_sell_sorted.php",
            type: "post",
            data: {type: "DESC"}
        });

        request.done(function(response, textStatus, jqXHR){
            $(".feed_content").empty().html(response);
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            alert("Проблемы с соединением!");
        });
    })

    $("#sort_asc").click(function (event){
        event.preventDefault();
        var request = $.ajax({
            url: "/pages/backend/get_items_sell_sorted.php",
            type: "post",
            data: {type: "ASC"}
        });

        request.done(function(response, textStatus, jqXHR){
            $(".feed_content").empty().html(response);
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            alert("Проблемы с соединением!");
        });
    })

});