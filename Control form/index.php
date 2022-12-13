<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire d'inscription en Javascript</title>
  <link href="./style.css" rel="stylesheet" />
</head>

<body>
  <div class="parent_container">
    <div class="page_container">
      <div class="title_page">
        <h1>Formulaire d'inscription</h1>
      </div>

      <form name="registration" id="registration" method="post" action="index.php">
        <div>
          <label for="civility">Civilité</label>
          <select id="civility" class="input_form" name="civility">
            <option value="0">Civilité</option>
            <option value="1">Madame</option>
            <option value="2">Monsieur</option>
          </select>
          <p class="messages" id="msg_civility"></p>

          <label for="firstname">Nom</label>
          <input type="text" name="firstname" id="firstname" class="input_form" maxlength="50" placeholder="Jean" value="" />
          <p class="messages" id="msg_firstname"></p>

          <label for="lastname">Prénom</label>
          <input type="text" name="lastname" id="lastname" class="input_form" maxlength="50" placeholder="Dupont" value="" />
          <p class="messages" id="msg_lastname"></p>

          <label for="birthday">Date de naisssance</label>
          <input type="date" name="birthday" id="birthday" class="input_form" value="2022-12-09" />
          <p class="messages" id="msg_birthday"></p>
        </div>

        <div>
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="input_form" maxlength="150" placeholder="jean.dupont@hotmail.com" value="" />
          <p class="messages" id="msg_email"></p>

          <label for="confirm_email">Confirmer l'adresse email</label>
          <input type="email" name="confirm_email" id="confirm_email" class="input_form" maxlength="150" placeholder="jean.dupont@hotmail.com" value="" />
          <p class="messages" id="msg_confirm_email"></p>

          <label for="password">Mot de passe</label>
          <input type="password" name="password" id="password" class="input_form" maxlength="20" placeholder="86fa2g" value="" />
          <p class="messages" id="msg_password"></p>

          <label for="confirm_password">Confirmer le mot de passe</label>
          <input type="password" name="confirm_password" id="confirm_password" class="input_form" maxlength="20" placeholder="86fa2g" value="" />
          <p class="messages" id="msg_confirm_password"></p>
        </div>

        <input type="submit" name="submit_registration" id="submit_registration" class="input_form" value="Envoyer" />
      </form>
    </div>
  </div>

  <script src="javascript/inscription.js"></script>
</body>

</html>

<?php

if (!empty($_POST)) {

  var_dump($_POST);
}

?>