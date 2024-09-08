<?php session_start(); require_once "template/default.php"; ?>

<div id="header">
    <ul id="header-items">
      <li class="header-item"><a href="/">Home</a></li>
        <li class="header-item" id="portfolio"><a href="#">Portfolio</a>
            <ul id="dropdown">
                <li class="header-item"><a href="portretten.php">Portretten</a></li>
                <li class="header-item"><a href="natuur.php">Natuur</a></li>
                <li class="header-item"><a href="steden.php">Steden</a></li>
                <li class="header-item"><a href="urbex.php">Urbex</a></li>
            </ul>
        </li>
        <li class="header-item"><a href="#">Contact</a></li>
    </ul>
  </div>
<div class="container3">
    <div class="container">
        <div id="contactform">
            <form action="contact" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Naam</label>

                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" name="inputName"
                               value="<?php echo (isset($_POST['inputName']) and !is_null($_POST['inputName'])) ? htmlentities($_POST['inputName']) : ""; ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>

                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                               value="<?php echo (isset($_POST['inputEmail']) and !is_null($_POST['inputEmail'])) ? htmlentities($_POST['inputEmail']) : ""; ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputMessage" class="col-lg-2 control-label">Bericht</label>

                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="inputMessage"
                                  name="inputMessage"><?php echo (isset($_POST['inputMessage']) and !is_null($_POST['inputMessage'])) ? htmlentities($_POST['inputMessage']) : ""; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-default">Verstuur</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
// Ze zeggen dat je de gebruiker nooit mag vertrouwen
// daarom gaan we direct wat meer controleren
 
// Een beetje configuratie
$conf = array(
    'mail' => 'irisligtenberg@outlook.com'
);
 
// Deze functie doet een snelle check op lege waarden.
// Zoals de naam beschrijft is een waarde vereist.
function validate_required($value)
{
    if (is_null($value)) {
        return false;
    } elseif (is_string($value) and trim($value) === '') {
        return false;
    }
    return true;
}

if ('POST' === $_SERVER['REQUEST_METHOD'] and isset($_POST['inputName'], $_POST['inputEmail'], $_POST['inputMessage'])) {
    // Even zorgen dat de overbodige spaties weggehaald worden.
    $name = trim($_POST['inputName']);
    $email = trim($_POST['inputEmail']);
    $message = trim($_POST['inputMessage']);
 
    // Aanmaken van een array voor de foutmeldingen
    $errors = array();
 
    if (!validate_required($name) or strlen($name) < 2) {
        $errors[] = "Vul uw naam in";
    }
    if (!validate_required($email) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Vul uw email adres in";
    }
 
    // Als het aantal errors 0 is dan kunnen we een mailtje versturen
    if (0 == count($errors)) {
        // Dit is voor een mooi mailtje te bekomen.
        $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
        $headers .= 'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
 
        $isSent = mail($conf['mail'], 'Berichtje van je site', $message, $headers);
 
        if ($isSent):
            ?>
            <div class="alert alert-success popup">
                Je berichtje is verzonden!
            </div>
        <?php else:
            ?>
            <div class="alert alert-danger popup">
                Er ging iets mis, probeer het later nog eens.
            </div>
        <?php
        endif;
    } else {
        ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php
    }
}
?>


</body>
</html>