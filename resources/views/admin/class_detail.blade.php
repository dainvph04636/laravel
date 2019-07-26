@foreach($classes as $key => $value)
<tr style="display: {{$value->id == 2 ? 'block' : 'none'}}">
	<td>{{$value->id}}</td>
	<td>{{$value->name}}</td>
	<td>{{$value->teacher_name}}</td>
	<td>{{$value->major}}</td>
	<td>{{$value->max_student}}</td>
</tr>
@endforeach