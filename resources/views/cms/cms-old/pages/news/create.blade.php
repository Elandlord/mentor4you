@extends('cms.master')

@section('title')
    Nieuws toevoegen    
@stop

@section('content')
    <h1>Nieuws toevoegen </h1>
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
                                            {!! Form::open(['method' => 'POST', 'action' => 'NewsController@store' ]) !!}
                                                
                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('title', ' Titel ') !!} 
                                                                {!! Form::text('title', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('body', ' Typ hier het nieuwsbericht ') !!} 
                                                                {!! Form::textarea('body', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('author', ' Auteur ') !!} 
                                                                {!! Form::text('author', null, ['class' => 'form-control']); !!} 
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                {!! Form::label('publish_date', ' Publicatiedatum ') !!} 
                                                                {!! Form::date('publish_date', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                         <tr>
                                                           <td> 
                                                                {!! Form::label('occurence_date', ' Datum ') !!} 
                                                                {!! Form::date('occurence_date', null, ['class' => 'form-control']); !!}
                                                           </td>

                                                        </tr>
                                                        
                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="submit" value="opslaan" class="btn btn-primary" name="opslaan">   
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>
                                            {!! Form::close() !!}
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
