@extends('layout.main')

@section('page_title')
    Home Page Series
@endsection

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
    
 @section('content')   
   
        <h1 class="series">SerieTV <i class="fas fa-film"></i></h1>

        <div class="mt-5">
            <div class="mb-5 text-right"> 
                <a href="{{route('movies.create')}}"><button class="btn btn-warning" type="button">Aggiungi film</button></a>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Immagine</th>
                        <th>Titolo</th>
                        <th>Regista</th>
                        <th>Genere</th>
                        <th>Anno</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                    <tr> 
                        <td>
                            <div class="small_container">
                                <img src="{{$movie->cover_image}}" alt="{{$movie->title}}">
                            </div>
                        </td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->author}}</td>
                        <td>{{$movie->genre}}</td>
                        <td>{{$movie->year}}</td>
                        <td>
                            <a href="{{route('movies.show', ['movie' => $movie->id])}}"><button class="btn btn-secondary">Dettaglio</button></a>
                            <a href="{{route('movies.edit', ['movie' => $movie->id])}}"><button class="btn btn-success">Modifica</button></a>
                            <form action="{{route('movies.destroy', ['movie' => $movie->id ])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete">Elimina</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>

        </div>
        
    {{-- @foreach ($movies as $movie)
        <div class="main_container">
            <h2><i class="fas fa-video"></i> {{$movie->title}}</h2>
            <h3>{{$movie->author}}</h3>
            <h4>{{$movie->genre}}</h4>
            <p>{{$movie->plot}}</p> 
            <button><a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettaglio film </a></button>
          </div>     
    @endforeach --}}
  
@endsection