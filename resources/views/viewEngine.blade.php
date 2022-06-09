
@php
    $title ='Xin chao Laravel';
    $min = 3; $max = 50;
@endphp


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
<ul>
    @for ($i = $min;$i <=$max; $i++)
    @if ($i %2 == 1)
        <li>{{$i}}--{{pow($i, 2)}}</li>
    @endif
    @endfor
</ul>
</body>
</html>
