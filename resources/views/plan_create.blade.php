<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイプラン新規作成画面</title>
    <link rel="stylesheet" href="{{asset('css/plan_create.css')}}">
</head>
<body>
<h1>家計簿管理アプリ</h1>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
      @csrf
        <x-jet-dropdown-link href="{{ route('logout') }}"
              onclick="event.preventDefault();
              this.closest('form').submit();"
              id='logout'>
               {{ __('ログアウト') }}
        </x-jet-dropdown-link>
</form>

<div id='nav'>
   <ul>
       <li><a href='/money/list'>今月の家計簿</a></li>
       <li><a href='/plan/list'>マイプラン</a></li>
       <li><a href='/graph'>月ごとのグラフ</a></li>
       <li><a href='/account/info'>設定</a></li>
   </ul>    
</div>
<form action='/plan/create/complete' method='post'>
{{csrf_field()}}
    <div class='container'>
        <p>光熱費：<input type='text' name='utility'>円</p>
        <p>食費：<input type='text' name='food'>円</p>
        <p>住宅費：<input type='text' name='housing'>円</p>
        <p>日用品費：<input type='text' name='daily_necessity'>円</p>
        <p>交通費；<input type='text' name='transport'>円</p>
        <p>医療費：<input type='text' name='medical'>円</p>
        <p>その他：<input type='text' name='other'>円</p>
    </div>
    <div class='button'>
        <a href='/plan/list'><input type='button' value='戻る'></a>
        <input type='submit' value='作成'>
    </div>
</form>
</body>
</html>