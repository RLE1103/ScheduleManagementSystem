<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
            <div class="container-fluid"> <!-- Use container-fluid for full width -->
                <a class="navbar-brand" href="#">Schedule Management System</a>
                <a href="login.php" class="btn btn-outline-light">Logout</a>
            </div>
        </nav>
    </div>
    <div class="container-fluid content-padding"> <!-- Sidebar -->
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white Sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 min-vh-100 ">
                    <ul class="nav nav-pills flex-column ms-1">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Maintenance</a></li>
                        <li class="nav-item"><a class="nav-link active" href="user.php">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12"> <!-- Content -->
                <div class="row">
                    <div class="col-12">
                        <h3>Dashboard</h3>
                        <hr>
                        <h5>User Table</h5>
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-bordered" id="testtable" class="display">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Last name</th>
                                        <th>First name</th>
                                        <th>Middle name</th>
                                        <th>Birthday</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Database connection
                                    include('config.php');

                                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
                                        $id = $_POST['id'];
                                        $delete_sql = "DELETE FROM users WHERE id='$id'";
                                        if (mysqli_query($conn, $delete_sql)) {
                                            echo "<div class='alert alert-success'>Record removed successfully!</div>";
                                        } else {
                                            echo "<div class='alert alert-danger'>Error removing record: " . mysqli_error($conn) . "</div>";
                                        }
                                    }

                                    $sql = "SELECT id, username, email, password, lastname, firstname, middlename, birthday, address, mobile, lastlogin, datecreated FROM users";
                                    $result = $conn->query($sql);

                                    if ($result && $result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['username']}</td>
                                                    <td>{$row['email']}</td>
                                                    <td>{$row['password']}</td>
                                                    <td>{$row['lastname']}</td>
                                                    <td>{$row['firstname']}</td>
                                                    <td>{$row['middlename']}</td>
                                                    <td>{$row['birthday']}</td>
                                                    <td>{$row['address']}</td>
                                                    <td>{$row['mobile']}</td>
                                                    <td>
                                                        <form method='POST' action=''>
                                                            <input type='hidden' name='id' value='{$row['id']}'>
                                                            <button type='submit' name='remove' class='btn btn-danger'>Remove</button>
                                                        </form>
                                                    </td>
                                                </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='12' class='text-center'>No records found</td></tr>";
                                    }

                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                Add User
            </button>
        </div>
    </div>
    <footer class="footer fixed-bottom flex-shrink-0 py-1 bg-dark text-white-50">
        <div class="container text-center">
            <span class="lead text-black-50">
                <small>Copyright &copy; Your Website</small>
            </span>
        </div>
    </footer>
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="add_user.php"> <!-- Specify your action URL here -->
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input id="user" type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input id="middlename" type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-cake"></i></span>
                            <input id="birthday" type="date" class="form-control" name="birthday" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-house"></i></span>
                            <input id="address" type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input id="mobile" type="number" class="form-control" name="mobile" placeholder="Mobile Number" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<Script>
$(document).ready(function() {
    $('#testtable').DataTable();
});
</script>