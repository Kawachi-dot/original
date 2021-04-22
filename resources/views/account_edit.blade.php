<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント編集画面</title>
</head>
<body>
<form action='/accouht/update/{{$account_edit->account_id}}' method='post'>
{{csrf_field()}}
    <p>ID:<input type='text' name='code' value='{{$account_edit->code}}'></p>
    <p>ニックネーム:<input type='text' name='name' value='{{$account_edit->name}}'></p>
    <p>パスワード:<input type='text' name='password' value='{{$account_edit->password}}'></p>
    <input type='submit' value='変更する'> 
</form>
</body>
</html>