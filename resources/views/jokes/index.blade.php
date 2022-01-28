@extends('layouts.main')

@section('content')
<section class="container mt-5 d-flex flex-column">
    <div class="row">
        @foreach ($jokes as $joke)
        <div class="col-3 m-5 p-5 text-center border border-5 border-primary">
            <a href="{{ route('jokes.show', $joke->id) }}" class="text-decoration-none text-dark my-5">
                <h4><strong>{{ $joke->author }}</strong></h4>
                <p>
                    {{ $joke->quote }}
                </p>
                <div>
                    {{ $joke->date}}
                </div>
                <div>
                    {{ $joke->vote}}
                </div>
            </a>
        </div>    
        @endforeach
    </div>
</section>
@endsection