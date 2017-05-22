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

    <section class="content">
      <div class="row">



        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Inhoud</h3>


              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

            <div class='col-lg-12' style='margin-top: 10px; margin-bottom: 10px;'>
              <a href='/cms/maps' class='btn btn-success'>Ga terug</a>
            </div>
            <!-- /.box-header -->
            <!-- Check if there are children in currentMap, if there are no children, no div-->
            <div class="box-body no-padding">
              @if(!$childrenMaps->isEmpty())
                <div class='row' style='margin-left: 30px;'>
                  <h4>Mappen</h4>
                    @foreach($childrenMaps as $map)
                        <div class="col-lg-3 text-center">

                          <a href='/cms/maps/{{ $map->id }}/edit?'>
                            <img src='/images/cms/directory.png' class='img-responsive'/>
                          </a>

                          <p>{{ $map->name }}</p>

                        </div>
                    @endforeach
              </div>
              @endif

              <!-- Check if there are files in directory, if there are no files, don't show div-->
              @if(!$files->isEmpty())
                <div class='row' style='margin-top: 50px; margin-bottom: 25px; margin-left: 30px;'>
                  <h4>Bestanden</h4>
                  @foreach($files as $file)
                      <div class="col-lg-2 text-center">

                        <a href='urltofile'>
                          <img src='/images/cms/{{ $file->getExtension() }}.png' class='img-responsive'/>
                        </a>

                        <p>{{ $file->filename }}</p>

                      </div>
                  @endforeach
                </div>
              @endif
            </div>
            <!-- /.box-body -->
        </div>

        <div id="app">

          <file-uploader>

          </file-uploader>

        </div>
          <!-- /.box -->
      </div>

    </div>
  </section>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop