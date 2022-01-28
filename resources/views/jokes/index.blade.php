@extends('layouts.main')

@section('content')
<section class="h-100 container d-flex flex-column justify-content-center">
    <h1>Choose your author to find his quote</h1>
    <div class="row justify-content-evenly">
        @foreach ($jokes as $joke)
        <div class="col-5 m-3 p-5 text-center rounded-pill bg-light">
            <a href="{{ route('jokes.show', $joke->id) }}" class="text-decoration-none text-dark my-5">
                <h3><strong>{{ $joke->author }}</strong></h3>
                {{-- <p>
                    {{ $joke->quote }}
                </p>
                <div>
                    <strong>Date: </strong>{{ $joke->date}}
                </div>
                <div>
                    <strong>Vote: </strong>{{ $joke->vote}}
                </div> --}}
            </a>
        </div>    
        @endforeach
    </div>
</section>
@endsection