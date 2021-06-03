@extends('layout.main')

@section('page_title')
    Aggiungi un nuovo Film
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

        <form action="{{route('movies.store')}}" method="POST">
            @method("POST")
            @csrf

            <div class="form-group">
                <label for="cover_image">Immagine Cover</label>
                <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="Immagine" value="{{ old('cover_image') }}">
            </div>
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="author">Regista</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Regista" value="{{ old('author') }}">
            </div>
            <div class="form-group">
                <label for="genre">Genere</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Genere" value="{{ old('genre') }}">
            </div>
            <div class="form-group">
                <label for="plot">Trama</label>
                <textarea class="form-control" id="plot" name="plot" rows ="10" placeholder="Trama">{{ old('plot') }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Anno</label>
                <select class="form-control" id="year" name="year" placeholder="Anno">
                    @for($i = 1900; $i <= date('Y') + 1; $i++)
                        <option value="{{$i}}" {{ $i == old('year') ? 'selected' : '' }}>{{$i}}</option>
                    @endfor
                </select>
            </div>
            
        <button type ="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>

@endsection