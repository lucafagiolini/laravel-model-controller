@extends ('layouts/app')

@section('content')
    <div class="container d-flex flex-wrap flex-column align-content-center text-center mt-5">
        <h1>movies</h1>
        <div class="row gap-3 mt-3">

            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <h5 class="card-text">{{ $movie->date }}</h5>
                        <h5 class="card-text">{{ $movie->vote }}</h5>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
