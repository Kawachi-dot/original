<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿編集画面</title>
</head>
<body>
<form action='/money/update/{{$money_edit->money_id}}' method='post'>
{{csrf_field()}}
    <input type='hidden' value='{{$money->money_id}}'>
    <p>日付：<input type='text' name='month' value='{{$money->month}}'>/<input type='text' name='day' value='{{$money->day}}'></p>
    <p>項目：
       <input type='radio'<?php if($money->usage_id==1) {print checked;} ?>>光熱費
       <input type='radio'<?php if($money->usage_id==2) {print checked;} ?>>食費
       <input type='radio'<?php if($money->usage_id==3) {print checked;} ?>>住宅費
       <input type='radio'<?php if($money->usage_id==4) {print checked;} ?>>日用品費
       <input type='radio'<?php if($money->usage_id==5) {print checked;} ?>>交通費
       <input type='radio'<?php if($money->usage_id==6) {print checked;} ?>>医療費
       <input type='radio'<?php if($money->usage_id==7) {print checked;} ?>>その他
    </p>
    <p>金額：<input type='text' value='{{$money->money}}'></p>
    <p>コメント欄：<textarea rows='4'>{{$money->comment}}</textarea></p>
    <a href='/money/list'><input type='button' value='戻る'></a>
    <input type='submit' value='更新する'>
</form>
</body>
</html>