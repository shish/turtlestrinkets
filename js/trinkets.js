$(document).load(function() {
    $(".thumbnail>IMG").load(function() {
        $(this).parent().css('opacity', 1.0);
    });
});
$(document).ready(function() {
    setTimeout(function() {
        $(".thumbnail").css('opacity', 1.0);
    }, 250);
});
