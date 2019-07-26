@extends('layout.master')
@section('title')
Users page
@endsection
<div>
	@section('table_name','User')
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
			<td>1</td>
			<td>NGUYEN VIET DAI</td>
			<td>HA NOI</td>
			<td>FPT</td>
		</tr>
	</tbody>
</table>
@endsection