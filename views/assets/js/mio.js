$(document).ready(function () {
    $(".miniaturas img").hover(function () {
        var nuevaImagen = $(this).attr("data-imagen");
        console.log(nuevaImagen);
        $("#imagen-principal").attr("src", nuevaImagen);
    });

    const cambiarAction = (f) => {
        document.getElementById("form").action = f.Type.value;
    }
});
