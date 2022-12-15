<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
  @if (count($errors) > 0)
      <ul>
          @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
          @endforeach
      </ul>
  @endif
  <div class="form-group row">
      <div class="col-md-10">
          <input type="text" class="form-control" name="body" value="{{ old('body') }}">
      </div>
  </div>
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  {{ csrf_field() }}
  <input type="submit" class="btn btn-primary" value="つぶやく">
  </form>
</body>
</html>