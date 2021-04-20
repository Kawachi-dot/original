<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>家計簿リスト</title>
    <link rel="stylesheet" href="{{asset('css/money_list.css')}}">
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
       <li><a href="/plan/list">マイプラン</a></li>
       <li><a href="/graph">月ごとのグラフ</a></li>
       <li><a href="/account/info">設定</a></li>
   </ul>    
</div>

<div id="money">
  <h1>今月の合計金額：
  @php
  $sum=0;
  foreach($money as $minimoney){
    $sum+=$minimoney->money;
  }
    print($sum);
  @endphp
  円
  </h1>

</div>
<div id='table'>
    <table border='1'>
       <tr>
         <th>月</th>
         <th>日</th>
         <th>項目</th>
         <th>金額</th>
         <th>コメント欄</th>
         <th></th>
         <th></th>
       </tr>
       @foreach($money as $minimoney)
       <tr>
          <th>{{$minimoney->month}}</th>
          <th>{{$minimoney->day}}</th>
          <th>
          @php
          if($minimoney->usage_id==1){
            print('光熱費');
          }elseif($minimoney->usage_id==2){
            print('食費');
          }elseif($minimoney->usage_id==3){  
            print('住宅費');
          }elseif($minimoney->usage_id==4){  
            print('日用品費');
          }elseif($minimoney->usage_id==5){  
            print('交通費');
          }elseif($minimoney->usage_id==6){  
            print('医療費');
          }elseif($minimoney->usage_id==7){  
            print('その他');
          }
          @endphp
          </th>
          <th>{{$minimoney->money}}</th>
          <th>{{$minimoney->comment}}</th>
          <th><a href="/money/edit/{{$minimoney->money_id}}"><input type='button' value='編集'></a></th>
          <th><form action="/money/delete/{{$minimoney->money_id}}" method='post'>{{csrf_field()}}<input type='submit' value='削除' onclick="return check();"></form></th>
       <tr>
       @endforeach
  
       <script type='text/javascript'>
    　　function check(){
    　　　if(window.confirm('本当に削除しますか？')){
       　　　return true;
    　　　}else{
       　　　return false;
    　　　}
  　　　}
  　　　</script>      
    </table>
</div>    
    <a class='bt add' href='/money/add'>追加する</a>
</body>
</html>