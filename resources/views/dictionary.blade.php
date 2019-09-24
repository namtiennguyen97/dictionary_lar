<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form method="post" action="/dictionary" style="width: 200px;height: 100px;border: 1px">
    @csrf
    <p>Dictionary</p>
    <input type="text" name="text">
    <input type="submit" value="Translate">
</form>
</body>
</html>
