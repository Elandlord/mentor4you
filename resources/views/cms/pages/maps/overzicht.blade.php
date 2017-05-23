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

    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Overzicht</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

             <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>#<span class='ion-arrow-down-b table-head'></span></th>
                      <th>Naam</th>
                    </tr>
                  </thead>
                <tbody>
                @foreach ($maps as $object)
                  <tr>
                      <!-- edit form -->
                      <td>
                        @include('cms.core.partials.edit_button', [
                          'type' => 'mappen',
                          'id' => $object->id
                        ])
                      </td>
                      <!-- Verwijderen form -->
                      <td>
                        @include('cms.core.partials.delete_button', [
                          'type' => 'mappen',
                          'id' => $object->id
                        ])
                      </td>

                      <td>{{ $object->id }}</td>
                      <td>{{ $object->name }}</td>

                    </tr>
                  @endforeach                                        
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->

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