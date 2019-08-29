@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h4 text-uppercase">Izveido Direktoriju</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'DirectoryController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group row">
                    {!! Form::label('name', 'Direktorijas nosaukums', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::text('name', '', ['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : '' )]) !!}   
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif   
                    </div>
                    </div>

                    <div class="form-group row">
                    {!! Form::label('course_id', 'Kurss', ['class' => 'col-md-3 control-label text-md-right']) !!}
                    <div class="col-md-8">
                    {!! Form::select('course_id', $courses, '', ['class' => 'form-control '.($errors->has('course_id') ? ' is-invalid' : '' ), 'placeholder' => 'Izvēlies kursu']) !!}   
                    @if ($errors->has('course_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('course_id') }}</strong>
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