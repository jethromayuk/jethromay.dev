@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 class="text-3xl font-bold">Blog</h1>
    @foreach ($posts as $post)
    <li>{{ $post->title }}</li>
@endforeach
</div>
@endsection
