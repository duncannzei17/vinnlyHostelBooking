@extends('layouts.app_layout')

@section('content')

<div class="container">
    <br>
<!-- form -->

<div class="contact">
       <div class="row">
		<div class="col-sm-12 col-sm-offset-6">   		
       		<h4 class="text-center">Please give us your feedback</h4>
			{!!Form::open(['method'=>'POST'])!!}
				<div class="form-group">
					{{Form::text('name','',['class'=>'form-control', 'placeholder'=>'Name','required'])}}
				</div>
				<div class="form-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                <div class="form-group">
                                <input id="phone" type="tel" pattern="^\+?\d{0,10}" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
				<div class="form-group">
					{{Form::textarea('message','',['class'=>'form-control', 'placeholder'=>'Message','required'])}}
				</div>
		     	{{Form::submit('Send',['class'=>'btn btn-primary btn-block'])}}
			{!!Form::close()!!}
			<br></div>
	   </div>
	</div>
</div>
</div>
</div>
<!-- form -->
@endsection