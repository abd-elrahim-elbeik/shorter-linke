<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

    <div class="form-group">
      <form action="{{ route('links.store') }}" method="post" enctype= "form-data" >
        @csrf
        <div >
          {{-- @foreach(link) --}}
          <label for="">Your Link</label>
          <textarea name="code" class="form-control">{{ old('link') }}</textarea>
          {{-- @endforeach --}}
      </div>
      <div >
        <button type="submit" class="btn btn-primary">{{ 'save' }}</button>
     </div>
     {{-- <div><label for="">{{ $short->code }}</label></div> --}}

     <table class="table">
      <tr>
        {{-- <th>id</th> --}}
        <th>code</th>
        <th>like</th>
      </tr>

       @foreach ($link as $link )
       <tr>
        {{-- <td>{{ $link->id }}</td> --}}
        <td><a href="{{ route('getlink' , $link->code) }}">{{ route('getlink' , $link->code) }}</a></td>
        <td>{{ $link->link}}</td>
      </tr>
       @endforeach
     </table>
      </form>



          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
