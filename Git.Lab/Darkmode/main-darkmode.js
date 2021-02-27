jQuery(document).ready(function ($) {
    $(".toggledark").click(function () {
        $(".toggledark").toggleClass("active");
        $("body").toggleClass("dark--mode--jekeru");
        $.cookie("toggle", $(".toggledark").hasClass('active'));
    });

    if ($.cookie("toggle") == "true") {
        $(".toggledark").addClass("active");
        $("body").addClass("dark--mode--jekeru");
    }
});
