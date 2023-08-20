<!-- resources/views/contact_edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/contact_edit.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei2.png') }}">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <a href="{{ url('/Contact_list') }}" class="btn btn-primary">戻る</a>
    </div>
    <div class="title">～業務連絡編集～</div>
    <div class="area">
        <form action="{{ route('contact.update', $contact) }}" method="post">
            @csrf
            @method('PUT')
            <div class="nen">作成年月日</div>
            <input type="date" name="date" id="date" value="{{ $contact->date }}" required>
            <div class="ren">連絡内容</div>
            <textarea name="content" id="content" rows="5" required>{{ $contact->content }}</textarea>
            <div class="button-group">
                <button type="submit">完了</button>
            </div>
        </form>

        <form action="{{ route('contact.destroy', $contact) }}" method="post" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <div class="button-group2">
                <button type="submit">消去</button>
            </div>
        </form>
    </div>
</body>
</html>
