@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Create Project</h1>
    <div class="field">
        <form method="POST" action="/project">
            {{ csrf_field() }}
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title" required value="{{ old('title') }}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="title">Project Description</label>
                <div class="control">
                    <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" required placeholder="Project description">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Create Project</button>
                </div>
            </div>

            @include ('errors')
        </form>
    </div>
</div>
@endsection