@extends("layouts.main")

@section('title')
Indice Libri    
@endsection

@section('mainContent')
  <div class="container">
    <ul class="book-list">
      @foreach ($books as $book)
      <li class="book-list-item">
        <img src="{{$book->image}}" alt="">
        <div>
          <a href="{{route("books.show", $book->id)}}">Vai alla scheda</a>
          <a href="{{route("books.edit", $book->id)}}">Modifica scheda</a>
        </div>
        <ul class="book-info-list">
          <li class="book-info-list-item"><span>Titolo:</span> {{$book->title}}</li>
          <li class="book-info-list-item"><span>Autore:</span> {{$book->author}}</li>
          <li class="book-info-list-item"><span>Edizione:</span> {{$book->edition}}</li>
          <li class="book-info-list-item"><span>Codice ISBN:</span> {{$book->isbn}}</li>
          <li class="book-info-list-item"><span>Data di Pubblicazione:</span> {{$book->year}}</li>
          <li class="book-info-list-item"><span>Genere:</span> {{$book->genre}}</li>
          <li class="book-info-list-item"><span>N° Pagine:</span> {{$book->pages}}</li>
        </ul>
      
        <form action="{{route("books.destroy", $book->id)}}" method="POST">
          @csrf
          @method("DELETE")
          
          <input type="submit" value="Elimina">
        </form>
      </li>
      @endforeach
    </ul>

    
  </div>
@endsection
