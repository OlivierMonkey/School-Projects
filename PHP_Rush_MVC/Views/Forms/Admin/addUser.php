<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>register_page</title>
  </head>
  <body>
    <form action="/MVC/PHP_Rush_MVC/Controllers/postUser" method="post">
      Username: <input type="text" name="username" maxlength="10"><br><br>
      Email: <input type="email" name="email"><br><br>
      Group: <input type="text" name="group"><br><br>
      Banished: <input type="checkbox" name="status" value=1 ><br><br>
      Password: <input type="password" name="password" maxlength="20"><br><br>
      Password Confirmation: <input type="password" name="password_confirmation" maxlength="20"><br><br>
    <input type="submit">
    <p>
      <a href="/MVC/PHP_Rush_MVC/Admin/userList">Back to Admin Page</a>
    </p>
  </body>
</html>
