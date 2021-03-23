<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント情報</title>
</head>
<body>
    <h1>アカウント情報</h1>
    <p>ID:<input type='text' value='{{$account->code}}'></p>
    <p>ニックネーム:<input type='text' value='{{$account->name}}'></p>
    <p>パスワード:<input type='text' value='{{$account->password}}'></p>
    <a href=''><input type='button' value='変更する'></a>
</body>
</html>