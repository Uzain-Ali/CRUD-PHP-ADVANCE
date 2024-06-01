<!-- <?php
    include_once 'database/connect.php';

    $dbobj = new Database();
    var_dump($dbobj)
?> -->

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD ADVANCE</title>
</head>
<body>
    <h1 class="bg-dark text-light text-center py-2">PHP CRUD</h1>

    <div class="container">
    
    <!-- Modal -->
        <div class="modal fade" id="userModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add or Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span>&times;</span>
                </button>
            </div>
            <form action="" id="addForm" method="POST">
            <div class="modal-body">
                <!-- Name -->
                <div class="form-group">
                    <label for="">Name:</label>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fas fa-user-alt text-light"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" required= "required" id="name" name="name">
                        </div>
                </div>

                <!-- DOB -->
                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="Enter Your Name" autocomplete="off" required= "required" id="dob" name="dob">
                        </div>
                </div>

                <!-- Detail Text -->
                <div class="form-group">
                    <label for="">Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-circle-info text-light"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="More Details" autocomplete="off" required="required" id="username" name="details"></textarea>
                    </div>
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="">Gender</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-venus-mars text-light"></i></span>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="m" required="required" >
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="f" required="required">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>

                <!-- Section -->
                <div class="form-group">
                    <label for="">Section</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-users-line text-light"></i></span>
                        </div>
                        <select class="form-control" required="required" id="section">
                            <option value="" disabled selected>Select</option>
                            <option value="option1">A</option>
                            <option value="option2">B</option>
                            <option value="option3">C</option>
                        </select>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-dark">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
            </form>
            </div>
        </div>
        </div>

    <!-- Search Bar and Add User Button -->
    <div class="row mb-3">
        <div class="col-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark"><i class="fa-solid fa-magnifying-glass text-light"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search User">
            </div>
        </div>
        <div class="col-2">
            <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#userModals">Add User</button>
        </div>
    </div>

        <!-- Table -->
        <table class="table" id="userTable">
                <thead class="bg-dark text-light">
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Details</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Section</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Uzain</td>
                    <td>24/01/2002</td>
                    <td>Hello, im a student</td>
                    <td>Male</td>
                    <td>A</td>
                    <td>
                        <span>Edit</span>
                        <span>Profile</span>
                        <span>Delete</span>
                    </td>
                    </tr>

                </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation example" id=pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>







    

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>