<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login_page</title>
  </head>
  <body>
    <p>
      <form action="/MVC/PHP_Rush_MVC/" method="post">
        Email account: <input type="email" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit">
      </form>
    </p>
    <p>
      <form action="/MVC/PHP_Rush_MVC/Controllers/postUser" method="post">
        <input type="submit" name="register" value="register">
      </form>
    </p>
  </body>
</html>
