<!-- resources/views/evenment/listeEvenements.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evenement</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.app')


    <h1>Liste des Événements</h1>

    <div class="d-flex flex-wrap">
        @foreach($evenements as $evenement)
            <div class="card mb-3 ms-2" style="width: 18rem;"> <!-- Ajoutez la classe ms-2 ici -->
                <img src="{{ url('public/image/'.$evenement->image) }}" class="card-img-top" alt="Image de l'événement"> 
                <div class="card-body">
                    <h3 class="card-title">{{ $evenement->libelle }}</h3>
                    <p class="card-text">Date Limite Inscription: {{ $evenement->date_limite_inscription }}</p>
                    <p class="card-text">Description: {{ $evenement->description }}</p>
                    <p class="card-text">Est cloturé: {{ $evenement->is_clotured }}</p>
                    <p class="card-text">Date Événement: {{ $evenement->date_evenement }}</p>
                    <a href="/update_evenement/{{$evenement->id}}" class="card-link">effectuer une modification</a>
                    <a href="/delete_evenement/{{$evenement->id}}" class="card-link">effectuer une suppression</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
