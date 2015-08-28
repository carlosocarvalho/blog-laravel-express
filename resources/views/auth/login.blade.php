@extends('tpl')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<div class="col-xs-12">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">

							<label class="control-label">E-Mail Address</label>

								<input type="email" class="form-control" required name="email" value="{{ old('email') }}">


						</div>

						<div class="form-group">
							<label class="control-label">Password</label>
								<input type="password" class="form-control" required name="password">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Login</button>
						</div>

						<div class="form-group">
							<div class="row box-info-remember">
								<div class="col-md-6">
									<div class="checkbox custom-checkbox">
										<label> <input type="checkbox" name="remember">Remember Me</label>
									</div>
								</div>
								<div class="col-md-6">
                                  <a class="" href="{{ url('/password/email') }}">Forgot Your Password?</a>
								</div>
							</div>

						</div>


					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
