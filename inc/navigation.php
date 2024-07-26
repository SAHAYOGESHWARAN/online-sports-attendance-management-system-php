<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset some default styles */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        /* Header styles */
        .header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .header img {
            max-width: 100px;
            height: auto;
        }

        /* Navigation styles */
        .navbar {
            background-color: #343a40;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link.active {
            color: #f00; /* Adjust the color for the active link */
        }

     
        /* Add more styles as needed for your specific content */
    </style>
    <title>Your Web Page Title</title>
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="aaclogo.png" alt="aac logo">
        </div>
        <h1>ARUL ANANDAR COLLEGE<br>
            SPORTS ATTENDANCE MANAGEMNET SYSTEM
        </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'galary' ? 'active' : '' ?>" href="galry.php">gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'admin upload' ? 'active' : '' ?>" href="admin_sports_upload.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'sportslist' ? 'active' : '' ?>" href="select sport.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'sports incharge' ? 'active' : '' ?>" href="profile.php">Sports Incharge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'class_list' ? 'active' : '' ?>" href="./?page=class_list">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'student_list' ? 'active' : '' ?>" href="./?page=student_list">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'attendance' ? 'active' : '' ?>" href="./?page=attendance">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($page)) && $page == 'attendance_report' ? 'active' : '' ?>" href="./?page=attendance_report">Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Your main content goes here -->
        
        
    </div>

</body>
</html>
