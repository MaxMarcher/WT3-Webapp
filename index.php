<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="jumbotron text-center">
    <h1>Kalorientagebuch</h1>
    <p>Wählen Sie Lebensmittel aus der Datenbank oder fügen Sie eigene hinzu.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3>Lebensmittel hinzufügen</h3>
          <p>Fügen Sie der Datenbank ein beliebiges Lebensmittel zu. Entnehmen Sie die Nährwerte der Packung.:</p>
        <div class="form-group">
         <label for="comment">Lebensmittel:</label>
         <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="form-group">
         <label for="comment">Kohlenhydrate pro 100g:</label>
         <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="form-group">
         <label for="comment">Fette pro 100g:</label>
         <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="form-group">
         <label for="comment">Eiweiß pro 100g:</label>
         <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
      </div>
      <div class="col-sm-8">
        <h3>Lebensmitteldatenbank</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>

    </div>
  </div>

</body>
</html>
