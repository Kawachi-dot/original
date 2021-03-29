<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイプラン</title>
</head>
<body>
    <h1>目標金額</h1>
    <p id='sum'>合計金額:{{$plans->utility+$plans->food+$plans->housing+$plans->daily_necessity+$plans->transport+$plans->medical+$plans->other}}
    </p>
    <p>光熱費：{{$plans->utility}}円</p>
    <p>食費：{{$plans->food}}円</p>
    <p>住宅費：{{$plans->housing}}円</p>
    <p>日用品費：{{$plans->daily_necessity}}円</p>
    <p>交通費：{{$plans->transport}}円</p>
    <p>医療費：{{$plans->medical}}円</p>
    <p>その他：{{$plans->other}}円</p>
    <a href='/plan/edit/{{$plans->plan_id}}'><input type='button' value='変更する'></a>
</body>
</html>