<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <a href="index.html">Home</a>
    </header>
    <h1>Connexion</h1>
    <form id="login" action="login.php">
      <div>
        <label for="emaile">Email: </label><!-- to remove space
        --><input type="email" id="email">
      </div>
      <div>
        <label for="password">Password: </label><!-- to remove space
        --><input type="password" id="password">
      </div>
      <div>
        <input type="submit" value="Connexion">
      </div>
    </form>
    <div>
      Pas de compte ? Vous pouvez vous <a href="register.php">enregistrer</a>.
    </div>
  </body>
</html>
