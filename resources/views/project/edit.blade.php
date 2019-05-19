@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div class="container">
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/project/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>
    <hr/>
    <form method="POST" action="/project/{{ $project->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <div class="field">
            <div class="control">
                <button type="submit" class="button"> >> Delete Project << </button>
            </div>
        </div>
    </form>
</div>
@endsection