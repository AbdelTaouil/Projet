<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>

@include('partials.header')
@include('sections.services')
@include('sections.portfolio')
@include('sections.about')
@include('sections.team')
@include('sections.contact')
@include('partials.footer')


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>