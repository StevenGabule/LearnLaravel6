<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simple Post</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>
<body>
<div id="app">
    <form-component></form-component>
</div>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
