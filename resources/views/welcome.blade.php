<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container p-5 my-5 bg-dark text-black rounded-5">
	<center>
		<h1 class="text-danger">Your Todo</h1>
	</center>
	<form action="{{ url('add') }}" method="POST">
		@csrf
		<div class="form-floating mb-3 mt-3">
			<input type="text" name="name" id="name" class="form-control mt-3" placeholder="Add new Todo..." required>
			<label for="name">Add Todo</label>
		</div>
	</form>
	<table class="table table-dark table-hover mt-5">
		<thead>
		  <tr>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
			@foreach ($todos as $todo)
				@if ($todo->status == 'انجام شده')
					<tr>
						<td>{{$todo->name}}</td>
						<td class="text-success">{{$todo->status}}</td>
						<td>
							<a href="{{ url('delete/'.$todo->id) }}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
						</td>
					</tr>
				@else
					<tr>
						<td>{{$todo->name}}</td>
						<td class="text-danger">{{$todo->status}}</td>
						<td>
							<a href="{{ url('editForm/'.$todo->id) }}"><button type="button" class="btn btn-outline-info">Edit</button></a>
							<a href="{{ url('delete/'.$todo->id) }}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
							<a href="{{ url('done/'.$todo->id) }}"><button type="button" class="btn btn-outline-warning">Done</button></a>
						</td>
					</tr>
				@endif
			@endforeach
		</tbody>
	  </table>
	  <footer>
		<a href="{{ url('/All') }}"><button name="All" type="button" class="btn btn-outline-warning">All</button></a>
		<a href="{{ url('/Complete') }}"><button name="Complete" type="button" class="btn btn-outline-secondary">Complete</button></a>
		<a href="{{ url('/NComplete') }}"><button name="NComplete" type="button" class="btn btn-outline-primary">Not Complete</button></a>	
	  </footer>
</div>
@include('message')
</body>
</html>