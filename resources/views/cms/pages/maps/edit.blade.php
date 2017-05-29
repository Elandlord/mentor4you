@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Map: {{$currentMap->name }} <small>Bestanden toevoegen</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Map: {{ $currentMap->name }}</a></li>
      </ol>
    </section>

    <section class="row space-inside-left-sm space-outside-up-sm">
      <div class='col-lg-12 space-inside-left-xs' style='margin-top: 10px; margin-bottom: 10px;'>
      <!-- if directory has no parent, show standard overview page -->
      @if($currentMap->parent_id == null)
       <a href='/cms/maps' class='btn btn-success'>Ga terug</a>
      @else
        <a href='/cms/maps/{{ $currentMap->parent_id }}/edit?' class='btn btn-success'>Ga terug</a>
      @endif
      </div>
    </section>

    @if(Auth::user()->admin == 1)
    <section class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4 space-inside-sm">
            <form method="GET" action="/cms/childMap/create/{{ $currentMap->id }}">
              {{ csrf_field()}}
                <button style="border: none; background: none;" class="">
                  <img style="width: 90px;"
                        class="inline-block space-outside-left-sm space-outside-right-sm"
                   src='/images/cms/directory.png' class='img-responsive'/>
                  <span class=" inline-block relative" style="top: 5px;">Een nieuwe map toevoegen</span>
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

                  <div class="col-lg-12">
                    <h4>Mappen</h4>
                  </div>
                  <div class="col-lg-12 space-inside-left-sm">
                    <div class="row">

                    @foreach($childrenMaps as $map)
                        <div class="col-lg-1 text-center">

                          <a href='/cms/maps/{{ $map->id }}/edit?'>
                            <img src='/images/cms/directory.png' class='img-responsive'/>
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
                     <div class='row space-outside-md'>

                      <div class="col-lg-3 text-center">
                        <a href='{{ $file->getUrl() }}'>
                          <img src='{{ $file->getType() }}' style='max-height:150px; max-width:150px;' class='img-responsive'/>
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