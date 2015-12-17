@extends('layouts.home')

@section('content')

	<div class="container">
		<h2 class="green-text">Register</h2>
		<div class="section">
			<div class="row center">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form role="form" method="POST" action="{{ url('/auth/register') }}">
					{!! csrf_field() !!}
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" class="validate" name="name" value="{{ old('name') }}">
						<label for="name">User Name</label>
					</div>
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">account_circle</i>
						<input type="email" class="validate" name="email" value="{{ old('email') }}">
						<label for="email">Email</label>
					</div>
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">lock</i>
						<input type="password" class="validate" name="password">
						<label for="password">Password</label>
					</div>
					<div class="input-field col s12 m12 l6">
						<i class="material-icons prefix">lock</i>
						<input type="password" class="validate" name="password_confirmation">
						<label for="password_confirmation">Password Verify</label>
					</div>
					<div class="row center">
						<button type="submit" class="btn-large waves-effect waves-light  green darken-1">Sign up</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
