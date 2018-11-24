<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <!-- css -->

       <link rel="stylesheet" href="{{asset("public/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("public/css/style.css")}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <div class="add-membar">
                      
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                          Add Customer
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">new membar</h5>
                            </div>
                              <div class="modal-body">
                                   {!! Form::open(['url' => 'customer/save', 'method' => 'post']) !!}
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" placeholder="your first name" name="FirstName">

                                      <div class="text-danger">{{ $errors->has("FirstName")? $errors->first("FirstName"):"" }}</div> 
                                    </div>
                                     <div class="form-group"> 
                                        <input type="text" class="form-control" placeholder="your Last name" name="LastName">
                                      <div class="text-danger">{{ $errors->has("LastName") ? $errors->first("LastName"):"" }}</div> 

                                    </div>
                                     <div class="form-group"> 
                                        <input type="email" class="form-control" placeholder="your email name" name="Email">
                                      
                                       <div class="text-danger">{{ $errors->has("Email")? $errors->first("Email"):"" }}</div> 



                                    </div>
                                     <div class="form-group"> 
                                        <input type="text" class="form-control" placeholder="your first name" name="Phone">
                                       <div class="text-danger">{{ $errors->has("Phone")? $errors->first("Phone"):"" }}</div> 


                                    </div>
                                     {!! Form::submit("Save changes", ["class"=>"btn btn-primary"]) !!}

                                    {!! Form::close() !!}




                                </div>
                                <div class="modal-footer">
                                   <button class="btn btn-secondary" data-dismiss="modal"> Close</button>
                                 
                                </div>
                              
                          </div>
                        </div>
                      </div>
                   </div>
               </div>
            </div>



            <div class="row">
              <div class="com-md-12">
                   <a href="{{url("delete")}}" onclick="  return confirm('Are you want delete to data')" class="btn btn-danger"> All Delete</a>
                   <a href="{{url("excelImport")}}" class="btn btn-success">Import</a>
                  <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu" role="menu" id="export-menu">          
                        <li id="export_to_excel"><a href="{{url("export")}}"> Excel</a></li>
                        <li class="divider"></li>
                       <li id="other"><a href="">Other</a></li>
                    </div>
                  </div>
              </div>
            </div>
             <div class="row" >
                <div class="com-md-12">
                   <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($customers as $customer)

                          <tr>
                          
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->FirstName}}</td>
                            <td>{{$customer->LastName}}</td>
                            <td>{{$customer->Email}}</td>
                            <td>{{$customer->Phone}}</td>
                            <td> <a href="#" class="btn btn-danger"> delete</a> <a href="#" class="btn btn-primary"> Edit</a> </td> 
                         </tr>

                        @endforeach;

                        </tbody>

                      </table>
                    {{ $customers->fragment('?http://localhost/ExportToExcel')->links() }}

                           
                         
                    </div>
                </div>
            </div>
        </div>


      <script src="{{asset("public/js/jquery-3.3.1.js")}}"></script>
      <script src="{{asset("public/js/bootstrap.min.js")}}"></script>

    </body>
</html>
