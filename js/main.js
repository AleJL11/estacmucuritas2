/* LOGIN */

const logregBox   = document.querySelector('.logreg-box');
const loginLink   = document.querySelector('.login-link');
const forgetLink  = document.querySelector('.forget-link');

forgetLink?.addEventListener("click", () => {
  logregBox.classList.add("active");
});

loginLink?.addEventListener("click", () => {
  logregBox.classList.remove("active");
});

/* MOSTRAR CONTRASEÑA LOGIN */

const pass = document.getElementById("pass"),
      icon = document.querySelector(".fa-eye");

icon?.addEventListener("click", (e) => {
  if (pass.type === "password" ) {
    pass.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    pass.type = "password";
    icon.classList.add("fa-eye");
    icon.classList.remove("fa-eye-slash");
  }
});

/* FIN */

/* VALIDACIONES DE FORMULARIOS */

/* CAMBIO DE CONTRASEÑA */
const form_forget   = document.getElementById("form_forget");

form_forget?.addEventListener("submit", e => {

  e.preventDefault();
  const pass_change   = document.getElementById("pass_forget"),
        message       = document.getElementById("error-message");
  let regexPassChange = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8}$/,
      warnings        = "",
      entrar          = false;
  
      message.innerHTML = "";

  if (!pass_change.value.match(regexPassChange)) {
    warnings = `La contraseña no es válida, el formato debe ser el siguiente:<br/>
    - Debe tener 8 caracteres (letras y numeros).</br>
    - Debe tener al menos 1 letra mayúscula.</br>
    - Debe tener al menos 1 letra minúsucla.</br>
    - Debe tener al menos 1 número.`;
    entrar = true;
  } else {
    alert("Cambio de clave exitoso");
    form_forget.reset();
  }

  if (entrar) {
    message.innerHTML = warnings;
  }

});

/* FIN */

const form_create = document.getElementById("form_create");

form_create?.addEventListener("submit", e => {

  e.preventDefault();
  const ci          = document.getElementById("CI"),
        nombre      = document.getElementById("name_last"),
        tVehiculo   = document.getElementById("tVehiculo"),
        tPuesto     = document.getElementById("tPuesto"),
        nPuesto     = document.getElementById("nPuesto"),
        email_modal = document.getElementById("email_modal"),
        pass_modal  = document.getElementById("pass_modal"),
        message     = document.getElementById("error-message");
  let warnings  = "",
      entrar    = false;
  let regexCI         = /^(V-|E-)\d{1,8}$/,
      regexName       = /^[a-zA-Z\s]+$/,
      regexTvehiculo  = /^[a-zA-Z]{1,5}$/,
      regexTpuesto    = /^[a-zA-Z]{1,9}$/,
      regexNpuesto    = /^\d{1,2}$/,
      regexEmail      = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]{2,7})+\.(com)$/,
      regexPass       = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8}$/;

  message.innerHTML = "";

  if (!ci.value.match(regexCI)) {
    warnings += `La cédula no es válida, el formato debe ser:</br> V- o E-xx-xxx-xxx</br>`;
    entrar = true;
  } else if (!nombre.value.match(regexName)) {
    warnings += `El nombre no es válido</br>`;
    entrar = true;
  } else if (!tVehiculo.value.match(regexTvehiculo)) {
    warnings += `El tipo de vehiculo no es válido</br>`;
    entrar = true;
  } else if (!tPuesto.value.match(regexTpuesto)) {
    warnings += `El tipo de puesto no es válido</br>`;
    entrar = true;
  } else if (!nPuesto.value.match(regexNpuesto)) {
    warnings += `El número de puesto no es válido</br>`;
    entrar = true;
  } else if (!email_modal.value.match(regexEmail)) {
    warnings += `El correo no es válido</br>`;
    entrar = true;
  } else if (!pass_modal.value.match(regexPass)) {
    warnings += `La contraseña no es válida, el formato debe ser el siguiente:<br/>
    - Debe tener 8 caracteres (letras y numeros).</br>
    - Debe tener al menos 1 letra mayúscula.</br>
    - Debe tener al menos 1 letra minúsucla.</br>
    - Debe tener al menos 1 número.`;
    entrar = true;
  } else {
    alert("Registro Exitoso");
    form_create.reset();
  }

  if (entrar) {
    message.innerHTML = warnings;
  }

});

/* FIN LOGIN */

/* SISTEMA */

/* SIDEBAR */

let btn         = document.querySelector("#btn"),
    sidebar     = document.querySelector(".sidebar"),
    searchBtn   = document.querySelector(".fa-magnifying-glass");

    btn.onclick = () => {
      sidebar.classList.toggle("active");
    }
    
    searchBtn.onclick = () => {
      sidebar.classList.toggle("active");
    }

/* FIN SIDEBAR */

/* FIN SISTEMA */