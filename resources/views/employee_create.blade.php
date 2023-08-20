<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/employee_create.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei2.png') }}">
  <title>SecureTime</title>
</head>
<body>
  <div class="Sa">
      <a href="{{ url('/employee/list') }}" class="btn btn-primary">戻る</a>
  </div>
  <div class="title">～従業員追加～</div>
  <div class="sb">
      <div class="simei">氏名</div>
      <div class="number">ID</div>
  </div>
  <form id="employee-form" action="{{ route('employee.store') }}" method="post">
    @csrf
    <div class="area">
        <div class="area1">
            <input type="text" name="name" id="name" required>
        </div>
        <div class="area2">
            <input type="text" name="login_id" id="login_id" required>
        </div>
    </div>
    <button type="submit" onclick="return showConfirmDialog()">登録</button>
  </form>

  <!-- 確認ダイアログを表示する JavaScript のコード -->
  <script>
    function showConfirmDialog() {
      if (confirm("本当に登録しますか？")) {
        // 「はい」をクリックした場合の処理（フォームを送信してデータを登録）
        return true;
      } else {
        // 「いいえ」をクリックした場合の処理（フォームの送信をキャンセル）
        return false;
      }
    }
  </script>
</body>
</html>
