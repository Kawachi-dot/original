<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント情報</title>
</head>
<body>
<h1>家計簿管理アプリ</h1>
<input type='submit' name='logout' value='ログアウト'>
<div id='nav'>
   <ul>
       <li><a href='/money/list'>今月の家計簿</a></li>
       <li><a href='/plan/list'>マイプラン</a></li>
       <li><a href='/graph'>月ごとのグラフ</a></li>
       <li><a href='/account/info'>設定</a></li>
   </ul>    
</div>
    <h1>アカウント情報</h1>
    
    <p>ID:<input type='text' value='{{$account->code}}'></p>
    <p>ニックネーム:<input type='text' value='{{$account->name}}'></p>
    <p>パスワード:<input type='text' value='{{$account->password}}'></p>
    <a href='/account/edit'><input type='button' value='変更する'></a>
</body>
</html>