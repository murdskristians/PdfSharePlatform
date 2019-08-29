@extends('layouts.app')

@section('content')
    <div class="wrapper row3">
            <main class="hoc container clear"> 
                <div class="content"> 
                    <div class="row border-bottom pb-5">
                        <div class="col-md-1 filler"></div>
                        <div class="col-md-3 border-right pr-5 filler">
                            <div class="thumbnail">
                                <img src="{{url('storage/pic/'.$admin->image)}}" alt="Profile Picture" class="border">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-11">
                                    <h1><strong>{{$admin->name}}</strong></h1>
                                    @if (isset($admin->bio))
                                        <p class="pt-2">{{$admin->bio}}</p>
                                    @else
                                        <p class="text-muted pt-2">Bio nav izveidots..</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <h4><strong>Vārds, uzvārds</strong></h4>
                                    <h5>{{$admin->name}}</h5>
                                </div>
                                <div class="col-md-5">
                                    <h4><strong>E-pasts</strong></h4>
                                    <h5>{{$admin->email}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-md-3 border-right mr-4 pr-3">
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/admin">Admina Panelis</a></h4>
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/directory/create">Pievienot direktoriju</a></h4>
                            <h4 class="mt-3" style="text-align: right;"><a href="{{url('/')}}/profile">Apskatīt visus lietotājus</a></h4>

                            @if ($reported != 0)
                                <h4 class="mt-3" style="text-align: right;" >
                                    <a href="{{url('/')}}/reported" title="Reported Comments: {{$reported}}">
                                        <img class="mb-1" src="{{url('storage/defaults/report.png')}}" style="width:15px; height:15px;">
                                        <span style="color:#DA2222"><b>{{$reported}}</b></span>
                                        Reportētie komentāri
                                    </a>
                                </h4>
                            @else
                                <h4 class="mt-3" style="text-align: right;" title="No reported comments"><a href="{{url('/')}}/reported">Reportētie komentāri</a></h4>
                            @endif

                        </div>
                        <div class="col-md-8 border-bottom pb-3">
                            <div class="scrollable table-responsive">
                            <h4><strong>Visi Lietotāji</strong></h4>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Vārds</th>
                                    <th>E-pasts</th>
                                    <th>Grupa</th>
                                    <th>Pievienojies</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->userRole->role_name}}</td>
                                            <td>{{$user->formattedCreatedDate()}}</td>
                                            <td><a href="{{url('/')}}/profile/{{$user->id}}" class="btn btn-default" role="button">Skatīt</a></td>
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