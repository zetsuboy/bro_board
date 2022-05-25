$(document).ready(function() {

    $("#sort_desc").click(function (event){
        event.preventDefault();
        var request = $.ajax({
            url: "show/buyAction",
            type: "post",
            data: {sort: 1, type: "DESC"}
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
            url: "show/buyAction",
            type: "post",
            data: {sort: 1, type: "DESC"}
        });

        request.done(function(response, textStatus, jqXHR){
            $(".feed_content").empty().html(response);
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            alert("Проблемы с соединением!");
        });
    })

});