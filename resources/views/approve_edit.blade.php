@extends ('layouts.app')

@section('content')
<div class="wrapper row3">
    <main class="hoc container clear">


        <div class="row p-0">
            {{-- ORIGINAL CARD --}}
            <div class="col-md-4 col-sm-4">
                <div class="card border-danger" style="height: 450px;">
                    <div class="card-header h4 text-uppercase border-danger bg-danger">
                        <span class="float-left text-white">Oriģinālais dokuments</span>
                    </div>
                    <div class="card-body ">
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

            {{-- PREVIEW --}}
            <div class="col-md-4 col-sm-4"> 
                <div class="card" style="height: 450px;">
                    <div class="card-header h4 text-uppercase">
                        <span class="float-left">Faila priekšskats</span>
                    </div>
                    <div class="card-body">
                        <object data="{{url('storage/'.$file->path)}}" type="application/pdf" style="width:100%; height:380px"></object>
                    </div>
                </div>
            </div>

            {{-- EDIT CARD --}}
            <div class="col-md-4 col-sm-4 first">
                <div class="card border-success" style="height: 450px;">
                    <div class="card-header h4 text-uppercase border-success bg-success">
                        <span class="float-left text-white">Izlabotais dokuments</span>
                    </div>
                    <div class="card-body">
                        <b>Dokumenta nosaukums:</b><br>
                        <p class="mt-1 mb-3">{{$edit->name}}</p>
                        <b>Apraksts:</b><br>
                        <p class="mt-1 mb-3">{{$edit->description}}</p>
                    </div>
                    <div class="card-footer">
                        <small>Laboja:</small>
                        <a href="{{url('/')}}/profile/{{$edit->editor->id}}"><b class="text-uppercase">{{$edit->editor->name}}</b></a><br>
                        <small>Labots:</small>
                        <b class="text-uppercase">{{$edit->formattedCreatedDate()}}</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="text-center" style="width: 100%;" id="accept-btn">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <a class="btn btn-success text-truncate text-white" href="{{url('/')}}/approved/edit/{{$edit->id}}">Apstiprināt</a>
                        <a class="btn btn-danger text-truncate text-white" href="{{url('/')}}/declined/edit/{{$edit->id}}">Noraidīt</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
</div>
@endsection

@section('style')
<style>
  /* Responsive
  */

  

  @media screen and (max-width: 1000px) {
    .col-md-4 {
        width: 700px;
        margin: 10px 110px;
    }
    .col-sm-4 {
        width: 400px;
        max-width: 200px;
        margin-right: 120px;
    }  
    #accept-btn { width: 250px;margin-left: 0px;}
    div.card {width: 200%;}
  } 

  @media screen and (max-width: 600px) {
    .col-sm-4 {
        width: 400px;
        max-width: 200px;
        margin-right: 0px;
        margin-left: 0px;
    }
   .card,.card-body {width: 100%;}
}
</style>
@endsection