<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント作成画面</title>
</head>
<body>
<form action='' method='post'>
{{csrf_field()}}
    <p>ID:<input type='text' name='code'></p>
    <p>ニックネーム:<input type='text' name='name'></p>
    <p>パスワード:<input type='text' name='password'></p>
    <input type='submit' value='新規作成'> 
</form>
</body>
</html>