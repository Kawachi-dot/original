<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイプラン編集画面</title>
</head>
<body>
<form action='/plan/update/{{$plan_edit->money_id}}' method='post'>
{{csrf_field()}}
    <p>光熱費：<input type='text' name='utility' value='{{$plan_edit->utility}}'></p>
    <p>食費：<input type='text' name='food' value='{{$plan_edit->food}}'></p>
    <p>住宅費：<input type='text' name='housing' value='{{$plan_edit->housing}}'></p>
    <p>日用品費：<input type='text' name='daily_necessity' value='{{$plan_edit->daily_necessity}}'></p>
    <p>交通費；<input type='text' name='transport' value='{{$plan_edit->transport}}'></p>
    <p>医療費：<input type='text' name='medical' value='{{$plan_edit->medical}}'></p>
    <p>その他：<input type='text' name='other' value='{{$plan_edit->other}}'></p>
    <a href='/plan/list'><input type='text' value='戻る'></a>
    <input type='submit' value='編集'>
</form>
</body>
</html>