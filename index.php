<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>

<body>
  <main>
    <form id="form">
      <h1>Login</h1>
      <input type="text" name="username" required placeholder="e.g you@mail.com" />
      <input type="password" name="password" required placeholder="******" />
      <div id="g_id_onload" data-client_id="7491220147-f2gdhqiehnhpjnbque9qp0ea5oc462gf.apps.googleusercontent.com" data-login_uri="https://tosin-php.herokuapp.com" data-callback="testing" data-auto_prompt="false"></div>
      <div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left"></div>
      <button type="submit">Login</button>
    </form>
  </main>
  <script>
    form.addEventListener('submit', (e) => {
      e.preventDefault()
      console.log('submitted');
    });
    window.testing = (e) => {
      console.log(e);
    };
  </script>
</body>

</html>
<?php
