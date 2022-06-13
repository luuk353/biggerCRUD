const loginUsername = document.querySelector("input[name=username]");
const loginPassword = document.querySelector("input[name=password]");
const loginButton = document.querySelector("input[type=submit]");
const loginForm = document.querySelector("form")

loginButton.addEventListener("click", (e) => {
    
    let msg = "";
    if (loginUsername.value.length == 0) {
        msg += "er is geen username ingevuld\n";
    }

    if (loginPassword.value.length == 0) {
        msg += "er is geen wachtwoord ingevuld\n";
    }
    if (msg == "") {
        loginForm.submit();
    } else {
        alert(msg.trim());
    }
});