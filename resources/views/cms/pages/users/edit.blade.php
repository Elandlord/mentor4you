@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> User {{$user->name }} <small>U bent deze user aan het aanpassen.</small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User: {{ $user->name }}</a></li>
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
                </div>
              </div>
            </div>

            <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
             <form method="POST" action="/cms/user/{{$user->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
              <table class="table table-responsive">
                <tbody>
                  <tr>
                     <td>
                          <label>Naam</label>
                          <input type='text' value="{{ $user->name }}" class='form-control' name='name'/>
                     </td>
                  </tr>
                  <tr>
                      <td>
                          <label>Email</label>
                          <input type='text' value="{{ $user->email }}" class='form-control' name='email'/>
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