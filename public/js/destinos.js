const $ = (selector) => document.querySelector(selector);
let botonesVisitado;
window.onload = () => {
    Array.from(document.getElementsByClassName("visitado")).forEach(
        (botonesVisitado) => {
            botonesVisitado.addEventListener("click", boton_visitado);
        }
    );

    let form = $("#form_filtros");
    $("#filtros").addEventListener("change", () => {
        form.submit();
    });
};

function boton_visitado(e) {
    e.preventDefault();
    let padre = e.target.parentElement;
    let nombreLocalidad = padre.querySelector(".nombre-localidad").innerText;
    let form = padre.parentElement;

    Swal.fire({
        title: "Confirmación",
        text: "Hemos visitado " + nombreLocalidad + "?",
        showCancelButton: true,
        confirmButtonText: "Si",
        cancelButtonText: "Cancelar",
        background: "#212529",
        color: "#d6e3d3",
        confirmButtonColor: "#a4c4a8",
        cancelButtonColor: "#4c5b5c",
    }).then((valor) => {
        if (valor.isConfirmed) form.submit();
    });
}
