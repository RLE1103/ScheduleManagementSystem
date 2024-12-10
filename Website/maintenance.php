<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Schedule Management System</a>
                <?php if (isset($_SESSION['use'])): ?>
                    <div class="d-flex align-items-center">
                        <p class="mb-0 mr-3 text-white "style="padding: 0 5px;"><?php echo $_SESSION['use']; ?></p>
                        <a href="logout.php" class="btn btn-outline-light">Logout</a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="btn btn-outline-light">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </div>
    <div class="container-fluid content-padding"> <!-- Sidebar -->
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white Sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 min-vh-100 ">
                    <ul class="nav nav-pills flex-column ms-1">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="class.php">Class</a></li>
                        <li class="nav-item"><a class="nav-link" href="schedule.php">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link active" href="maintenance.php">Maintenance</a></li>
                        <li class="nav-item"><a class="nav-link" href="user.php">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col lg-10"> <!-- Content -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2 class="text-center">Maintenance</h2>
                    </div>
                    <!-- Enroll User Form -->
                    <div class="col-md-6 mb-4">
                        <form action="dbprocess.php" method="POST" class="border p-4 rounded shadow-sm">
                            <h4 class="mb-3">Enroll User</h4>
                            <div class="mb-3">
                                <label for="user" class="form-label">User:</label>
                                <input type="text" id="user" name="user" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject:</label>
                                <select class="form-select form-select-sm" id="subject" name="subject" required>
                                    <option value="1">Mathematics</option>
                                    <option value="2">Science</option>
                                    <option value="3">English</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="enrolluser">Enroll User</button>
                        </form>
                    </div>
                    <!-- Assign Subject Form -->
                    <div class="col-md-6 mb-4">
                        <form action="dbprocess.php" method="POST" class="border p-4 rounded shadow-sm">
                            <h4 class="mb-3">Assign Subject</h4>
                            <div class="mb-3">
                                <label for="professor" class="form-label">Professor:</label>
                                <select class="form-select form-select-sm" id="professor" name="professor" required>
                                    <option value="1">Sir Lim</option>
                                    <option value="2">Sir Cacao</option>
                                    <option value="3">Sir Kevin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject:</label>
                                <select class="form-select form-select-sm" id="subject2" name="subject2" required>
                                    <option value="1">Mathematics</option>
                                    <option value="2">Science</option>
                                    <option value="3">English</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="assignsub">Assign Subject</button>
                        </form>
                    </div>
                    <!-- Assign Role Form -->
                    <div class="col-md-6 mb-4">
                        <form action="dbprocess.php" method="POST" class="border p-4 rounded shadow-sm">
                            <h4 class="mb-3">Assign Role</h4>
                            <div class="mb-3">
                                <label for="user" class="form-label">User:</label>
                                <input type="text" id="user2" name="user2" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role:</label>
                                <select class="form-select form-select-sm" id="role" name="role" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Student</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="assignrole">Assign Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer fixed-bottom flex-shrink-0 py-1 bg-dark text-white-50">
        <div class="container text-center">
            <span class="lead text-black-50">
                <small>Copyright &copy; Your Website</small>
            </span>
        </div>
    </footer>
</body>
</html>