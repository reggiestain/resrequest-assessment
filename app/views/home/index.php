<!doctype html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap-->
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css">  
        <link rel="stylesheet" href="../../public/css/jquery.dataTables.css">
        <link rel="stylesheet" href="../../public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../../public/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../public/css/bootstrap-admin-theme.css">
        <link rel="stylesheet" href="../../public/css/bootstrap-admin-theme-change-size.css">       
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
                                    <div><a class="btn btn-xs btn-success pull-right" id="add-prop"><i class="fa fa-pencil"></i> New</a></div>
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
        </div>
    <!--Footer-->
    <?php include '../app/views/includes/footer.php'; ?>
    <!--scripts-->
    <script src="../../public/js/jquery.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <script src="../../public/js/jquery.dataTables.js"></script>
    <script src="../../public/js/Datatable.bootstrap.js"></script>
</body>
</html>

