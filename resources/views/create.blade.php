<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create</title>
</head>
<body>

  <h1>Aggiungi un nuovo libro</h1>

  <form action="{{route("books.store")}}" method="POST">
    @csrf
    @method("POST")

    <div>
      <label for="title">Titolo:</label>
      <input type="text" name="title" id="title">
    </div>
    
    <div>
      <label for="author">Autore:</label>
      <input type="text" name="author" id="author">
    </div>

    <div>
      <label for="edition">Edizione:</label>
      <input type="text" name="edition" id="edition">
    </div>

    <div>
      <label for="isbn">Codice ISBN:</label>
      <input type="text" name="isbn" id="isbn">
    </div>

    <div>
      <label for="year">Data di Pubblicazione:</label>
      <input type="date" name="year" id="year">
    </div>

    <div>
      <label for="genre">Genere:</label>
      <input type="text" name="genre" id="genre">
    </div>

    <div>
      <label for="pages">N° pagine:</label>
      <input type="number" name="pages" id="pages">
    </div>

    <div>
      <label for="image">Link immagine copertina:</label>
      <input type="text" name="image" id="image">
    </div>

    <input type="submit" value="Aggiungi">

  </form>
  
</body>
</html>