<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RIAFY TEST</title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Bootstrap Css -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Script -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
 
<!-- Bootstrap Css -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body> 
<div class="container">
  <div class="row">
     <h2>Search Here</h2>
     <input type="text" name="search" id="search" placeholder="search here...." class="form-control">  
  </div>
  <div id="responsecontainer" align="center"></div>
</div>
<script type="text/javascript">
  $(function() {
     $( "#search" ).autocomplete({
       source: 'ajax-db-search.php',
       select: function (event, ui) {
            AutoCompleteSelectHandler(event, ui)
        }
     });

  });
  function AutoCompleteSelectHandler(event, ui)
{               
    var selectedObj = ui.item;              
   
    var name=selectedObj.value;
     //alert(name);
    $.ajax(
      {
        type:"POST",
          url:"service_file/get_details.php",
          data:{name:name},
          dataType:"json",
          timeout:100000,

          success: function(response){                    
            $("#responsecontainer").html(response); 
            alert(response);
        }
    });

}
</script>
</body>
</html>