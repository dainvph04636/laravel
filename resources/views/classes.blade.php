<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<table class="table">
	<thead>
		<th> ID </th>
		<th> NAME </th>
		<th> TEACHER NAME </th>
		<th> MAJOR </th>
		<th> MAX STUDENT </th>
	</thead>
	<tbody>
		@foreach($classes as $key => $value)
		<!-- @if($value->id % 2)
		<tr style="background: yellow">
			<td>{{$value->id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->teacher_name}}</td>
			<td>{{$value->major}}</td>
			<td>{{$value->max_student}}</td>
		</tr>
		@else
		<tr style="background: green">
			<td>{{$value->id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->teacher_name}}</td>
			<td>{{$value->major}}</td>
			<td>{{$value->max_student}}</td>
		</tr>
		@endif -->
		<tr style="background: {{$value->id % 2 ? 'yellow' : 'green'}}">
			<td>{{$value->id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->teacher_name}}</td>
			<td>{{$value->major}}</td>
			<td>{{$value->max_student}}</td>
		</tr>
		@endforeach
	</tbody>
</table>