const usrname = document.getElementById("username");
const pass = document.getElementById("password");
const btn = document.getElementById("login");
//instrucciones cuando aparecen llaves//
btn.addEventListener("click", (e) => { 
    e.preventDefault();
    const data={
        username:usrname.value,
        password:pass.value
       }
     console.log(data);
});