@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Teammember aanpassen<small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teammember aanpassen</a></li>
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
              <form method="POST" action="/cms/teammember/{{$data['teammember']->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                         <td>
                              <label>Voornaam</label>
                              <input type='text' class='form-control' value="{{ $data['teammember']->first_name }}" name='first_name'/>
                         </td>
                      </tr>
                      <tr>
                         <td>
                              <label>Achternaam</label>
                              <input type='text' class='form-control' value="{{ $data['teammember']->last_name }}"  name='last_name'/>
                         </td>

                      </tr>
                      <tr>
                         <td> 
                              <label>Beschrijving</label>
                              <textarea class='form-control' name='description'>{{ $data['teammember']->description }}</textarea>
                         </td>

                      </tr>
                       <tr>
                         <td> 
                              <label>Functie</label>
                              <input type='text' class='form-control' value="{{ $data['teammember']->role }}"  name='role'/>
                         </td>

                      </tr>

                      <tr>
                        <td>

                            <div class="form-group">
                              <button class="btn btn-success" type="submit" >Aanpassen</button>
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