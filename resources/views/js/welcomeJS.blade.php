<script>
    $(document).ready(function(){
        var windowHeight = $(window).height();
        var contenidoHeight = $(".contenido").height();

        $(".contenido").css('top', (windowHeight - contenidoHeight) - 50 +'px');
    });
</script>
