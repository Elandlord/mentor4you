@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Map: {{$currentMap->name }} <small>Bestanden toevoegen</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php 

          $map = $currentMap;
          $maps = collect();

          while($map->hasParent()) {
            $maps->push($map->parent());

            if($map->hasParent()) {
              $map = $map->parent();
            }

          }

          $maps->reverse()->each(function($map) {
            echo "<li> <a href='/cms/maps/". $map->id ."/edit' >" . $map->name . " </li>";
          });

        ?>
        <li>{{ $currentMap->name  }}</li>
      </ol>
    </section>

    <section class="row space-inside-left-sm space-outside-up-sm">
      <div class='col-lg-12 space-inside-left-xs' style=''>
      <!-- if directory has no parent, show standard overview page -->
      @if(!$currentMap->hasParent())
       <a href='/cms/maps' 
        class='
            space-inside-sides-sm space-inside-xs 
            bg-main 
            text-color-light 
            shadow-xs
            inline-block
            '
       >Ga terug</a>
      @else
        <a href='/cms/maps/{{ $currentMap->parent()->id }}/edit?' 
          class='
            space-inside-sides-sm space-inside-xs 
            bg-main 
            text-color-light 
            shadow-xs
            inline-block
            '>Ga terug</a>


      @endif
      @if(Auth::user()->admin == 1)

          <form class="inline-block" action="/cms/maps/{{ $currentMap->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <button 
                class="
                  inline-block 
                  border-none outline-none
                  space-inside-sides-sm space-inside-xs
                  shadow-xs 
                  text-color-light
                  bg-secondary
                ">map verwijderen</button>
          </form>

      @endif
      </div>

      

    </section>

    @if(Auth::user()->admin == 1)
    <section class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-5 space-inside-sm">
            <form method="GET" action="/cms/childMap/create/{{ $currentMap->id }}">
              {{ csrf_field()}}
                <button style="border: none; background: none; " class="">
                  <i class="material-icons relative space-outside-right-sm" style="font-size: 50px; top: 25px;">folder</i>
                  <span class=" inline-block relative inline-block" style="top: 5px;">Een nieuwe map toevoegen</span>
                </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    @endif

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           


              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <!-- Check if there are children in currentMap, if there are no children, no div-->
            <div class="box-body">
              @if(!$childrenMaps->isEmpty())
                <div class='row ' >

                  <div class="col-lg-12 space-inside-left-sm">
                    <div class="row">

                    @foreach($childrenMaps as $map)
                        <div class="col-lg-1 text-center">

                          <a href='/cms/maps/{{ $map->id }}/edit?'>

                          <i class="material-icons relative space-outside-right-sm" style="font-size: 80px;">folder</i>
                          </a>

                          <p>{{ $map->name }}</p>

                        </div>
                    @endforeach
                    </div>
                  </div>
              </div>
              @endif



              <!-- Check if there are files in directory, if there are no files, don't show div-->
              @if(!$files->isEmpty())
                <div class='row' style='margin-top: 50px; margin-bottom: 25px; margin-left: 30px;'>
                  <h4>Bestanden</h4>
                  @foreach($files as $file)
                     <div class='row space-outside-md border-bottom border-accent space-inside-xs'>

                      <div class="col-lg-2 text-center relative" style="bottom: 10px;">
                        <a href='{{ $file->getUrl() }}'>
                          <img src='{{ $file->getType() }}' style='max-height:80px; max-width:80px;' class='img-responsive'/>
                        </a>
                      </div>

                      <div class='col-lg-5'>
                          <p class='space-outside-up-sm'>{{ str_limit($file->getFileName(), 40, $end = '...') }}</p>
                      </div>

                      <div class='col-lg-2'>
                        <a href='{{ $file->getUrl() }}' class='btn btn-success space-outside-up-sm' download>Downloaden</a>
                      </div>

                      <div class='col-lg-2'>

                        @if(Auth::user()->admin == 1)
                          <form method='POST' action='/file/delete'>
                            {{ csrf_field() }}
                                <input type='hidden' value='{{ $currentMap->id }}' name='map_id'/>
                                <input type='hidden' value='{{ $file->getFileName() }}' name='filename' />
                                <button class="btn btn-danger space-outside-up-sm"> Verwijderen </button>
                          </form>
                        @endif
                      </div>

                    </div>
                  @endforeach
                </div>
              @endif
            </div>
            <!-- /.box-body -->
        </div>

        @if(Auth::user()->admin == 1)
          <div id="app">
            <file-uploader route="map/upload/file" map_id="{{ $currentMap->id }}"></file-uploader>
          </div>
        @endif
          <!-- /.box -->
      </div>

    </div>
  </section>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop