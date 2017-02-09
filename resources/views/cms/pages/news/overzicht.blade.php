@extends('cms.master')

@section('title')
    Nieuws
@stop

@section('content')
    <h1> Nieuws overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">        
                                            <table class="table table-hover">
                                                <tr> 
                                                {!! $data['news']->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Titel</th>
                                                        <th>Tekst</th>
                                                        <th>Auteur</th>
                                                        <th>Publicatiedatum</th>
                                                        <th>Datum</th>
                                                        <th>Aanpassen</th>
                                                        <th>Verwijderen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['news'] as $object)
                                                        <tr>
                                                            <td>{{ $object->id }}</td>
                                                            <td>{{ $object->title }}</td>
                                                            <td>{{ $object->body }}</td>
                                                            <td>{{ $object->author }}</td>
                                                            <td>{{ $object->publish_date }}</td>
                                                            <td>{{ $object->occurence_date }}</td> 
                                                            <td>
                                                                <form method='get' action="URL::to('/news/{object->id}')">
                                                                    <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                                </form>
                                                            </td>
                                                            <!-- Verwijderen form -->
                                                            <td>
                                                                <form method='post' action="URL::to('/candidate/{object->id}')">
                                                                    <input type='submit' class='btn btn-danger' value='verwijderen' />
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                



        </div>
    </div>
@stop
