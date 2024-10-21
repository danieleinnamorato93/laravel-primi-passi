<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<header><h1>Hello World</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">{{$home}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">{{$caratteristiche}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">{{$portfolio}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">{{$progetti}}</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
</header>
<main>
    <div class="container">
        <div class="col">
            <h2>{{$titolo}}</h2>
            <p>{{$presentazione}}</p>
            <label for="inputPassword5" class="form-label">User:</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">

                <label for="inputPassword5" class="form-label">Password:</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    <button type="button" class="btn btn-danger">INVIA!</button>
                    <button type="reset" class="btn btn-dark">RICARICA</button>
            <h4>{{$descrizione}}</h4>
            <ul>
                @foreach ($lista as $listItem )
                <li><h3>{{$listItem}}</h3></li>
                @endforeach

            </ul>




            </div>
        </div>

    </div>
</main>

</body>
</html>
