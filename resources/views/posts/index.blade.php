<x-layout>
    <h1> this is posts page!</h1>
    <div>
        @foreach ($posts as $post)
            <h1> {{ $post->title }} </h1>
            <p> {{ $post->body }} </p>
            <small> {{ $post->published }} </small>
        @endforeach
    </div>
</x-layout>