@extends('layout.main')

@section('page_title')
    Dettaglio Serie
@endsection

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
    
@section('content') 

        <div class="main_container vh">
            <button class="btn btn-light"> <a href="{{route('movies.index')}}"><i class="fas fa-arrow-left"></i> homepage</a></button>
            <div class="cover"><img src="{{$movie->cover_image}}" alt=""></div>
            <h2><i class="fas fa-book-open"></i> {{$movie->title}}</h2>
            <p>Anno {{$movie->year}}</p>
            <p>{{$movie->plot}}</p>    
        </div>

@endsection