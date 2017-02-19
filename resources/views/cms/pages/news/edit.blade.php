@extends('cms.master')

@section('content')
<div >
    <section class="content-header">
      <h1> Nieuws aanpassen<small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Nieuws aanpassen</a></li>
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
              <form method="POST" action="/cms/news/{{$news->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                  <table class="table table-hover">
                    <tbody>
                        <tr>
                           <td>
                                <label>Titel</label>
                                <input type='text' class='form-control' value="{{ $news->title }}" name='title'/>
                           </td>
                        </tr>
                        <tr>
                           <td>
                                <label>Nieuwsbericht</label>
                                <textarea class='form-control' name='body'>{{ $news->body }}</textarea>
                           </td>

                        </tr>
                        <tr>
                           <td>
                                <label>Auteur</label>
                                <input type='text' class='form-control' value="{{ $news->author }}" name='author'/>
                           </td>

                        </tr>
                        <tr>
                           <td>
                                <label>Publicatiedatum</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type='text' name='publish_date' value="{{ $news->publish_date }}" class='form-control datepicker' />
                                </div>
                           </td>

                        </tr>
                         <tr>
                           <td>
                                <label>Datum</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type='text' name='occurence_date' value="{{ $news->occurence_date }}" class='form-control datepicker' />
                                </div>
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
          <div id="app">
              @if($photo != null)
              <image-display
                  id="{{$photo->id}}"
                  model_id="{{$photo->model_id}}"
                  type="{{$photo->type}}"
                  filename="{{$photo->filename}}">
              </image-display>

              @endif
              <image-uploader route="photo" model_id="{{$news->id}}" type="news" >
                  <cropper route="cropper" aspectheight="1" aspectwidth="1" > </cropper>
              </image-uploader>
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