<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>



    <div class="card text-center">
        <div class="card-header">
            All Users
        </div>
        <div class="card-body">


            <?php
            include '../control/config.php';

         

            // select or read data start
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);




            if ($result->num_rows > 0) {
                echo "<table class='table table-striped'>
    <tr> 
      <th>Id</th>  
      <th>Name</th> 
      <th>Email</th>  
      <th>Number</th>  
      <th>Role</th>  
      <th colspan='2'>Action</th>  

    </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo "<tr > 
        <td class='user_id' >" . $row["id"] . "</td> 
         <td>" . $row["name"] . "</td>
         <td>" . $row["email"] . "</td>
          
          <td>" . $row["number"] . "</td>
          <td>" . $row["role"] . "</td>
        <td>Update </td>
       
        <td>
        <button type='button' class='btn btn-danger delete_btn' 
            data-toggle='modal' data-target='#Delete' >Delete
        </button>
    </td>

         </tr>";







                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            ?>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  action="../control/delete.php " method="POST">
                <div class="modal-body">
<input type="text" name="userid" id="dltid">
                Are you sure you want to delete this user?
               
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" name="delete_user"  class="btn btn-danger" data-dismiss="modal" >Ok</button>
                </div>
                </form>
            </div>
        </div>
    </div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>




<script>

$(document).ready(function () {
    $('.delete_btn').click(function (e) { 
        e.preventDefault();
        var user_id=$(this).closest('tr').find('.user_id').text();
       
        $('#dltid').val(user_id);
        $('#delete').modal('show');


    });
});


</script>






    


    







</body>

</html>