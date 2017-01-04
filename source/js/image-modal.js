/**
 * Created by charlescombs on 1/4/17.
 */

//        $('li').each( function(index, element) {
//            var $element = $(element);
//            var $link = $element.find('a');
//                $link.attr("href", "#" + $array[index]);
//                $link.text($array[index]);
//                console.log("array: " + $array[index]);
//                console.log("index: " + index);
//        })

       $('img').replaceWith(
           '<!-- Button trigger modal -->' +
           '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">' +
           'Launch demo modal' +
           '</button>');
       $('.container-fluid').append(
           '<div class="modal fade" id=myModal tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">' +
           '<div class="modal-dialog modal-lg" role="document">' +
           '<div class="modal-content">' +
           '<div class="modal-header">' +
           '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
           '<span aria-hidden="true">' +
           '&times;' +
           '</span>' +
           '</button>' +
           '<h4 class="modal-title" id="gridSystemModalLabel">' +
           'Modal title' +
           '</h4>' +
           '</div>' +
           '<div class="modal-body">' +
           '<div class="row">' +
           '<div class="col-md-4">.col-md-4</div>' +
           '<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>' +
           '</div>' +
           '</div><!-- /.modal-body -->' +
           '<div class="modal-footer">' +
           '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
           '<button type="button" class="btn btn-primary">Save changes</button>' +
           '</div><!-- /.modal-footer -->' +
           '</div><!-- / .modal-content -->' +
           '</div><!-- /.modal-dialog -->' +
           '</div><!-- /.modal -->'
       );

     $('.modal-body').css('background-image', 'url("../img/activity/FindActivity.png")');
     $('.modal-body').css('height', '600px');
     $('.modal-content').css('width', '800px');

//    });