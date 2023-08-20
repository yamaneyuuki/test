<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/administrator_login.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei.png') }}">
  <title>SecureTime</title>
</head>
<body>
<div class="Sa">
  <div class="SecureTime">SecureTime</div>
  <a href="{{ url('/employee/login') }}" class="btn btn-primary">戻る</a>
</div>
<div class="page">～管理者ログイン～</div>
<div class="form">
    <!-- resources/views/admin_login.blade.php -->
    <form action="{{ route('admin.login') }}" method="post">
      @csrf
      <input type="text" name="login_id" id="login_id" placeholder="ログインID" required>
      <div class="w1">ログインIDをお忘れの方は担当者に連絡して下さい</div>
      <input type="password" name="password" id="password" placeholder="パスワード" required>
      <div class="w2">パスワードをお忘れの方は<a href="{{ url('/admin/reset-password') }}">こちら</a></div>
      @if(session('error'))
      <p class="error-message">{{ session('error') }}</p>
      @endif
      <button type="submit" class="login-btn">ログイン</button>
    </form>
</div>

<div class="phone">
  <p>担当連絡先</p>
  <p>TEL000-0000-0000</p>
</div>

</body>
</html>
