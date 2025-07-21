<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyStream</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">StudyStream</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="student.php">
                        <span class="icon">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Student Management</span>
                    </a>
                </li>

                <li>
                    <a href="classes.php">
                        <span class="icon">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Classes Management</span>
                    </a>
                </li>

                <li>
                    <a href="faculty.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Faculty Management</span>
                    </a>
                </li>

                <li>
                    <a href="subject.php">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Subject Management</span>
                    </a>
                </li>

                <li>
                    <a href="timetable.php">
                        <span class="icon">
                            <ion-icon name="time-outline"></ion-icon>
                        </span>
                        <span class="title">TimeTable Management</span>
                    </a>
                </li>

                <li>
                    <a href="invoices.php">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Invoices</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>


            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentInvoices">
                    <div class="cardHeader">
                        <h2>Subjects</h2>
                        <a href="#" class="btn">View All</a>
                        <a href="#" class="btn">Add Subject</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Course</td>
                                <td>Course-Id</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>English</td>
                                <td>eng-9th-8a01</td>
                                <td>
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn">Delete</a>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= Faculty ================ -->
                <div class="newStudents">
                    <div class="cardHeader">
                        <h2>New Students</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>