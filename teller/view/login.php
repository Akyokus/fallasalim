<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?= teller_url('login') ?>"  method="post">
<input type="text" name="email" placeholder="email">
<input type="password" name="password" placeholder="password">
    <input type="hidden" name="submit" value="1">
    <button type="submit" name="gonder">Gönder</button>
</form>
<?php echo (isset($success)) ? $success : false ?>
</body>
</html>
