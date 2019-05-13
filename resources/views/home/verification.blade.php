<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title></title>
</head>
<body>
	<!--输出错误信息!-->
	@if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif

   <form action="http://www.laravel.com/admin/verification" method="post" enctype="multipart/form-data">
   	<input type='hidden' name='_token' value="{{csrf_token()}}"
  <p> name: <input type="text" name="name" /></p>
  <p> age: <input type="text" name="age" /></p>
  <p> email: <input type="text" name="email" /></p>
  <p>头像：<input type='file' name='photo'></p>
  <input type="submit" value="Submit" />
</form>
</body>
</html>