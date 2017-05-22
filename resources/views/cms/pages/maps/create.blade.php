@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Mappen <small>toevoegen</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mappen</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mappen</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                </div>
              </div>
            </div>

            <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
              <form method="POST" action="{{ URL::to('cms/maps') }}" >
                {{csrf_field()}}
                <table class="table table-responsive">
                  <tbody>
                    <tr>
                        <tr>
                           <td>
                                <label>Naam</label>
                                <input type='text' class='form-control' name='name'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <label>Bovenliggende map?</label>
                              <select name='parent' class='form-control'>
                                  <option value='null'>Geen</option>
                                @foreach($maps as $map)
                                  <option value='{{ $map->id }}'>{{ $map->name }}</option>
                                @endforeach
                              </select>
                           </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group">
                              <button class="btn btn-success" type="submit" >Toevoegen</button>
                            </div>
                          </td>
                        </tr>  
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