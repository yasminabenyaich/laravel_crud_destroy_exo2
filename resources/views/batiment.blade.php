<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ("css/app.css") }}">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($batiments as $batiment)
                <tr>
                    <th scope="row">{{ $batiment-> id }}</th>
                    <td> {{ $batiment->nom }}</td>
                    <td> {{ $batiment->adresse }}</td>
                    <td> {{ $batiment->description }}</td>
                    <td>
                        <form action="">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>    
            @endforeach
            </tbody>
            
          </table>
    </section>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>