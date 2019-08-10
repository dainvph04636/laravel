<form action="{{ route('sum') }}" method="POST">
	{{csrf_field()}}
	A: <input type="text" name="n_a"><br><br>
	B: <input type="text" name="n_b"><br><br>
	C: <input type="text" name="n_c"><br><br>

	<button type="submit">Ket qua</button>
</form>