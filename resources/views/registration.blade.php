@extends('layouts.site')
@section('reg')
<div class="form">
			<form action="" method="POST">
				<label>Login</label><br>
				<input type="text" name="login" id="log"><br>
				<label>Mail</label><br>
				<input type="text" name="mail" id="email"><br>
				<label>Password</label><br>
				<input type="password" name="password" id="pass"><br>
				<label>Enter the password again</label><br>
				<input type="password" name="password2" id="pass2"><br>
				<button name="but">Registration</button>
			</form>
		</div>
@endsection
