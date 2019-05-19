<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laracasts')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <style>
        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <div class="tabs">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/project">Project</a></li>
            <li><a href="/project/create">Create a Project</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
    
</body>
