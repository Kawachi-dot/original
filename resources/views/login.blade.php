<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type='text/css'>    
</head>
<body>
<h1>家計簿管理アプリ</h1>
<div class='container'>
    <h1>マイページログイン</h1>
    <form class='form' action='/money/list' method='post'>
       <p>ID:<input type='text'></p>
       <p>パスワード:<input type='password'></p>
       <input id='login-button' type='submit' value='ログイン'>
    </form>
    <a href='/account/create'>新規作成</a>
</div>    

</body>
</html>