<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OddNumbert</title>
</head>
<body>
<ul>
  @foreach($odds as $o)
<li>{{$o}} #{{pow($o, 3)}} </li>
  @endforeach
</ul>
</body>
</html>
