/**
 * Created by charlescombs on 12/8/16.
 */
$(document).ready(function () {

    $.each($("h1, h2, h3"), function() {

        $(this).attr("name", $(this).text());


        $(this).wrap(
            '<div class="input-group"></div>'
        );
        $(this).after(
            '<span class="input-group-button"><button class="btn" type="button">' +
//                    '<img class="clippy" src="/img/clippy.svg" width="13" alt="Copy to clipboard">' +
            '<span class="glyphicon glyphicon-paperclip"></span>' +
            '</button></span>'
        );

        $(this).next("span").find("button").attr("data-clipboard-target", "#" + codeId);

        console.log('code' + index + ':' +  $(this).text());
    });

});