@extends('layouts.main')

@section('content')
        
            <h3>Contact Us</h3>
            <hr>
        <div class="box padding-10" >
            @if(session('message'))
             <div class="alert alert-info">
                {{ session('message') }}
             </div>
            @endif
                {!! Form::open(['route' => ['contactPost']]) !!}   
                    <div class="form-group required {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Name</label>
                        {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                        @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group required {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        {!! Form::text('email', null, ['class'=> 'form-control']) !!}
                        @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div> 
                        <div class="form-group required {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="email">Address</label>
                            {!! Form::text('address', null, ['class'=> 'form-control']) !!}
                            @if($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif 
                        </div>
                            <div class="form-group required {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="email">Phone No</label>
                            {!! Form::text('phone', null, ['class'=> 'form-control']) !!}
                            @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                        </div> 
                    <div class="form-group required {{ $errors->has('body') ? 'has-error' : '' }}">
                        <label for="comment">Message</label>
                        {!! Form::textarea('body', null, ['row' => 6, 'class'=> 'form-control']) !!}
                        @if($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="clearfix">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        </div>
                        <div class="pull-right">
                            <p class="text-muted">
                                <span class="required">*</span>
                                <em>Indicates required fields</em>
                            </p>
                        </div>
                    </div>
                {!! Form::close() !!}
        </div> 
@endsection