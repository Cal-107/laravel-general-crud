@extends('layouts.main')

@section('content')
<section class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <h1>Add new joke!</h1>

    <form action="{{ route('jokes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="mb-3">
            <label for="quote" class="form-label">Quote</label>
            <textarea type="text" class="form-control" id="quote" name="quote" row="8"></textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="2022-10-10">
        </div>

        <div class="mb-3">
            <label for="vote" class="form-label">Vote</label>
            <input type="text" class="form-control" id="vote" name="vote">
        </div>
        <button type="submit" class="btn btn-secondary border border-dark border-2">
            C'mon, create your joke!
        </button>
    </form>
</section>
@endsection