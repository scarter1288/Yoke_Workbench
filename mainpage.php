<!DOCTYPE html>
    <head>
        <!-- Bootstrap core CSS -->
        <link href="../bootstrap_project/css/bootstrap.css" rel="stylesheet">
        
        <!-- Sidebar CSS -->
        <link href="sidebar.css" rel="stylesheet">
        
        <!-- Custom project wide CSS -->
        <link href="custom.css" rel="stylesheet">
            
        <?php
        
        
        
        ?>
    </head>
    <body>
        <div class="navbar navbar-yoke-signin navbar-fixed-top " role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img class="navbar-image" src="pics/yokeworkbenchsmall.png" /></a>
                </div>
                <div class="navbar-collapse collapse">
                  <div class="navbar-right">
                    <a class="navbar-brand" href="#">Welcome admin!</a> 
                  </div>
                </div><!--/.navbar-collapse -->
              </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                    <li><a href="#">Edit Yoke Folk</a></li>
                    <li><a href="#">Add Yoke Folk</a></li>
                    <li><a href="#">View Yoke Folk</a> </li>
                    <li><a href="#">Edit School</a></li>
                    <li><a href="#">Add School</a></li>
                    <li class="active-sidbar"><a href="#">View School</a></li>
                    
                  </ul>
                  
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h2 class="sub-header">Schools</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>School</th>
                      <th>County</th>
                      <th>Yoke Folk</th>
                      <th>Yoke Kids</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#">Carter Middle</a></td>
                      <td><a href="#">Knox</a></td>
                      <td>4</td>
                      <td>22</td>
                    </tr>
                    <tr>
                      <td><a href="#">Bearden Middle</a></td>
                      <td><a href="#">Knox</a></td>
                      <td>3</td>
                      <td>19</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                </div>
            </div>
        </div>
        
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap_project/js/bootstrap.min.js"></script>
    </body>
</html>