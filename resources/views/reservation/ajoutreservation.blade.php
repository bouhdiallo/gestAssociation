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
  <form method="POST" action="{{route('reservation')}}" >
  @csrf
    <fieldset>
      <div class="form-group">
        <label for="reference" class="form-label mt-4">Reference</label>
        <input type="text" class="form-control" id="reference"  placeholder="Enter libelle" name="reference">
      </div>

      <div class="form-group">
        <label for="Date_reservation" class="form-label mt-4">Date de reservation</label>
        <input type="date" class="form-control" id="Date_reservation" placeholder="date " autocomplete="off"  name="Date_reservation">
      </div>
        </div>
      </fieldset>
     
      <button type="submit" class="btn btn-primary">reservé</button>
    </fieldset>
  </form>
      </body>
      </html>

