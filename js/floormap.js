(function ($) {
    var boxes = floormap_vars.takenBooths;
    console.log(boxes);
    $("svg").each(function () {
        for (var i = 0; i < boxes.length; i++) {
            var id = boxes[i];
            console.log(id);
            $(this).find('#r' + id + ' use').css({
                fill: '#BB4629'
            });
            $(this).find('#r' + id + ' text').css({
                fill: '#ffffff'
            });
        }
    })
})(jQuery);
