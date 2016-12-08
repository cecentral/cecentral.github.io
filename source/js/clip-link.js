/**
 * Created by charlescombs on 12/8/16.
 */
$(document).ready(function () {
    $("img").addClass("img-responsive");
    $("img").attr('data-toggle', 'magnify');
    new Clipboard('.btn');

    $.each($("h1, a").has("code"), function(index, value) {

        var alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m"];

        var codeId = alphabet[index];

        $(this).find("code").attr('id', codeId);


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