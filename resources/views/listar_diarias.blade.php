<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1>Lista de Diárias</h1>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome Cliente</th>
            <th scope="col">Nome Diarista</th>
            <th scope="col">Atendimento</th>
            <th scope="col">valor</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($diarias as $diaria)
            <tr>
              <th scope="row">{{ $diaria->id }}</th>
              <td>{{ $diaria->nome_cliente }}</td>
              <td>{{ $diaria->nome_diarista }}</td>
              <td>{{ $diaria->atendimento }}</td>
              <td>{{ $diaria->valor }}</td>
              <td><a href="{{ route('diarias.show', $diaria) }}" class="btn btn-success">Detalhes</a></td>
            </tr>
          @endforeach  
        </tbody>
      </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>