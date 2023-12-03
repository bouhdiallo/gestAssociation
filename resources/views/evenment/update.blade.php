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
      <legend>plateforme d'ajout d'evenement</legend>
      {{-- @if(session('status'))
        <div class="alert alert-succes">
           {{session('status')}}
     @endif --}}
    
      <div class="form-group">
        <label for="libelle" class="form-label mt-4">Libelle</label>
        <input type="text" class="form-control" id="libelle"  placeholder="Enter libelle" name="libelle" value="{{$evens->libelle}}">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="datelimite" class="form-label mt-4">Date le mite des inscription</label>
        <input type="date" class="form-control" id="dateLimite" placeholder="date limite " autocomplete="off"  name="date_limite_inscription" value="{{$evens->date_limite_inscription}}">
      </div>
      
      <div class="form-group">
        <label for="exampleTextarea" class="form-label mt-4">Description</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" name="description">{{$evens->description}}</textarea>
      </div>
           
      <div class="form-group">
        <label for="formFile" class="form-label mt-4">Image de mis en avant</label>
        <input class="form-control" type="file" id="formFile" name="image" value="{{$evens->image}}">
      </div>

      <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4">est cloturer ou pas?</label>
        <select class="form-select" id="exampleSelect1" name="is_clotured" value="{{$evens->is_clotured}}">
          <option {{$evens->is_clotured=="oui"  ? 'selected':''}}>oui</option>
          <option {{$evens->is_clotured=="non"  ? 'selected':''}}>non</option>

          <div class="form-group">
        
            <input class="form-control" type="hidden" name="association_id" value="{{$evens->association_id}}">

        </div>
         
        </select>
      </div>

      <div class="form-group">
        <label for="dateEvenement" class="form-label mt-4">Date Evenement</label>
        <input type="date" class="form-control" id="dateEvenement" placeholder="date evenement" autocomplete="off" name="date_evenement" value="{{$evens->date_evenement}}">
      </div>


        </div>
      </fieldset>
     
      <button type="submit" class="btn btn-primary">Modifier</button>
    </fieldset>
  </form>

      </body>
      </html>
