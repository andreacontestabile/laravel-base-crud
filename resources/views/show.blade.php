<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$book->title}}</title>
</head>
<body>

  <a href="{{route("books.index")}}">Torna all'Indice</a>
  
  <ul>
    <img src="{{$book->image}}" alt="">
    <li>Titolo: {{$book->title}}</li>
    <li>Autore: {{$book->author}}</li>
    <li>Edizione: {{$book->edition}}</li>
    <li>Codice ISBN: {{$book->isbn}}</li>
    <li>Data di Pubblicazione: {{$book->year}}</li>
    <li>Genere: {{$book->genre}}</li>
    <li>N° Pagine: {{$book->pages}}</li>
    <form action="{{route("books.destroy", $book->id)}}" method="POST">
      @csrf
      @method("DELETE")

      <input type="submit" value="Elimina">
    </form>
  </ul>
  
  
</body>
</html>