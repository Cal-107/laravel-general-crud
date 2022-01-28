@extends('layouts.main')

@section('content')
<section class="container h-100 my-5 d-flex flex-column justify-content-center align-items-center">
    <div class="card p-3 row d-flex justify-content-center align-items-center">
        <div class="col-8">
            <h4><strong>Author: </strong>{{ $joke->author }}</h4>
            <p><strong>Quote: </strong>{{ $joke->quote }}</p>
            <div><strong>Date: </strong>{{ $joke->date }} </div>
            <div><strong>Vote: </strong>{{ $joke->vote }} </div>
        </div>
        <div class="my-5">
            <button class="btn btn-primary me-5">
                <a href="{{ route('jokes.index') }}" class="text-decoration-none text-light">
                    Back to jokes
                </a>
            </button>
    
            <button class="btn btn-primary me-5">
                <a href="{{ route('jokes.edit', $joke->id) }}" class="text-decoration-none text-light">
                    Edit joke
                </a>
            </button>
        </div>
    </div>

</section>
@endsection