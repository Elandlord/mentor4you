@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Pagina's <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pagina's</a></li>
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
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th></th>
                  <th></th>
                  <th>ID</th>
                  <th>Naam</th>
                  <th>Email</th>
                  <th>Admin/Maak admin</th>
                </tr>
                @foreach ($users as $object)
                  <tr>
                    <td>
                      @include('cms.core.partials.edit_button', [
                        'type' => 'user',
                        'id' => $object->id
                      ])
                    </td>
                    <!-- Verwijderen form -->
                    <td>
                      @include('cms.core.partials.delete_button', [
                        'type' => 'user',
                        'id' => $object->id
                      ])
                    </td>
                    <td>
                      {{ $object->id }}
                    </td>
                    <td>
                      {{ $object->name }}
                    </td>
                    <td>
                      {{ $object->email }}
                    </td>
                    @if($object->admin == 1)
                    <td>
                      <form method='POST' action=''>
                          <button class="btn btn-danger"> <i class="ion ion-minus-circled"> </i></button>
                      </form>
                    </td>
                    @else
                    <td>
                      <form method='POST' action=''>
                          <button style="padding-left:15px;padding-right:15px;" class="btn btn-warning"> <i class="ion ion-key"> </i></button>
                      </form>
                    </td>
                    @endif
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