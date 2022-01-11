<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://hyvikk.com/wp-content/uploads/2018/06/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Arpit | Home</title>
  </head>
  <body>
    <?php include "header.php"; ?>
    <?php include "auth.php"; ?>

    <div class="container-fluid main">
        <div class="row">
            <div class="title-head">
                    <h1>Users List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 offset-md-2">
                <div class="download"><a href="demo.php"><button class="btn btn-warning">Download List</button></a></div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FULL NAME</th>
                            <th>E-MAIL</th>
                            <th>GENDER</th>
                            <th>CITY</th>
                            <th>REGISTER DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($con, $sql);

                            while($data = mysqli_fetch_array($result)){
                            
                            $dob = $data['dob'];
                            $date = date("d-m-Y", strtotime($dob));
                            $number = $data['list_number'];
                            $skills = $data['skills'];
                            $skill = (explode(',',$skills));
                            $count = count($skill); 
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['gender']; ?></td>
                            <td><?php echo $data['city']; ?></td>
                            <td><?php echo $data['created_at']; ?></td>
                            <td>
                                <!-- <a href="update.php?id=<?php echo $data['id']; ?>"><button class="btn btn-sm btn-primary">Edit</button></a> &nbsp;  -->
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $data['id']; ?>" data-type="update" id="getUser">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </button>
                                &nbsp;
                                <button data-id="<?php echo $data['id']; ?>" id="delete" class="btn btn-sm btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button> &nbsp; 
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $data['id']; ?>" data-type="profile" id="getUser">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                                    </svg>
                                </button> &nbsp;
                                <a href="download.php?number=<?php echo $number; ?>"><button class="btn btn-sm btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                    </svg>
                                </button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>FULL NAME</th>
                            <th>E-MAIL</th>
                            <th>GENDER</th>
                            <th>CITY</th>
                            <th>REGISTER DATE</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="well profile">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="modal-loader" style="display: none; text-align: center;">
                            <!-- ajax loader -->
                                <img src="ajax-loader.gif">
                            </div>
                                                
                            <!-- mysql data will be load here -->                          
                            <div id="dynamic-content"></div>
                        </div>             
                    </div>            
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <?php include "footer.php"; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

            $(document).on('click', '#getUser', function(e){
  
                e.preventDefault();
                var uid = $(this).data('id'); // get id of clicked row
                var atype = $(this).data('type'); // get id of clicked row

                $('#dynamic-content').html(''); // leave this div blank
                $('#modal-loader').show();      // load ajax loader on button click
                $.ajax({
                    url: 'userprofile.php',
                    type: 'GET',
                    data: 'id='+uid+'&type='+atype,
                    dataType: 'html'
                })
                .done(function(data){
                    console.log(data); 
                    $('#dynamic-content').html(''); // blank before load.
                    $('#dynamic-content').html(data); // load here
                    $('#modal-loader').hide(); // hide loader  
                })
                .fail(function(){
                    $('#dynamic-content').html('Something went wrong, Please try again...');
                    $('#modal-loader').hide();
                });
            });

            $(document.body).on('click', '#form', function(e){
                // Set your validation settings and initialize the validate plugin on the form.
                $(this).validate({
                    rules:{
                        name:{
                            required: true,
                        },
                        email:{
                            required: true,
                            email: true
                        },
                        mobile:{
                            required: true,
                            number: true
                        },
                        date:{
                            required: true
                        },
                        city:{
                            required: true
                        },
                        skills:{
                            required: true
                        }
                    },
                    messages:{
                        name: 'Please enter name',
                        email:{
                            required: 'Please enter your email',
                            email: 'Please enter valid email'
                        },
                        mobile:{
                            required: 'Please enter your mobile number',
                            number: 'Please enter valid number'
                        } ,
                        date: 'Please enter your date of birth',
                        city: 'Please select your city',
                        skills: 'Please select your skills'
                    }
                }); 
            });
            $(document).on('click', '#form', function(e){
                if (jQuery("#form").valid()) {
                    jQuery.ajax({
                        type: "POST",
                        url: "updateajax.php",
                        data: $(form).serialize(),
                        dataType: "json",
                        encode: true,
                    }).done(function (data) {
                    console.log(data);
                    });
                } else {
                    return false;
                }
            });
            $(document).on('click','#delete',function(){
                var element = $(this);
                var tr = $(this).closest('tr');  // **add this
                var id = element.data("id");
                var info = 'id=' + id;
                if(confirm("Are you sure you want to delete this Record?")){
                    $.ajax({
                        type: "GET",
                        url: "deleteajax.php",
                        data: info,
                        success: function(data){ 
                            if (data == "YES") {
                                tr.fadeOut(1000, function(){ // **add this
                                    $(this).remove();
                                });
                            } else {
                                alert("can't delete the row")
                            }
                        } 
                    });
                }
                return false;
            });
        });
     </script>
    </body>
</html>