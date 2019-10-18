<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of users</title>
</head>
<body>
	<h1>{{ $title }}</h1>

	@if (! empty($users))
		<ul>
			@foreach ($users as $user)
				<li>{{ $user }}</li>
			@endforeach
		</ul>
	@else
		<h2>Not found users :/</h2>
	@endif
</body>
</html>