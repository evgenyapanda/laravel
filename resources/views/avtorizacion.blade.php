@extends('layouts.site')

@section('avtoriz')
<div class="form">
			<form action="" method="POST">
				<label>Login</label><br>
				<input type="text" name="login" id="email"><br>
				<label>Password</label><br>
				<input type="password" name="password" id="pass"><br>
				<button name="but">Enter</button>
			</form>
</div>
	@endsection