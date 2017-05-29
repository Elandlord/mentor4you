@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Mappen <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mappen</a></li>
      </ol>

    </section>

    @if(Auth::user()->admin == 1)
    <section class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4 space-inside-sm">
            <form method="GET" action="/cms/maps/create">
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
              <h3 class="box-title">Mappenstructuur</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding space">
            @foreach($maps as $map)
                <div class="col-lg-1 text-center">
                  <a href='maps/{{ $map->id }}/edit?'>
                    <img src='/images/cms/directory.png' class='img-responsive'/>
                  </a>
                  <p>{{ $map->name }}</p>
                </div>
            @endforeach

            </div>

            @if(Auth::user()->admin == 1)
            <!-- /.box-body -->
            <div class="box-body no-padding space-outside-up-sm">
              <div class="col-lg-12">
                <h4>Dit is de hoofdmap, er kunnen hier geen bestanden geupload worden.</h4>
              </div>
            </div>
            @endif

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