<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Customer Request  </title>

    <style>
        h1 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding-top: 1em;
        }

        .mycontainer {
            width: 90%;
            margin: 1.5rem auto;
            min-height: 60vh;
        }

        .mycontainer table {
            margin: 1.5rem auto;
        }
    </style>

</head>

<body>
    <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        
            <!--<a class="navbar-brand" href="#">Online Leave Application</a>
            <button class="btn-default" onclick="window.location.href='leavehist.php';">Leave History</button> </div> -->
            <!-- <nav class="nav navbar-right">
            <a class="nav-link active" href="#">Active</a>
            
            </nav>

            <button id="logout" onclick="window.location.href='logout.php';">Logout</button> </div> -->

            <ul class="nav justify-content-end">
            <!--<li class="nav-item">
                <a class="nav-link" href="list_emp.php" style="color:white;">View Employees <span class="badge badge-pill" style="background-color:#2196f3;">5</span></a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="leave_history.php" style="color:white;">View Leave History</a>
            </li>
            <!--<li class="nav-item">
            <button id="logout" onclick="window.location.href='logout.php';">Logout</button> </div>
            </li>
            </ul>-->

    </nav>

    <h1>Available Slots</h1>

    <div class="mycontainer">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <th>Req Id</th>
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <!-- <th>Action</th> -->
                </thead>
                <tbody>
                        <!-- loading all leave applications from database -->
                                                  <tr>
                                                    <td>1</td>
                                                    <td>Monday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/07/27</td>-->
                                                    <td>Ward-1, Ward-2, Ward-3</td>
                                                  </tr>
                                                  <tr>
                                                    <td>2</td>
                                                    <td>Tuesday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/07/27</td>-->
                                                    <td>Ward-4, Ward-5, Ward-6</td>
                                                  </tr>
                                                  <tr>
                                                    <td>3</td>
                                                    <td>Wednesday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/08/04</td>-->
                                                    <td>Ward-7, Ward-8, Ward-9</td>
                                                  </tr>
                                                  <tr>
                                                    <td>4</td>
                                                    <td>Thursday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/26 <b>--</b> 2021/07/28</td>-->
                                                    <td>Ward-10, Ward-11, Ward-12</td>
                                                  </tr> 
                                                  <tr>
                                                    <td>5</td>
                                                    <td>Friday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/08/04</td>-->
                                                    <td>Ward-13, Ward-14, Ward-15</td>
                                                </tr>
                                                  <tr>
                                                    <td>6</td>
                                                    <td>Saturday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/08/04</td>-->
                                                    <td>Ward-16, Ward-17, Ward-19</td>
                                                  </tr>
                                                  <tr>
                                                    <td>7</td>
                                                    <td>Sunday</td>
                                                    <td>9:00 - 10:00 am</td>
                                                    <!--<td>2021/07/25 <b>--</b> 2021/08/04</td>-->
                                                    <td>Ward-20, Ward-21, Ward-22</td>
                                                </tr>
                    
                </tbody>
            </table>
    </div>

    <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
    </footer>
</body>

</html>

