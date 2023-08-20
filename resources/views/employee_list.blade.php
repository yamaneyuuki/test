<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/employee_list.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei2.png') }}">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <a href="{{ url('Administrator_main') }}" class="btn btn-primary">戻る</a>
    </div>
    <div class="title">～従業員一覧～</div>
    <div class="B">
        <a href="{{ url('/employee/new') }}" class="bt2 btn-primary">新規追加</a>
    </div>
    <div class="back">
        <table>
            <thead>
                <tr>
                    <th>氏名</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->login_id }}</td>
                    <td><a href="{{ route('employee.edit', $employee) }}" class="edit-btn">編集</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        /* デフォルトのスタイル */
        .edit-btn {
            color: red;
        }
        /* クリック時のスタイル */
        .edit-btn.clicked {
            color: gray;
        }
    </style>

    <script>
        // 編集ボタンがクリックされたらクリック時のスタイルを適用
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                button.classList.add('clicked');
            });
        });
    </script>
</body>
</html>
