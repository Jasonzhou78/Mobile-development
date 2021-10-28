$(function() {
    $(".hmenu").click(function() {
        $("#header").slideToggle();
    });

    $("#col6").click(function() {
        $(this).fadeOut();
    });

    $("#container").delegate("#col4","click",function() {
        $(this).css("background-color","pink");
    });

    $("#container").delegate("#col5","click",function() {
        $(this).fadeToggle();
    });

    $("#container").delegate("#col3","click",function() {
        $(this).fadeTo(1000,0.5);
    });

    $("#container").delegate("p","click",function() {
        $(this).css("color","red");
    });


});