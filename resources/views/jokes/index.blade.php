@extends('layouts.main')

@section('content')
<section class="h-100 container d-flex flex-column justify-content-center">
    <h1>Choose your author to find his quote</h1>
    @if (session('deleted-joke'))
        <div class="alert alert-success">
            <strong>{{ session('deleted-joke') }}</strong>
            Jokes Deleted
        </div>
    @endif
    <div class="row justify-content-evenly mb-5">
        @foreach ($jokes as $joke)
        <div class="col-5 m-3 p-5 text-center rounded-pill bg-light">
            <a href="{{ route('jokes.show', $joke->id) }}" class="text-decoration-none text-dark my-5">
                <h3><strong>{{ $joke->author }}</strong></h3>
            </a>
        </div>    
        @endforeach
    </div>
    <div class="align-self-center">
        {{ $jokes->links() }}
    </div>
</section>
@endsection