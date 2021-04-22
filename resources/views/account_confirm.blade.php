<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント作成確認画面</title>
</head>
<body>
<form action='/account/register' method='post'>
{{csrf_field()}}
    <p>ID:{{$}}</p>
    <p>ニックネーム:{{$}}</p>
    <p>パスワード:{{$}}</p>
    <input type='submit' value='新規作成'> 
</form>
</body>
</html>