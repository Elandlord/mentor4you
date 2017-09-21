@extends('cms.master')

@section('content')
<div>
    <section class="content-header">
      <h1> Partner toevoegen<small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Partner toevoegen</a></li>
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
            <div class="box-body no-padding">
              <form method="POST" action="{{ URL::to('cms/partner') }}" >
                {{csrf_field()}}
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                         <td>
                              <label>Naam</label>
                              <input type='text' class='form-control' name='name'/>
                         </td>
                      </tr>
                      <tr>
                         <td> 
                              <label>Beschrijving</label>
                              <textarea class='form-control' name='description'></textarea>
                         </td>

                      </tr>
                      <tr>
                         <td> 
                              <label>Startdatum</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type='text' name='date_started' class='form-control datepicker' />
                              </div>
                         </td>

                      </tr>

                      <tr>
                        <td>

                            <div class="form-group">
                              <button class="btn btn-success" type="submit" >Toevoegen</button>
                            </div>

                        </td>
                       
                      </tr>
                    </tbody>
                  </table>
                </form>
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