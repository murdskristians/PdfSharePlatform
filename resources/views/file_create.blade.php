@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4 text-uppercase">Pievienot jaunu dokumentu</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'FileController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Dokumenta nosaukums', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::text('name', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' ), 'placeholder' => 'Nosaukums']) !!}   
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif   
                    </div>
                    </div>

                    <div class="form-group row">
                    {!! Form::label('description', 'Apraksts', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::textArea('description', '', ['class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif                                        
                    </div>
                    </div>

                    <div class="form-group row">
                    {!! Form::label('directory_id', 'Direktorija', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::select('directory_id', $directories , '', ['class' => 'form-control '.($errors->has('directory_id') ? ' is-invalid' : '' ), 'placeholder' => 'Izvēlieties Folderi']) !!}   
                    @if ($errors->has('directory_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('directory_id') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="path" class="col-md-3 control-label text-md-right">Fails</label>                    
                    <div class="col-md-8">
                    {!! Form::file('path', ['class' => 'form-control'.($errors->has('path') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('path'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('path') }}</strong>
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
                    {!! Form::submit('Izveidot', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection