@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
    <h1 class="title">Projects</h1>
    <ul class="item">
        @foreach($projects as $project)
            <li>
                <a href="/project/{{ $project->id }}" >
                {{  $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection