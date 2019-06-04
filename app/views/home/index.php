<!doctype html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="/resrequest-assessment/public/css/bootstrap.min.css">     
        <link rel="stylesheet" href="public/css/styles.css">
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css">

    </head>
    <body>
        <!--Header-->
        <?php include '../app/views/includes/header.php'; ?>
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header bootstrap-admin-content-title">
                            </div>
                        </div>
                    </div>
                    <div class="row">        
                        <div class="col-md-12">
                            <div class="alert-message"></div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title"><strong>Reservations</strong>                                     
                                    </div>
                                </div>                
                                <div class="panel-body">
                                    <div><a class="btn btn-xs btn-primary pull-right" id="newBooking"><i class="fa fa-pencil"></i> New</a></div>
                                    <table id="session" class="table table-hover">
                                        <thead>
                                            <tr>                               
                                                <th>Name</th>                                
                                                <th>Surname</th>
                                                <th>Email</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>                        
                                        <tbody>                            
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>                          
                                        </tbody>                       
                                    </table>  
                                </div>            
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div id="bookModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="public/home/create" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title text-center">Create Reservation</h3>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>                                      
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label>Surname</label>                                                        
                                    <input type="text" class="form-control" name="surname">                                   
                                </div>
                                <div class="form-group">
                                    <label>Email</label>                                            
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Rooms</label>                                                            
                                    <select class="form-control" name="rooms">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                        <option value="3">6</option>
                                        <option value="1">7</option>
                                        <option value="2">8</option>
                                        <option value="3">9+</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Check In</label>
                                    <div class="input-group date">                                             
                                        <input id="check-in" class="form-control" name="check_in">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Check Out</label>
                                    <div class="input-group date">                                             
                                        <input id="check-out" class="form-control" name="check_out">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                    </div>
                                </div>      
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include '../app/views/includes/footer.php'; ?>
        <!--scripts-->
        <script src="public/js/jquery.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/moment.min.js"></script>
        <script src="public/js/jquery.dataTables.js"></script>
        <script src="public/js/Datatable.bootstrap.js"></script>
        <script src="public/js/bootstrap-datetimepicker.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#newBooking").click(function () {
                    $("#bookModal").modal();
                });
                $('#check-in').datetimepicker({format: 'YYYY-MM-DD HH:mm:ss'});
                $('#check-out').datetimepicker({format: 'YYYY-MM-DD HH:mm:ss'});
            });
        </script>
    </body>
</html>

