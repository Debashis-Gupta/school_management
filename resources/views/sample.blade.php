<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sample Try</title>
  </head>
  <body>
    <form class="" action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="file" name="file" value="">
      <button type="submit" name="" value="submit">Submit </button>
    </form>
  </body>
</html>
