<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<table class="table">
	<thead>
		<th> ID </th>
		<th> NAME </th>
		<th> ADDRESS </th>
		<th> UNIVERSITY </th>
	</thead>
	<tbody>
		@for($i = 0; $i < count($students); $i++)
		<tr>
			<td >{{$students[$i]->id}}</td>
			<td>{{$students[$i]->name}}</td>
			<td>{{$students[$i]->address}}</td>
			<td>{{$students[$i]->university}}</td>
		</tr>
		@endfor
	</tbody>
</table>