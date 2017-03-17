@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Mentoroverzicht <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mentoroverzicht</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gegevens</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
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
                      <th>Voornaam</th>
                      <th>Quote</th>
                      <th>Beschrijving</th>
                      <th>Geboortedatum</th>
                    </tr>
                  </thead>
                <tbody>
                @foreach ($data['mentors'] as $object)
                  <tr>
                      <!-- edit form -->
                      <td>
                        @include('cms.core.partials.edit_button', [
                          'type' => 'mentor',
                          'id' => $object->id
                        ])
                      </td>
                      <!-- Verwijderen form -->
                      <td>
                        @include('cms.core.partials.delete_button', [
                          'type' => 'mentor',
                          'id' => $object->id
                        ])
                      </td>

                      <td>{{ $object->id }}</td>
                      <td>{{ $object->first_name }}</td>
                      <td>{{ $object->last_name }}</td>
                      <td>{{ $object->description }}</td>
                      <td>{{ $object->date_of_birth }}</td> 

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