@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4 text-uppercase">Labot profilu: <b>{{$user->name}}</b></div>
                <div class="card-body">
                    {!! Form::open(['action' => 'ProfileController@store', 'files' => true, 'class' => 'form-horizontal']) !!}
                    
                    {!! Form::hidden('id', $user->id)!!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Vārds', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::text('name', $user->name, ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif   
                    </div>
                    </div>

                    <div class="form-group row">
                    {!! Form::label('bio', 'Bio', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::textArea('bio', $user->bio, ['class' => 'form-control '.($errors->has('bio') ? ' is-invalid' : '' ), 'placeholder' => 'Ievadiet savu bio..']) !!}   
                    @if ($errors->has('bio'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('bio') }}</strong>
                        </span>
                    @endif                                        
                    </div>
                    </div>

                    <div class="form-group row">
                    {!! Form::label('email', 'E-pasts', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::text('email', $user->email, ['class' => 'form-control '.($errors->has('directory_id') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('directory_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('directory_id') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-3 control-label text-md-right">Bilde</label>                    
                        <div class="col-md-8">
                        {!! Form::file('image', ['class' => 'form-control'.($errors->has('image') ? ' is-invalid' : '' )]) !!}   
                        @if ($errors->has('image'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif 
                        @if (isset($error_message))
                            <span class="invalid-feedback">
                                <strong>{{ $error_message }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-8 offset-md-3">
                    {!! Form::submit('Saglabāt', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection