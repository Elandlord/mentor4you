@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Aanmeldingen overzicht <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Aanmeldingen overzicht</a></li>
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
                      <th>#<span class='ion-arrow-down-b table-head'></span></th>
                      <th>Voornaam</th>
                      <th>Achternaam</th>
                      <th>Telefoonnummer</th>
                      <th>Emailadres</th>
                      <th>Geboortedatum</th>
                      <th>Bericht</th>
                      <th>Aangemeld als</th>
                      <th>Gemeente</th>
                    </tr>
                  </thead>
                <tbody>
                 @foreach ($data['candidates'] as $candidate)
                      <tr>
                          <td>{{ $candidate->id }}</td>
                          <td>{{ $candidate->first_name }}</td>
                          <td>{{ $candidate->last_name }}</td>
                          <td>{{ $candidate->telephone_number }}</td>
                          <td>{{ $candidate->email_address }}</td>
                          <td>{{ $candidate->date_of_birth }}</td>
                          <td>{{ $candidate->message }}</td>
                          <td>{{ $candidate->choices }}</td>     
                          <td>{{ $candidate->municipality }}</td>   
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