<!doctype html>
<html lang="en">
<head>
    <meta charset="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Test Blade View</h1>

<hr>
@foreach($numbersArray as $key => $value )

        <h3>{{$key}} ---> {{$value}}</h3>

@endforeach


<hr>



</body>
</html>
