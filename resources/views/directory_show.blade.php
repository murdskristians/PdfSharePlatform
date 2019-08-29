@extends('layouts.app')

@section ('content')
  <main class="container "> 
    <div class="sidebar one_quarter first"> 
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

    <div class="three_quarter"> 
      <header class="heading text-uppercase">
        @if (isset($current_dir))
          @for ($index = 1; $index <= 4; $index++)
            @foreach ($directories[$index-1] as $directory)
              @if ($directory->id == $current_dir)
                {{$directory->name}}
              @endif
            @endforeach
          @endfor
        @else
          Pēdējie pievienotie dokumenti
        @endif
      </header>
      <div>
          <?php $i=1; ?>
            @foreach ($documents as $document)

            @if ($i==1)
              <?php $i++ ?>
              <li class="one_third first">
            @else 
              <li class="one_third">
              <?php 
                if ($i==3) {$i=1;}
                else $i++;
              ?>
            @endif
                <div class="card bg-light mb-3">
                  <div class="card-header text-center p-auto">{{ $document['name'] }}</div>
                  <div class="card-body">
                    <p class="bold text-truncate text-center">{{$document->fileDirectory->name }}</p>
                    <p class="card-text text-truncate text-center" style="height: 30%">{{ $document['description'] }}</p>
                  </div>
                  <div class="card-footer">
                      <a class="btn btn-outline-primary w-100" href="{{url('/')}}/file/{{$document['id']}}/" class="card-link">Skatīt</a>
                  </div>
                </div>
              </li>
            @endforeach
      </div>
    </div>
    <nav class="pagination">
    </nav>
  </main>
@endsection

@section('style')
<style>
  /* Cards
  */
  .card {
    height: 16rem;
    margin: auto 3px;
    padding: auto;
    max-height: 18rem; 
    min-width: 11rem;
  }
  .card-header {height: 35%;}

  /* Responsive
  */
  @media screen and (max-width: 900px) {
    .card {width: 100%;}
  } 
</style>
@endsection