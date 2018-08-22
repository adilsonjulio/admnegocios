function updateNavbar(){
    var scrollTopNum = $(window).scrollTop();
    if(scrollTopNum > 10){
        $("#menu").addClass("bg-roxo");
    }else{
        $("#menu").removeClass("bg-roxo");
    }
}

$(document).ready(function(){
    updateNavbar();

    $(window).scroll(function(){
        updateNavbar();
    })

    $(".page-scroll").click(function(e){
        e.preventDefault();
        var hash = this.hash;

        $("html, body").animate({
            scrollTop: $(hash).offset().top-73
        }, 500);        


    })
    
    $(".videoModal").click(function(e){
        e.preventDefault();

        var id_vimeo = $(this).data("video");

        var link ="https://player.vimeo.com/video/"+id_vimeo+"?autoplay=1&title=0&byline=0&portrait=0";

        var titulo = $(this).data("titulo");

        $("#videoModal .modal-title").html(titulo);
        $(".video-modal").attr("src", link);

        $("#videoModal").modal('show');
    })
    
    $("#videoModal").on("hidden.bs.modal", function(e){
        $(".video-modal").attr("src", "https://player.vimeo.com/video/180935055");
    })
})