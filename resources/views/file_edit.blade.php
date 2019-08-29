@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4 text-uppercase">Labot dokumentu: <b>{{$file->name}}</b></div>
                <div class="card-body">
                    {!! Form::open(['action' => 'EditController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    {!! Form::hidden('original_id', $file->id) !!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Dokumenta nosaukums', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::text('name', $file->name, ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}   
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
                    {!! Form::textArea('description', $file->description, ['class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '' )]) !!}   
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
                    {!! Form::select('directory_id', $directories , $file->directory_id, ['class' => 'form-control '.($errors->has('directory_id') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('directory_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('directory_id') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>

                    {!! Form::hidden('path', $file->path) !!}

                    <div class="form-group row">
                    <div class="col-md-8 offset-md-3">
                    {!! Form::submit('Labot', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection