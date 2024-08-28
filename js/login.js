const errorMessages = document.getElementById("errorMessages");
const usrname = document.getElementById("username");
const pass = document.getElementById("password");
const btn = document.getElementById("login");


function displayError(message) {
  errorMessages.innerHTML = message;
}
btn.addEventListener("click", (e) => {
  //e.preventDefault(); *// //insrtucciones de la funcion */
  const data = {
    username: usrname.value,
    password: pass.value
  }
  console.log(data);
  const passValue = document.getElementById("password").value;
  if (passValue.length < 6) {
    e.preventDefault();
    //alert('El Password debe tener como minimo 6 caracteres de longitud.');
    displayError("El Password debe tener como minimo 6 caracteres de longitud.");
  }
});