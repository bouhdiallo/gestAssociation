<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Evenement</title>
</head>
<body>
{{-- <form method="POST" action="{{route('bdevenement')}}"> --}}
  <form method="POST" action="" enctype="multipart/form-data">

  @csrf
    <fieldset>

      {{-- <legend>plateforme d'ajout d'evenement</legend>
      @if(session('status'))
        <div class="alert alert-succes">
           {{session('status')}}
     @endif   
     
     <ul>  
         @foreach ($errors->all() as $error)
         <li class="alert alert-danger">{{$error}}</li>
         @endforeach
    </ul> --}}
     

      <div class="form-group">
        <label for="nom" class="form-label mt-4">Nom</label>
        <input type="text" class="form-control" id="nom"  placeholder="Enter libelle" name="nom">
      </div>

      <div class="form-group">
        <label for="datelimite" class="form-label mt-4">Date de creation</label>
        <input type="date" class="form-control" id="dateLimite" placeholder="date limite " autocomplete="off"  name="date_limite_inscription">
      </div>
      
      <div class="form-group">
        <label for="exampleTextarea" class="form-label mt-4">Slogan</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
      </div>
           
      <div class="form-group">
        <label for="formFile" class="form-label mt-4">loogo</label>
        <input class="form-control" type="file" id="formFile" name="image">
      </div>

      


        </div>
      </fieldset>
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>

      </body>
      </html>
