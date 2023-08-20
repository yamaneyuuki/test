<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/administrator_main.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei.png') }}">
  <title>SecureTime</title>
</head>
<body>
    <div class="hed">
      <a href="{{ url('/admin/login') }}" class="btn1 btn-primary">ログアウト</a>
    </div>

    <div class="ymd"><p>{{ now()->format('Y/m/d/(D)') }}</p></div>
    <div class="tim"><p>{{ now()->format('H:i') }}</p></div>

    <div class="box">
        <a href="{{ url('/situation') }}" class="btn2 btn-primary">勤務状況確認</a>
        <a href="{{ url('/Contact_list') }}" class="btn3 btn-primary">業務連絡</a>
    </div>

    <div class="box1">
      <a href="{{ url('/employee/list') }}" class="btn4 btn-primary">従業員一覧</a>
    </div>

</body>
</html>