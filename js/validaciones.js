function validarRegistro() {
  let nombre = document.getElementById("nombre").value;
  let correo = document.getElementById("correo").value;
  let pass = document.getElementById("clave").value;
  let error = "";

  if (nombre.trim() === "" || correo.trim() === "" || pass.trim() === "") {
    error += "Todos los campos son obligatorios.\n";
  }

  if (!correo.includes("@")) {
    error += "El correo no es válido.\n";
  }

  if (pass.length < 6) {
    error += "La clave debe tener al menos 6 caracteres.\n";
  }

  if (error !== "") {
    alert(error);
    return false;
  }

  return true;
}
