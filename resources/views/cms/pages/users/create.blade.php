@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> User <small>voeg gebruiker toe</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User toevoegen</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gegevens invoeren</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <form method="POST" action="{{ URL::to('cms/user') }}" >
              {{csrf_field()}}
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>
                      
                        <tr>
                           <td>
                                <label>Naam</label>
                                <input type='text' class='form-control' name='name'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Email</label>
                                <input type='text' class='form-control' name='email'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Wachtwoord</label>
                                <input type='password' class='form-control' name='password'/>
                           </td>
                        </tr>
                        <tr>
                          <td>
                            <button class="btn btn-success" type="submit" >Toevoegen</button>
                          </td>
                        </tr>
                      </form>
                    </td>
                  </tr>
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