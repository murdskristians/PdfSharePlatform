@extends ('layouts.app')


@section('content')
<div class="wrapper row3">
    <main class="hoc container clear">
      <div class="row">
        <div class="col-md-3 sidebar"> 
          <h6>Izvēlies direktoriju:</h6>
          <nav class="sdb_holder">
            <ul>
                <li><a href="{{url('/')}}/directory">Pēdējie pievienotie faili</a></li>
              @for ($index = 1; $index <= 4; $index++)
                <li data-toggle="collapse" data-target="#collapse-menu{{$index}}"><a>{{$index}}. kurss</a> 
                    <ul id="collapse-menu{{$index}}" class="collapse">
                        @foreach ($directories[$index-1] as $directory)
                            <li><a href="{{url('/')}}/directory/{{$directory->id}}">{{$directory->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
              @endfor
            </ul>
          </nav>
        </div>
        <div class="col-md-9">
          <div id="show-file" class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header h3 text-uppercase">
                  <span class="float-left">{{$file->name}}</span>
                </div>
                <div class="card-body">
                  <div class="mt-3">
                    <b>Apraksts:</b><br>
                    <p class="mt-2">{{$file->description}}</p>
                  </div>
                </div>
                <div class="card-footer bg-transparent">
                  <small>Pievienoja:</small>
                    <a href="{{url('/')}}/profile/{{$file->author->id}}"><b class="text-uppercase">{{$file->author->name}}</b></a><br>
                  <small>Pievienots:</small>
                    <b class="text-uppercase">{{$file->formattedCreatedDate()}}</b><br>

                  @if (isset($file->editor))
                    <small >Laboja:</small>
                      <a href="{{url('/')}}/profile/{{$file->editor->id}}"><b class="text-uppercase">{{$file->author->name}}</b></a><br>
                    <small>Labots:</small>
                      <b class="text-uppercase">{{$file->formattedCreatedDate()}}</b>
                  @endif
                </div>
              </div>
              <div class="card border-0">
                  <a class="float-right btn btn-outline-success mt-1" href="{{url('/')}}/file/download/{{$file['path']}}">Lejupielādēt</a>
                  <a class="float-right btn btn-outline-warning mt-1" href="{{url('/')}}/file/open/{{$file['path']}}" target="_blank">Atvērt jaunā logā</a>
                  <a class="float-right btn btn-outline-primary mt-1" href="{{url('/')}}/document/{{$file['id']}}/edit">Labot</a>
                  @if (Auth::user()->id == 1)
                    {{-- <a class="float-right btn btn-outline-danger mt-1" href="{{url('/')}}/file/{{$file['id']}}/edit">Dzēst</a> --}}
                    {{ Form::open(array('url' => 'file/' . $file->id, 'class' => '')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Dzēst', array('class' => 'float-right btn btn-outline-danger mt-1', 'style' => 'width:100%')) }}
                    {{ Form::close() }}
                  @endif
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
        </div>
      </div>
      <span class="hidden">{{$reportURL = url('storage/defaults/report.png')}}</span>

      <div id="comments" class="mt-4">
        <h2>Komentāri</h2>
        @if ($comments->count() != 0)
        <ul>
          @foreach ($comments as $comment)
          <li>
            <article>
              <header>
                <address>
                    {!! Form::model($comment, ['method' => 'PATCH', 'route' => ['comment.update', $comment->id]]) !!}                
                    <div>
                        {{ method_field('PATCH') }}
                        {!! Form::hidden('user_id', $comment->user->id) !!}
                        {!! Form::hidden('document_id', $comment->document_id) !!}
                        {!! Form::hidden('comment', $comment->text) !!}
                        {!! Form::hidden('reported', '1') !!}
                        {!! Form::button('<img src="'.$reportURL.'" style="width:20px; height:20px;">', ['type' => 'submit', 'class' => 'btn btn-outline-danger float-right', 'title' => 'Report'] )  !!}
                    </div>
                    {!! Form::close() !!}
                <a href="{{url('/')}}/profile/{{$comment->user->id}}">{{$comment->user->name}}</a>
                </address>
              </header>
              <div class="comcont">
                <p>{{$comment->text}}</p>
              </div>
              <footer class="pb-2">
                <span class="float-right ">Pievienots {{$comment->formattedCreatedDate()}}</span>
              </footer>
            </article>
          </li>
          @endforeach
        </ul>
        @else
        <p class="text-muted pb-4">Netika atrasts neviens komentārs..</p>
        @endif
        <h2>Pievienot komentāru</h2>
        {!! Form::open(['action' => 'CommentController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

          {!! Form::hidden('user_id', Auth::user()->id) !!}
          {!! Form::hidden('document_id', $file->id) !!}

          <div class="block clear">
            
            {!! Form::textArea('comment', '', ['class' => 'form-control '.($errors->has('comment') ? ' is-invalid' : '' ), 'placeholder' => 'Uzraksti savu komentāru...']) !!}   
            @if ($errors->has('comment'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('comment') }}</strong>
                </span>
            @endif   
          </div>

          <div class="mb-4">
              {!! Form::submit('Pievienot', ['class' => 'btn btn-primary']) !!}
          </div>

        {!! Form::close() !!}
      </div>
    </div>
  </main>
</div>
@endsection