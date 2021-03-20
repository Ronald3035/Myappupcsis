<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>INICIO</title>
</head>
<body>

	<div class="container">
		<H1>PAGINA DE INICIO</H1>
		<table class="table table-stripped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>STATE</th>
				</tr>
			</thead>
			<tbody>
				@foreach($materia as $mt)
				<tr>
					<td>{{$mt->id}}</td>
					<td>{{$mt->name}}</td>
					<td>{{$mt->state}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">
			<div class="col-md-12">
				{{$materia->render()}}
			</div>
		</div>
		

	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>