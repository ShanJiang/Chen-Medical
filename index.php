<?php
include_once('db.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Chen Medical</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="Theme Template for Bootstrap_files/theme.css" rel="stylesheet">
    <script src="Theme Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    </script>
		<style type="text/css">
	thead input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

	</style>

  </head>
  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Chenmed</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Chen Medical</h1>
        <p>Patient Information</p>
        <p>Shan Jiang</p>
      </div>

       <div class="page-header">
        <h2><span class="label label-primary">ChenMed</span></h2>

      </div>

  <div>
  <h4> Toggle column: </h4>
  
  
  <a class="toggle-vis" data-column="0" href="#">First Name </a>&nbsp
  <a class="toggle-vis" data-column="1" href="#">Last Name</a> &nbsp
  <a class="toggle-vis" data-column="2" href="#">Email</a> &nbsp
  <a class="toggle-vis" data-column="3" href="#">PhoneNO</a> &nbsp
  <a class="toggle-vis" data-column="4" href="#">DOB</a> &nbsp
  <a class="toggle-vis" data-column="5" href="#">Description</a> &nbsp
  <a class="toggle-vis" data-column="6" href="#">Comments</a>
  
  <br><br>

  
</div>

<?php
include_once('showcomments.php');
include_once('addcomments.php');
?>
      <table id="datatables" class="display">

        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>PhoneNO</th>
            <th>DOB</th>
            <th>Description</th>
            <th>Comments</th>             
          </tr>
        </thead>

        <tbody>
           <?php
          while($row = mysqli_fetch_assoc($commentResult)) {
            ?>
            <tr>
              
                <td><?php echo $row["first_name"]?></td>
                <td><?php echo $row["last_name"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["phoneNO"]?></td>
                <td><?php echo $row["DOB"]?></td>
                <td><?php echo $row["Description"]?></td>
                <td><?php echo $row["comments"]?></td>

            </tr>
      <?php
      }
      ?>
        </tbody>
    </table>
  <?php
  include_once('showtable.php');
  ?>
    <!--Add Comments-->
    <div class="panel panel-info">
    <div class="panel-heading"><b>Add Comments:</b></div>
    <div class="panel-body">
    <form action="index.php" method="POST">
  
    <b>PatientID: </b></td><td><input type="text" name="PatientID_Input" /><br><br>
    <b>Comments: </b>
    <textarea name="comments"></textarea><br><br>
    <input type="submit" class= "btn btn-info"  name="submitComments" value="Add Comment"/>
    <input type="submit" class= "btn btn-info"  name="showComments" value="Show Comment"/><br><br>
    <input type="submit" class= "btn btn-info"  name="showTable" value="Show Table"/>
  
</form>
</div>

</div>

  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="Theme Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="http://www.datatables.net/release-datatables/media/js/jquery.js"></script>

    <script type="text/javascript" src="http://www.datatables.net/release-datatables/media/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="http://www.datatables.net/release-datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>

    <script type="text/javascript" src="http://www.datatables.net/release-datatables/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script> 
    <style type="text/css">
    @import "https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css";
    </style>
    
    <script type="text/javascript">

    $(document).ready(function() {
       
      var table = $('#datatables').DataTable();

      $('a.toggle-vis').on('click', function (e) {

          e.preventDefault();

          var column = table.column($(this).attr('data-column'));

          column.visible(!column.visible());
 });

      $('#datatables thead th').each(function(){

       var title = $('#datatables thead th').eq($(this).index()).text();
        $(this).html('<input type="text" placeholder=" ' +title+ '" />');

 });

      table.columns().eq(0).each(function(colIdx){
         $('input', table.column(colIdx).header()).on('keyup change', function(){
          table
              .column(colIdx)
              .search(this.value)
              .draw();
   });
 });





    });

    </script>

  </html>