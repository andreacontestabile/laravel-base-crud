@extends("layouts.main")

@section('title')
Aggiungi un nuovo libro
@endsection

@section('mainContent')
<h1>Aggiungi un nuovo libro</h1>

<form action="{{route("books.store")}}" method="POST">
  @csrf
  @method("POST")

  <div>
    <label for="title">Titolo:</label>
    <input type="text" name="title" id="title" maxlength="30" required>
  </div>
  
  <div>
    <label for="author">Autore:</label>
    <input type="text" name="author" id="author" maxlength="30" required>
  </div>

  <div>
    <label for="edition">Edizione:</label>
    <input type="text" name="edition" id="edition" maxlength="30" required>
  </div>

  <div>
    <label for="isbn">Codice ISBN:</label>
    <input type="text" name="isbn" id="isbn" size="13" required>
  </div>

  <div>
    <label for="year">Data di Pubblicazione:</label>
    <input type="date" name="year" id="year" required>
  </div>

  <div>
    <label for="genre">Genere:</label>
    <input type="text" name="genre" id="genre" maxlength="30" required>
  </div>

  <div>
    <label for="pages">N° pagine:</label>
    <input type="number" name="pages" id="pages" required>
  </div>

  <div>
    <label for="image">Link immagine copertina:</label>
    <input type="text" name="image" id="image" required>
  </div>

  <input type="submit" value="Aggiungi">

  @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

</form>
@endsection
