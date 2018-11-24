<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>import file</title>
	<link rel="stylesheet" href="{{asset("public/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/style.css")}}">
</head>
<body>

     <div class="container">
     	<div class="row">
     		<div class="com-md-12">
     			
				{!!Form::open(["url"=>"import/file", "method"=>"post", "enctype"=>"multipart/form-data"])!!}

				  <div class="form-group">
				  	  <input type="file" name="customer">
				  </div>
				   {!! Form::submit("Import", ["class"=>"btn btn-primary"]) !!}
               {!!Form::close()!!}

     		</div>
     	</div>
     </div>
   <script src="{{asset("public/js/jquery-3.3.1.js")}}"></script>
   <script src="{{asset("public/js/bootstrap.min.js")}}"></script>
</body>
</html>