@extends ('layouts.app')

@section('content')
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="height: 445px;">
                    <div class="card-header h3 text-uppercase">
                        <span class="float-left">{{$file->name}}</span>
                    </div>
                    <div class="card-body">
                        <b>Dokumenta nosaukums:</b><br>
                        <p class="mt-1 mb-3">{{$file->name}}</p>
                        <b>Apraksts:</b><br>
                        <p class="mt-1 mb-3">{{$file->description}}</p>
                    </div>
                    <div class="card-footer">
                        <small>Pievienoja:</small>
                        <a href="{{url('/')}}/profile/{{$file->author->id}}"><b class="text-uppercase">{{$file->author->name}}</b></a><br>
                        <small>Pievienots:</small>
                        <b class="text-uppercase">{{$file->formattedCreatedDate()}}</b>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <object data="{{url('storage/'.$file->path)}}" type="application/pdf" width="100%" height="400px"></object>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-success w-25 text-truncate text-white" href="{{url('/')}}/approved/file/{{$file->id}}">Apstiprināt</a>
                        <a class="btn btn-danger w-25 text-truncate text-white" href="{{url('/')}}/declined/file/{{$file->id}}">Noraidīt</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection