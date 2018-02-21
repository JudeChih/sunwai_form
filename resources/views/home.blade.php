<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    {{Form::open(['url'=>'/', 'method'=>'post'])}}
    {{Form::label('title', 'Title')}}<br>
    {{Form::text('title')}}<br>
    {{Form::label('content')}}<br>
    {{Form::textarea('content')}}<br>
    {{Form::submit('發表文章')}}
    {{Form::close()}}
</body>
</html>