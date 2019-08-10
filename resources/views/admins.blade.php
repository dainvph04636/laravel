@extends('layout.master')
@section('title')
Admin page
@endsection
<div>
	@section('table_name','Admin')
</div>
@section('table')
<table class="table">
	<thead>
		<th> ID </th>
		<th> NAME </th>
		<th> ADDRESS </th>
		<th> UNIVERSITY </th>
	</thead>
	<tbody>
		<tr>
			<td ></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<div>
	
@include('sections.custom')
	
</div>
@endsection

