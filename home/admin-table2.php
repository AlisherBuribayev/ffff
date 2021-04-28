<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="stylesheet" href="dataTables.bootstrap4.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome.min.css">

    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        
body {
  min-height: 100vh;

  background-color: #FFE53B;
  background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);
}
    </style>
</head>
<body>
    


<div class="container py-5">
  
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>surname</th>
                  <th>date</th>
                  <th>arrived</th>
                  <th>left</th>
                  <th>status</th>
                </tr>
              </thead>
              <tbody id="kkk">
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $(function() {
  $(document).ready(function() {
    $('#example').DataTable();
  });
});

</script>

<script src="jquery.dataTables.min.js"></script>





<script>






    function loadtasks2(){
      $.ajax({
            url: "ll/action2.php",
            type: "POST",
            success:function(data){
                $("#kkk").html(data);
                
                
            }
        })


        
      };

      loadtasks2()
    </script>



</body>

</html>