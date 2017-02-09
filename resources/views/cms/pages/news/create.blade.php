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
                                            <form method='POST' action="URL::to('/news/store')">
                                                
                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                <label>Titel</label>
                                                                <input type='text' class='form-control' name='title'/>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Nieuwsbericht</label>
                                                                <textarea class='form-control' name='body'></textarea>
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Auteur</label>
                                                                <input type='text' class='form-control' name='author'/>
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Publicatiedatum</label>
                                                                <input type='date' name='publish_date' class='form-control' />
                                                           </td>

                                                        </tr>
                                                         <tr>
                                                           <td> 
                                                                <label>Datum</label>
                                                                <input type='date' name='occurence_date' class='form-control' />
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
                                            </form>
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
