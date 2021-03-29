<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイプラン新規作成画面</title>
</head>
<body>
<form action='/plan/create/complete' method='post'>
{{csrf_field()}}
    <p>光熱費：<input type='text' name='utility'>円</p>
    <p>食費：<input type='text' name='food'>円</p>
    <p>住宅費：<input type='text' name='housing'>円</p>
    <p>日用品費：<input type='text' name='daily_necessity'>円</p>
    <p>交通費；<input type='text' name='transport'>円</p>
    <p>医療費：<input type='text' name='medical'>円</p>
    <p>その他：<input type='text' name='other'>円</p>
    <a href='/plan/list'><input type='button' value='戻る'></a>
    <input type='submit' value='作成'>
</form>
</body>
</html>