<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>01/01/2025</title>
</head>
<body>
@foreach ($usersList as $key => $value)
    <h1> {{ $key }}, {{ $value['name'] }}, {{  $value['age'] }} </h1>
@endforeach

<h2>restrictions</h2>
@foreach ($usersList as $user)
@if ($user['age'] < 18)
@continue
@endif
    <h1> {{ $user['name'] }}, {{  $user['age'] }} </h1>
@endforeach

<footer>
    @copyright {{ date('Y') }};
</footer>
</body>
</html>
