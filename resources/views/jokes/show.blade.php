@extends('layouts.main')

@section('content')
<section class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="card p-3 row d-flex justify-content-center align-items-center">
        <div class="col">
            <h4><strong>Author: </strong> {{ $joke->author }}</h4>
            <p><strong>Quote: </strong> {{ $joke->quote }} </p>
            <div><strong>Date: </strong> {{ $joke->date }} </div>
            <div><strong>Vote: </strong> {{ $joke->vote }} </div>
        </div>
        <div class="col mt-4 d-flex">
            <button class="btn btn-primary me-2">
                <a href="{{ route('jokes.index') }}"class="text-decoration-none text-light">
                    &LeftArrow; Back to jokes
                </a>
            </button>
    
            <button class="btn btn-primary me-2">
                <a href="{{ route('jokes.edit', $joke->id) }}"class="text-decoration-none text-light">
                    Edit joke
                </a>
            </button>

            <form action=" {{ route('jokes.destroy', $joke->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete Joke" onclick="return confirm('Are you sure?')">
            </form>
        </div>
    </div>
</section>
@endsection