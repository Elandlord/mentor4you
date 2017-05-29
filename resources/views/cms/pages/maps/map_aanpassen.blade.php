@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Map aanpassen<small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Map aanpassen</a></li>
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
              <form method="POST" action="/cms/maps/{{$currentMap->id}}" >
                {{csrf_field()}}
                {{ method_field('PUT') }}
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                         <td>
                              <label>Naam</label>
                              <input type='text' value="{{ $currentMap->name }}" class='form-control' name='name'/>
                         </td>
                      </tr>
<!--                        <tr>
                           <td>
                              <label>Bovenliggende map?</label>
                              <select name='parent' class='form-control'>
                                @foreach($maps as $index => $map) -->

                                  <!-- Check if parent_id == null, selected option 'GEEN' if true-->
<!--                                   @if($index == 0)
                                    @if($currentMap->parent_id == null)
                                      <option selected value='null'>Geen</option>
                                    @endif
                                  @endif -->

                                  <!-- Check if parent of currentMap is equal to foreach map index parent-->
                          <!--         @if($currentMap->parent_id == $map->id)
                                     <option selected value='{{ $map->id }}'>{{ $map->name }}</option>
                                  @else
                                    <option value='{{ $map->id }}'>{{ $map->name }}</option>
                                  @endif -->
<!--                                   
                                @endforeach
                              </select>
                           </td>
                        </tr> -->
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