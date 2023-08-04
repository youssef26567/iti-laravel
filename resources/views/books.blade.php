<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page}}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <table class="table table-hover table-dark">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
          <tr>
            <th scope="row">{{$index}}</th>
            <td>{{$book['title']}}</td>
            <td>{{$book['price']}}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
          
</body>
</html>