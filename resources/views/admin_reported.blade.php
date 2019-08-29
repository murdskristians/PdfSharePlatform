@extends('layouts.app')

@section('content')
    <div class="wrapper row3">
            @if (\Session::has('success'))
                <div class="alert alert-success center h5">
                    <p><b>{!! \Session::get('success') !!}</b></p>
                </div>
            @elseif (\Session::has('danger'))
                <div class="alert alert-danger center h5">
                    <p><b>{!! \Session::get('danger') !!}</b></p>
                </div>                        
            @endif
            <main class="hoc container clear"> 
                <div class="content"> 
                    <div class="row border-bottom pb-5">
                        <div class="col-md-1 filler"></div>
                        <div class="col-md-3 border-right pr-5 filler">
                            <div class="thumbnail">
                                <img src="{{url('storage/pic/'.$user->image)}}" alt="Profile Picture" id="profile-pic" class="border">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-11">
                                    <h1><strong>{{$user->name}}</strong></h1>
                                    @if (isset($user->bio))
                                        <p>{{$user->bio}}</p>
                                    @endif                                
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <h4><strong>Vārds, uzvārds</strong></h4>
                                    <h5>{{$user->name}}</h5>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>E-pasts</strong></h4>
                                    <h5>{{$user->email}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-md-3 border-right mr-3 pr-4">
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/admin">Admina Panelis</a></h4>
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/directory/create">Pievienot direktoriju</a></h4>
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/profile">Apskatīt visus lietotājus</a></h4>
                            
                            @if ($reported != 0)
                                <h4 class="mt-3 mb-5" style="text-align: right;" >
                                    <a href="{{url('/')}}/reported" title="Reported Comments: {{$reported}}">
                                        <img class="mb-1" src="{{url('storage/defaults/report.png')}}" style="width:15px; height:15px;">
                                        <span style="color:#DA2222"><b>{{$reported}}</b></span>
                                        Reportētie komentāri
                                    </a>
                                </h4>
                            @else
                                <h4 class="mt-3 mb-5" style="text-align: right;" title="No reported comments"><a href="{{url('/')}}/reported">Reportētie komentāri</a></h4>
                            @endif

                        </div>
                        <div class="col-md-8 pb-3">
                            <div class="scrollable table-responsive">
                            <h4><strong>Reportētie komentāri</strong></h4>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Autors</th>
                                    <th>Dokuments nosaukums</th>
                                    <th>Teksts</th>
                                    <th>Pievienots</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td>{{$comment->user->name}}</td>
                                            <td>{{$comment->document->name}}</td>
                                            <td>{{$comment->text}}</td>
                                            <td>{{$comment->formattedCreatedDate()}}</td>
                                            <td><a href="{{url('/')}}/approve/comment/{{$comment->id}}" class="btn btn-sm btn-outline-primary" role="button">Ir OK</a></td>
                                            <td><a href="{{url('/')}}/destroy/comment/{{$comment->id}}" class="btn btn-sm btn-outline-danger" role="button">Dzēst</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="col-md-3 border-right mr-4">
                        </div>
                    </div>
                </div>
            <div class="clear"></div>
        </main>
    </div>
@endsection

@section('style')
<style>
  /* Responsive
  */
  @media screen and (max-width: 900px) {
    .filler { display: none;}
  } 
</style>
@endsection