
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
                    <a href="index.php">
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
                    <a href="faculty.php">
                        <span class="icon">
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">faculty Management</span>
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

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>


            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentInvoices">
                    <div class="cardHeader">
                        <h2>Enroll Faculty</h2>
                    </div>

                    <form action="submitFaculty.php" method="POST" class="from">
                        <div class="form-groups">
                            <table>
                                <tr>
                                    <td><label for="faculty_name">Faculty's Name:</label></td>
                                    <td colspan="3"><input type="text" id="faculty_name" name="faculty_name"
                                            placeholder="Enter faculty's name"></td>
                                            

                                             

                                    <td><label for="sex">Sex:</label></td>
                                    <td class="radio-container">
                                        <label for="sex_m">M</label>
                                        <input type="radio" id="sex_m" name="sex" value="M">
                                        <label for="sex_f">F</label>
                                        <input type="radio" id="sex_f" name="sex" value="F">
                                    </td>
                                </tr>
                                <tr>
                                <td><label for="faculty_rollno">Faculty's Roll No:</label></td>
                                    <td colspan="3"><input type="text" id="faculty_rollno" name="faculty_rollno"
                                            placeholder="Enter faculty's roll no"></td>
                                </tr>
                                <tr>
                                    <td><label for="birthdate">Birthdate:</label></td>
                                    <td><input type="text" id="birthdate" name="birthdate" placeholder="MM/DD/YYYY">
                                    
                                </tr>
                                <tr>
                                    <td><label for="home_address">faculty's Home Address:</label></td>
                                    <td colspan="5"><input type="text" id="home_address" name="home_address"
                                            placeholder="Enter home address"></td>
                                </tr>
                                <tr>
                                    <td><label for="home_phone">Home Phone:</label></td>
                                    <td colspan="5"><input type="text" id="home_phone" name="home_phone"
                                            placeholder="Enter home phone"></td>
                                </tr>
                                <tr>
                                    <td><label for="father_name">Father's Name:</label></td>
                                    <td colspan="5"><input type="text" id="father_name" name="father_name"
                                            placeholder="Enter Father's Name"></td>
                                </tr>
                                <tr>
                                    <td><label for="parent1_occupation">Occupation:</label></td>
                                    <td><input type="text" id="father_occupation" name="father_occupation"
                                            placeholder="Enter occupation"></td>
                                   
                                    <td><label for="father_cell_phone">Cell Phone:</label></td>
                                    <td><input type="text" id="father_cell_phone" name="father_cell_phone"
                                            placeholder="Enter cell phone"></td>
                                </tr>
                                
                                <tr>
                                    <td><label for="father_email">Email:</label></td>
                                    <td colspan="5"><input type="email" id="father_email" name="father_email"
                                            placeholder="Enter email"></td>
                                </tr>
                                <tr>
                                    <td><label for="father_address">Address (if different from faculty):</label></td>
                                    <td colspan="5"><input type="text" id="father_address" name="father_address"
                                            placeholder="Enter address"></td>
                                </tr>
                                <tr>
                                    <td><label for="mother_name">Mother's Name:</label></td>
                                    <td colspan="5"><input type="text" id="mother_name" name="mother_name"
                                            placeholder="Enter Mother's Name"></td>
                                </tr>
                                <tr>
                                    <td><label for="mother_occupation">Occupation:</label></td>
                                    <td><input type="text" id="mother_occupation" name="mother_occupation"
                                            placeholder="Enter occupation"></td>
                                    
                                    <td><label for="mother_cell_phone">Cell Phone:</label></td>
                                    <td><input type="text" id="mother_cell_phone" name="mother_cell_phone"
                                            placeholder="Enter cell phone"></td>
                                </tr>
                                
                                <tr>
                                    <td><label for="mother_email">Email:</label></td>
                                    <td colspan="5"><input type="email" id="mother_email" name="mother_email"
                                            placeholder="Enter email"></td>
                                </tr>
                                <tr>
                                    <td><label for="mother_address">Address (if different from faculty):</label></td>
                                    <td colspan="5"><input type="text" id="mother_address" name="mother_address"
                                            placeholder="Enter address"></td>
                                </tr>
                                <tr>
                                    <td><label for="status">faculty Status:</label></td>
                                    <td colspan="5" class="radio-container">
                                        <input type="radio" id="divorced" name="divorced" value="Divorced">
                                        <label for="divorced">Divorced</label>

                                        <input type="radio" id="married" name="married" value="married">
                                        <label for="married">Married</label>

                                        <input type="radio" id="unmarried" name="unmarried" value="unmarried">
                                        <label for="unmarried">Un Married</label>

                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="emergency_contact1">Emergency Contact (Other than parents):</label>
                                    </td>
                                    <td colspan="2"><input type="text" id="emergency_contact1" name="emergency_contact1"
                                            placeholder="Enter contact name"></td>
                                    <td><label for="emergency_contact1_phone">Phone #:</label></td>
                                    <td colspan="2"><input type="text" id="emergency_contact1_phone"
                                            name="emergency_contact1_phone" placeholder="Enter phone number"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2"><input type="text" id="emergency_contact2" name="emergency_contact2"
                                            placeholder="Enter contact name"></td>
                                    <td><label for="emergency_contact2_phone">Phone #:</label></td>
                                    <td colspan="2"><input type="text" id="emergency_contact2_phone"
                                            name="emergency_contact2_phone" placeholder="Enter phone number"></td>
                                </tr>
                               
                                
                            </table>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button type="submit">Enroll</button>
                        </div>
                    </form>
                   
                </div>

                <!-- ================= Faculty ================ -->

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