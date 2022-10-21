function login() {
    var done=0;
    var email = document.getElementsByName('email')[0].value;
    email=email.toLowerCase();

    var password = document.getElementsByName('password')[0].value;
      password = password.toLowerCase();

    if (email == "admin" && password == "admin"){
        window.location="preco.html";
        alert("Acesso concedido");

        done=1;
    }
    if( done==0) {alert("Dados incorretos, tente novamente");}
}
