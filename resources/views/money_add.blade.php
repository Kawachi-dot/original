<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿作成画面</title>
</head>
<body>
<form action='/money/add/complete' method='post'>
{{csrf_field()}}
    <p>日付：<input type='text' name='month'>/<input type='text' name='day'></p>
    <p>項目：
       <input type='radio' name='usage_id' value=1>光熱費
       <input type='radio' name='usage_id' value=2>食費
       <input type='radio' name='usage_id' value=3>住宅費
       <input type='radio' name='usage_id' value=4>日用品費
       <input type='radio' name='usage_id' value=5>交通費
       <input type='radio' name='usage_id' value=6>医療費
       <input type='radio' name='usage_id' value=7>その他
    </p>
    <p>金額：<input type='text' name='money'></p>
    <p>コメント欄：<textarea rows='4' name='comment'></textarea></p>
    <a href='/money/list'><input type='button' value='戻る'></a>
    <input type='submit' value='追加する'>
</form>
</body>
</html>