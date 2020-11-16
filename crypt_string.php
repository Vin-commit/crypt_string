?php include("./exit.php"); ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex" />
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <link rel="icon" href="/Images/favicon.ico" />
  </head>
  <body>
  <b>Calculez le hash d'une chaîne</b>
  <form name="form">
  Entrez la chaîne à crypter :
    <input name="input_string" value="<la chaîne à crypter>" type="text" size="15" maxlength="25">
    <button>Envoi</button>
  </form>
  <?php
  if(isset($input_string) && $input_string != "<la chaîne à crypter>") {
    $crypt_string=md5($input_string);
    echo "Le md5 de <b>$input_string</b> est : $crypt_string\n";
  }
  php?>
     <script language="JavaScript">
       document.form.input_string.select();
     </script>
     <p class=src><a href="/FichiersTexte/crypt_string.txt">source php de la page</a></p>
  </body>
</html>

