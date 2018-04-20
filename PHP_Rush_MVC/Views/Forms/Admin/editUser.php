<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <form action="/MVC/PHP_Rush_MVC/Controllers/putUser" method="post">
        Username: <input type="text" name="username" maxlength="10"><br><br>
        Email: <input type="email" name="email"><br><br>
        Group: <input type="text" name="group"><br><br>
        Banished: <input type="checkbox" name="status" value=1 ><br><br>
        Password: <input type="password" name="password" maxlength="20"><br><br>
        Password Confirmation: <input type="password" name="password_confirmation" maxlength="20"><br><br>
      <input type="submit" name="changelogs" value="update Profile">
    </form>
    (if you don't want to modify a field, let it empty.)
  </p>
  <p>
    <a href="/MVC/PHP_Rush_MVC/Controllers/menu">Back to Menu</a>
  </p>
  </body>
</html>
