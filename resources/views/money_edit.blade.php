<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿編集画面</title>
</head>
<body>
    <input type='hidden' value='{{$money->money_id}}'>
    <p>日付：<input type='text' name='month' value='{{$money->month}}'>/<input type='text' name='day' value='{{$money->day}}'></p>
    <p>項目：
    <input type='radio'>光熱費
    <input type='radio'>食費
    <input type='radio'>住宅費
    <input type='radio'>日用品費
    <input type='radio'>交通費
    <input type='radio'>医療費
    <input type='radio'>その他
    </p>
    <p>金額：<input type='text' value='{{$money->money}}'></p>
    <p>コメント欄：<textarea rows='4'>{{$money->comment}}</textarea></p>
    <a href=''><input type='button' value='戻る'></a>
    <input type='submit' value='更新する'>
</body>
</html>