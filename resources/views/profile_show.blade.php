@extends('layouts.app')

@section('content')
    <div class="wrapper row3">
            <main class="hoc container clear"> 
                <div class="content"> 
                    <div class="row border-bottom pb-5">
                        <div class="col-md-1 filler"></div>
                        <div class="col-md-3 border-right pr-5 filler">
                            <div class="thumbnail" style="width:100%; height:100%;">
                                <img src="{{url('storage/pic/'.$user->image)}}" alt="Profile Picture" class="border">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-11">
                                    {{-- Ja lietotājs ir atvēris savu profilu, parādas "Labot profilu poga". --}}
                                    @if (Auth::user()->id == $user->id)
                                        <a class="btn btn-outline-primary float-right" href="{{url('/')}}/profile/{{$user->id}}/edit">Labot Profilu</a>
                                    @endif

                                    <h1><strong>{{$user->name}}</strong></h1>

                                    {{-- Ja ir izveidots lietotāja bio, tad parāda to. Pretējā gadījumā "nav bio" ziņa. --}}
                                    @if (isset($user->bio))
                                        <p class="pt-2">{{$user->bio}}</p>
                                    @else
                                        <p class="text-muted pt-2">Bio nav izveidots..</p>
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

                        <div class="col-md-10 offset-md-2 border-bottom pb-3">
                            <div class="scrollable table-responsive">
                            <h4><strong>Pievienotie faili</strong></h4>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nosaukums</th>
                                    <th>Direktorija</th>
                                    <th>Fails</th>
                                    <th>Izveidots</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($files as $file)
                                        <tr>
                                            <td>{{$file->name}}</td>
                                            <td>{{$file->fileDirectory->name}}</td>
                                            <td>{{$file->path}}</td>
                                            <td>{{$file->formattedCreatedDate()}}</td>
                                            <td><a href="{{url('/')}}/file/{{$file->id}}" class="btn btn-default" role="button">Skatīt</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>

                        <div class="col-md-10 offset-md-2 border-bottom pb-3">
                                <div class="scrollable table-responsive">
                                <h4><strong>Izlabotie faili</strong></h4>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nosaukums</th>
                                        <th>Direktorija</th>
                                        <th>Fails</th>
                                        <th>Izveidots</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($edits as $file)
                                            <tr>
                                                <td>{{$file->name}}</td>
                                                <td>{{$file->fileDirectory->name}}</td>
                                                <td>{{$file->path}}</td>
                                                <td>{{$file->formattedCreatedDate()}}</td>
                                                <td><a href="{{url('/')}}/file/{{$file->id}}" class="btn btn-default" role="button">Skatīt</a></td>
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