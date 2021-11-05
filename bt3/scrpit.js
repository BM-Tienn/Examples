var stt = 0;
var endImg = $("img.slide:last").attr("idx");

$("button").click(function() {
    stt = $(this).attr("idx");
    
    $("img.slide").hide();
    $("img.slide").eq(stt).show();
    $("button").removeClass("active");
    $("button").eq(stt).addClass("active");
});


   