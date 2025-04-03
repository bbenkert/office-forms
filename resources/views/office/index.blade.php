@php
    $page = \App\Models\OfficePage::first();
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>{{ $page->title }}</title>
</head>
<body>
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->intro }}</p>
</body>
</html>
