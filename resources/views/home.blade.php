@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($categories as $category)
                            <div class="card">
                                <div class="card-header">{{$category->category}}</div>
                                <div class="card-body">
                                    <div class="card-deck">
                                        <?php $loopy = 1 ?>
                                        @foreach($category->nominations as $nomination)
                                            @if($loopy == 6)
                                                </div>
                                                <div class="card-deck">
                                                    @endif
                                            <div class="card">
                                                <img class="card-img-top"
                                                     src="/images/{{ data_get($nomination, 'movie.imdb_id', 'tt1302006') }}.jpg"
                                                     alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $nomination->movie->name }}</h5>

                                                    @if(!empty($nomination->person->name))
                                                        <p class="card-text">{{ $nomination->person->name }}</p>
                                                    @endif
                                                    @if(!empty($nomination->extra))
                                                        <p class="card-text">{{ $nomination->extra }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        <?php $loopy++ ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
