<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('css/situation.css') }}">
  <link rel="stylesheet" href="{{ asset('img/haikei2.png') }}">
  <title>SecureTime</title>
</head>
<body>
    <div class="Sa">
        <div class="title">～勤務状況～</div>
        <a href="{{ url('Administrator_main') }}" class="btn btn-primary">戻る</a>
    </div>
    <div class="back">

    <table>
        <thead>
            <tr>
                <th>従業員名</th>
                <th>業務開始</th>
                <th>休憩</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                @if ($employee->attendances->isEmpty())
                    <td>無し</td>
                    <td>無し</td>
                @else
                <td>{{ $employee->attendances->first()->punch_in ? \Carbon\Carbon::parse($employee->attendances->first()->punch_in)->format('Y年m月d日 H:i:s') : '無し' }}</td>
                <td>{{ $employee->attendances->last()->punch_out ? \Carbon\Carbon::parse($employee->attendances->last()->punch_out)->format('Y年m月d日 H:i:s') : '無し' }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>
