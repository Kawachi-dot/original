<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>家計簿編集画面</title>
    <link rel="stylesheet" href="{{asset('css/money_edit.css')}}">
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
<form action='/money/update/{{$money->money_id}}' method='post'>
{{csrf_field()}}
    <input type="hidden" name="money_id" value="{{ $money->money_id }}" />
    <p>日付：<input type='text' name='month' value='{{$money->month}}'>/<input type='text' name='day' value='{{$money->day}}'></p>
    <p>項目：
        @for($i=1;$i<=7;$i++)
        <input type='radio' name='usage_id' value="{{$i}}" <?php if($money->usage_id==$i) {print 'checked';} ?>>
        @endfor
       <!--<input type='radio' name='usage_id' value=1 <php if($money->usage_id==1) {print 'checked';} ?>>光熱費
       <input type='radio' name='usage_id' value=2 <php if($money->usage_id==2) {print 'checked';} ?>>食費
       <input type='radio' name='usage_id' value=3 <php if($money->usage_id==3) {print 'checked';} ?>>住宅費
       <input type='radio' name='usage_id' value=4 <php if($money->usage_id==4) {print 'checked';} ?>>日用品費
       <input type='radio' name='usage_id' value=5 <php if($money->usage_id==5) {print 'checked';} ?>>交通費
       <input type='radio' name='usage_id' value=6 <php if($money->usage_id==6) {print 'checked';} ?>>医療費
       <input type='radio' name='usage_id' value=7 <php if($money->usage_id==7) {print 'checked';} ?>>その他
-->
    </p>
    <p>金額：<input type='text' value='{{$money->money}}' name='money'></p>
    <p>コメント欄：<textarea rows='4' name='comment'>{{$money->comment}}</textarea></p>
    <a href='/money/list'><input type='button' value='戻る'></a>
    <input type='submit' value='更新する'>
</form>
</body>
</html>