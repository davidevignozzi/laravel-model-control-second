@extends('layout.main')

@section('page_title')
    Modifica Film
@endsection

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
    
@section('content') 


    <div class="container mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('movies.update', ['movie' => $movie->id])}}" method="POST">
            @method("PUT")
            @csrf

            <div class="form-group">
                <label for="cover_image">Immagine Cover</label>
                <div class="cover">
                    <img src="{{$movie->cover_image}}" alt="">
                </div>
                <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="Immagine" value="{{old('cover_image') ? old('cover_image') : $movie->cover_image}}">
            </div>
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo"  value="{{old('title') ? old('title') : $movie->title}}">
            </div>
            <div class="form-group">
                <label for="author">Regista</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Regista" value="{{old('author') ? old('author') : $movie->author}}">
            </div>
            <div class="form-group">
                <label for="genre">Genere</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Genere" value="{{old('genre') ? old('genre') : $movie->genre}}">
            </div>
            <div class="form-group">
                <label for="plot">Trama</label>
                <textarea class="form-control" id="plot" name="plot" rows ="10" placeholder="Trama">{{old('plot') ? old('plot') : $movie->plot}}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Anno</label>
                <select class="form-control" id="year" name="year" placeholder="Anno">
                    @for($i = 1900; $i <= date('Y') + 1; $i++)
                    {{-- @if ($ui == $movie->yaer)
                        <option value="{{$i}}"selected>{{$i}}</option>
                        @else
                        <option value="{{$i}}">{{$i}}</option>
                        @endif --}}
                        <option value="{{$i}}" {{ old('year') == $i || $movie->year == $i ? 'selected' : '' }}>{{$i}}</option>
                    @endfor
                </select>
            </div>
            
        <button type ="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>

@endsection