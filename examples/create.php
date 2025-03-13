<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  
<section class="container my-5">

<h1>
    Create new user
</h1>

<form action="/project-one/examples/handel_create.php" method="post">

  <div class="mb-3">
    <label for="exampleInputFirstName" class="form-label">first name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputFirstName">
  </div>

  <div class="mb-3">
    <label for="exampleInputLastName" class="form-label">last name</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputLastName">
  </div>

  <div class="mb-3">
    <label for="exampleInputAge" class="form-label">age</label>
    <input type="text" name="age" class="form-control" id="exampleInputAge">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>