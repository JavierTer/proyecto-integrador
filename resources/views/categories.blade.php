@extends('plantilla')

@section('principal')

@endsection
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Categorias
    <ul>


      @forelse ($categories as $category)
        <li>{{$category->name}}</li>


        <ul>

        @forelse ($category->name as $vuelta)
          <li>{{$vuelta->name}}</li>
            {{-- <li>{{$id->name}}</li> --}}
        @empty

        @endforelse
      </ul>
      @empty

      @endforelse
    </ul>

  </body>
</html>
