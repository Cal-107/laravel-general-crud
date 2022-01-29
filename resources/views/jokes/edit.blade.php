@extends('layouts.main')

@section('content')
<section class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <h1>Add new joke!</h1>

    <form action="{{ route('jokes.update', $joke->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="author" class="form-label"></label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $joke->author }}">
        </div>

        <div class="mb-3">
            <label for="quote" class="form-label"></label>
            <textarea type="text" class="form-control" id="quote" name="quote" row="8"> {{ $joke->quote }} </textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label"></label>
            <input type="text" class="form-control" id="date" name="date" placeholder="2022-10-10" value="{{ $joke->date }}">
        </div>

        <div class="mb-3">
            <label for="vote" class="form-label"></label>
            <input type="text" class="form-control" id="vote" name="vote" value="{{ $joke->vote }}"> 
        </div>
        <button type="submit" class="btn btn-secondary border border-dark border-2">
            Edit Joke!
        </button>
    </form>
</section>
@endsection