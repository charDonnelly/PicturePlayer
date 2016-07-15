/**
 * Created by charlied on 7/1/16.
 */
$(document).ready(function() {

    $('#notice').click(function () //clicking on thumbnails
    {
        notice("Hello", "hi", 5);
        // set the first image to be on
    });


function response() {
    var textInput = $("#sample-textarea").val();
    console.log("You typed " + textInput);
}


function popup()
{
    function notice() {
        var notice = arguments[0];
        var id = arguments[1];
        var seconds = arguments[2];
        $('#' + id). show();
        setTimeout(function() {
            $('#notice').hide();
        }, seconds * 1000);
        };
    function confirm() {

    }
    function prompt() {

    }
}