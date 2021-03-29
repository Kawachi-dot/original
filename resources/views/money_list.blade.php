<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿リスト</title>
</head>
<body>
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
    <a href='/money/add'><input type='button' value='追加する'></a>
</body>
</html>