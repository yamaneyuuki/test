<!-- resources/views/contact_list.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/contact_list.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei.png') }}">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <a href="{{ url('Administrator_main') }}" class="btn btn-primary">戻る</a>
    </div>
    <div class="title">～業務連絡一覧～</div>
    <div class="area">
        <div class="sin">
            <a href="{{ url('/Additional_contact') }}" class="bt2 btn-primary">新規追加</a>
        </div>
        <div class="back">
            <table>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->date }}</td>
                        <td style="max-width: 500px;">{{ $contact->content }}</td>
                        <td><a href="{{ route('contact.edit', $contact) }}" class="edit-btn">編集</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
