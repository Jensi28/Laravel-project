@extends('layout.master')

@section('title' , "service-Page")

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>services</title>
</head>
<body>
    <h1> welcome to services</h1>
    {{$name}}
    @if($name == "PU")
    <h5>
        This is correct
    </h5>
    @else
    <h5>
        This is not correct
    </h5>
    @endif
    </body>
</html>
@stop
