@extends('layouts.plantilla')

@section('title','image' .$categoria, 'image'.$img )

@section('content')
    <?php
    if ($categoria){
    echo "Bienvenido a la página de $img, de la   categoria $categoria";
    }else{
    echo "Welcome a la Galeria de   $img";
    }
    ?>
@endsection








{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <H1> <?PHP--}}
{{--        if ($categoria){--}}
{{--              echo "Bienvenido a la página de $img, de la   categoria $categoria";--}}
{{--        }else{--}}
{{--        echo "Welcome a la galeria de   $img";--}}
{{--        }--}}
{{--        ?>--}}
{{--   </H1>--}}
{{--</body>--}}
{{--</html>--}}
