<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/user_main.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei.png') }}">
  <title>SecureTime</title>
</head>
<body>
  <div class="hed">
    <a href="{{ url('Emergency') }}" class="btn1 btn-primary">緊急連絡先</a>
    <a href="{{ route('employee.login.form') }}" class="btn2 btn-primary">ログアウト</a>
  </div>

  <div class="ymd"><p>{{ now()->format('Y/m/d/(D)') }}</p></div>
  <div class="tim"><p>{{ now()->format('H:i') }}</p></div>

  <div class="name">
      <p>{{ $user->name }}</p>
  </div>

  <div class="container">
        <!-- punch_in ボタン -->
        <form action="{{ route('user.punch-in') }}" method="POST">
            @csrf
            <button type="submit" onclick="changeBoxColor('box1')">開始</button>
        </form>

        <!-- punch_out ボタン -->
        <form action="{{ route('user.punch-out') }}" method="POST">
            @csrf
            <button type="submit" onclick="changeBoxColor('box2')">休憩</button>
        </form>
  </div>

  <div class="bo">
    <div class="box box1">開始確認済</div>
    <div class="box box2">休憩確認済</div>
  </div>

  <div class="gyo">
    <a href="{{ url('Contact') }}" class="btn3 btn-primary">業務連絡</a>
  </div>

  <script>
    function changeBoxColor(boxClass) {
      const boxes = document.querySelectorAll('.box');
      boxes.forEach(box => {
        box.classList.remove('green');
      });
      const selectedBox = document.querySelector(`.${boxClass}`);
      selectedBox.classList.add('green');
    }
  </script>
</body>
</html>
