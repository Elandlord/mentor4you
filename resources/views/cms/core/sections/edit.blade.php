@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Sectie aanpassen<small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sectie aanpassen</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Overzicht</h3>

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
            <form method="POST" action="/cms/section/{{$section->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <table class="table table-hover">
                  <tbody>
                      <tr>
                         <td>
                            <label>Titel</label>
                            <input type='text' class='form-control' value="{{ $section->title }}" name='title'/>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            <label>Body</label>
                            <input type='text' class='form-control' value="{{ $section->body }}" name='body'/>
                         </td>
                      </tr>
                      <tr>
                        <td>
                        @include('partials.select', [
                          'name' => 'page_position',
                          'options' => $page_positions,
                          'selected' => $section->page_position
                        ])
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
        @if($photo != null)
              <image-display
                  id="{{$photo->id}}"
                  model_id="{{$photo->model_id}}"
                  type="{{$photo->type}}"
                  filename="{{$photo->filename}}">
              </image-display>

              @endif
              <image-uploader route="photo" model_id="{{$section->id}}" type="section" >
                  @if($section->page->name == 'homepage')
                    <cropper route="cropper" aspectheight="1" aspectwidth="1" > </cropper>
                  @endif
                  @if($section->page->name == 'slider')
                    <cropper route="cropper" aspectheight="4" aspectwidth="10" > </cropper>
                  @endif
                  <?php if($section->page->name != 'homepage' && $section->page->name != 'slider') {
                    echo '<cropper route="cropper" aspectheight="9" aspectwidth="16" > </cropper>';
                  } ?>

              </image-uploader>
        </div>
    </section>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop