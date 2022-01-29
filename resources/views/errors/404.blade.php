@extends('layouts.main')

@section('content')
<section class="h-100 d-flex justify-content-center align-items-center flex-column">
    <h1>Error 404!</h1>
    <h2>This is not a joke, nothing found</h2>
    <button class="btn btn-primary me-5">
        <a href="{{ route('jokes.index') }}" class="text-decoration-none text-light">
            Back to jokes, rigth now!
        </a>
    </button>
</section>
@endsection