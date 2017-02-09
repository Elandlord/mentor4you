@extends('cms.master')

@section('title')
    Mentor toevoegen    
@stop

@section('content')
    <h1>Mentor toevoegen </h1>
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
                                            <form method='POST' action="URL::to('/mentors/store')">
                                                
                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                <label>Voornaam</label>
                                                                <input type='text' class='form-control' name='first_name'/>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Achternaam</label>
                                                                <input type='text' class='form-control' name='last_name'/>
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Beschrijving</label>
                                                                <textarea class='form-control' name='description'></textarea>
                                                           </td>

                                                        </tr>
                                                        <tr>
                                                           <td> 
                                                                <label>Geboortedatum</label>
                                                                <input type='date' name='date-of-birth' class='form-control' />
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
