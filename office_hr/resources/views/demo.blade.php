<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 align="center">Hello From Demo page</h1>
@foreach($data as $v_data)
    <h2>{{ $v_data['name'] }}</h2>
    {{ $v_data['city'] }}
@endforeach()
</body>
</html>