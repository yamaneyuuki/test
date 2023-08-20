<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('img/haikei2.png') }}">
    <title>SecureTime</title>
</head>
<body>
    <div class="sa">
        <div class="title">～業務連絡～</div>
        <a href="{{ url('/user/main') }}" class="btn btn-primary">戻る</a>
    </div>
    <div class="area">
        <div class="back">
            <table>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td class="date-column">{{ $contact->date->format('Y/m/d') }}</td>
                        <td class="content-column">{{ $contact->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
