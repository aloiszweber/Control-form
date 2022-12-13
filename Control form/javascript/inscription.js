let civility = document.getElementById("civility");
let firstname = document.getElementById("firstname");
let lastname = document.getElementById("lastname");
let email = document.getElementById("email");
let confirmEmail = document.getElementById("confirm_email");
let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirm_password");

let msgCivility = document.getElementById("msg_civility");
let msgFirstname = document.getElementById("msg_firstname");
let msgLastname = document.getElementById("msg_lastname");
let msgBirthday = document.getElementById("msg_birthday");
let msgEmail = document.getElementById("msg_email");
let msgConfirmEmail = document.getElementById("msg_confirm_email");
let msgPassword = document.getElementById("msg_password");
let msgConfirmPassword = document.getElementById("msg_confirm_password");

let completeField = "Veuillez compléter ce champ";

function registration() {
  document.getElementById("submit_registration").addEventListener(
    "click",
    (event) => {
      if (
        civility.selectedIndex === 0 ||
        firstname.value === "" ||
        lastname.value === "" ||
        email.value === "" ||
        confirmEmail.value === "" ||
        password.value === "" ||
        confirmPassword.value === ""
      ) {
        event.preventDefault();

        if (civility.selectedIndex === 0) {
          msgCivility.innerHTML = "Veuillez choisir un état civil";
        }
        if (firstname.value === "") {
          msgFirstname.innerHTML = completeField;
        }
        if (lastname.value === "") {
          msgLastname.innerHTML = completeField;
        }
        if (email.value === "") {
          msgEmail.innerHTML = completeField;
        }
        if (confirmEmail.value === "") {
          msgConfirmEmail.innerHTML = completeField;
        }

        if ((confirmEmail.value !== "") & (email.value !== "")) {
          if (email.value !== confirmEmail) {
            msgConfirmEmail.innerHTML =
              "Les adresses emails ne sont pas identiques";
          }
        }

        if (password.value.length < 4) {
          msgPassword.innerHTML =
            "Le mot de passe doit contenir au moins 4 caractères";
        }

        if (confirmPassword.value === "") {
          msgConfirmPassword.innerHTML = completeField;
        }

        if ((password.value !== "") & (confirmPassword !== "")) {
          if (password.value !== confirmPassword) {
            msgConfirmPassword.innerHTML =
              "Les mots de passe ne sont pas identiques";
          }
        }
      }
    },
    false
  );
}

registration();
