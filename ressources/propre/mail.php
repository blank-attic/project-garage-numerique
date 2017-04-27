
    <?php
    //validate functions
    function validate_email($p, $key) {
      if (isset($p[$key])) {
        $p[$key] = filter_var($p[$key], FILTER_SANITIZE_EMAIL);
      }
      if (filter_var($p[$key], FILTER_VALIDATE_EMAIL)) {
        return true;
      }
      return false;
    }

    function validate_input($p, $key, $min, $max) {
      if (isset($p[$key]) && strlen ($p[$key]) >= $min && strlen ($p[$key]) <= $max) {
        return true;
      }
      return false;
    }
     ?>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //validate inputs
        $email_ok = validate_email($_POST, "expediteur");
        $subject_ok = validate_input($_POST, "objet", 5, 50);
        $message_ok = validate_input($_POST, "message", 20, 140);

        //check if validation is ok
        if ($email_ok && $subject_ok && $message_ok) {
          //send mail
          $okmail = mail("CONTACT@LEGARAGENUMERIQUE.FR",
                          $_POST["expediteur"],
                          $_POST["objet"],
                          wordwrap ($_POST["message"], 70, "\r\n"));

          //if mail errored
          if (!$okmail) {
            $error = "Mail non envoyé";
          }
        } else {
          //if validation failed
          $error = "Mauvais paramètres : ";
          //if email errored
          if (!$email_ok) {
            $error .= "<li> Le mail n'est pas valide.</li>";
          }
          //if subject errored
          if (!$subject_ok) {
            $error .= "<li> L'objet doit être compris entre 5 et 50 caractères.</li>";
          }

          //if message errored
          if (!$message_ok) {
            $error .= "<li>Le message doit être compris entre 20 et 140 caractères</li>";
          }
        }
      }
     ?>
    <div class="error">
     <?php
     if (isset($error)) {
       echo "<ul>$error</ul>";
     }
     ?>
    </div>
    <form action="mail.php" method="post">
      <div>
        <label class="titre" for="expediteur">Votre e-mail</label>
        <input id="expediteur"
        class="<?php
        if (isset($email_ok) && !$email_ok) {
          echo 'error';
        }
        ?>"
        type="text" name="expediteur" value="<?php if (isset($_POST['expediteur'])) {
          echo $_POST['expediteur'];
        }?>" />
      </div>
      <div>
        <label class="titre" for="nom">Nom</label>
        <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) {
          echo $_POST['nom'];
        }?>"/>
      </div>
      <div>
        <label class="titre" for="objet">Objet</label>
        <input type="text" name="objet" value="<?php if (isset($_POST['objet'])) {
          echo $_POST['objet'];
        }?>"/>
      </div>
      <div>
        <label class="titre" for="message">Message</label>
        <textarea name="message" rows="8" cols="40" value="<?php if (isset($_POST['message'])) {
          echo $_POST['message'];
        }?>"></textarea>
      </div>
      <input class="envoyer" type="submit" value="Envoyer" />
    </form>
