// Esta función mueve el foco al siguiente campo de entrada cuando se presiona la tecla Enter
function moveToNextInput(event, nextInputId) {
  if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById(nextInputId).focus();
  }
}

// La información de la base de datos va a cada input del formulario
document.getElementById("empresas").addEventListener("change", function () {
  var selectValue = this.value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "buscar.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          var response = JSON.parse(this.responseText);
          if (response.exists) {
              // Update input fields based on the new structure of the response
              document.getElementById("direccionEmpresa").value = response.direccion;
              document.getElementById("contactoEmpresa").value = response.contacto;
          }
      }
  };
  xhr.send("select=" + selectValue);
});
