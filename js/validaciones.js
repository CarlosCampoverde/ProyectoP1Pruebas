function validarFormulario() {
    // Ejemplo de validación de campos antes de enviar.
    let nombre = document.querySelector("input[name='nombre']").value;
    if (nombre.trim() === "") {
        alert("El nombre no puede estar vacío");
        return false;
    }
}
