<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMS - webootcore</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3945f9678f.js" crossorigin="anonymous"></script>
        <script src="/js/script.js" crossorigin="anonymous"></script>
    </head>
    <body class="main-content container-fluid">
        <div class="row justify-content-end">
            <div class="col-md-2 main-sidebar">
                <div class="conatiner-fluid">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="title-block text-center">
                                 <h1 class="sidebar-main-title">AMS</h1>
                            </div>
                            <div class="main-control p-left-20">
                                <label class="sidebar-title">Main</label>
                                <ul class="sidebar-nav p-0">
                                    <li><a href="/"><i class="fa-solid fa-house"></i></i>Dashboard</a></li>
                                    <li><a href="/employee"><i class="fa-regular fa-user"></i>Employees</a></li>
                                </ul>
                            </div>
                            <div class="management p-left-20">
                            <label class="sidebar-title">Management</label>
                                <ul class="sidebar-nav p-0">
                                    <li><a href="/shift"><i class="fa-regular fa-clock"></i>Schedule</a></li>
                                    <li><a href="/attendace-logs"><i class="fa-solid fa-table-list"></i>Attendance Logs</a></li>
                                    <li><a href="/payroll"><i class="fa-solid fa-receipt"></i>Payroll</a></li>
                                </ul>
                            </div>
                            <div class="tools p-left-20">
                            <label class="sidebar-title">Tools</label>
                                <ul class="sidebar-nav p-0">
                                    <li><a href="#"><i class="fa-solid fa-fingerprint"></i>Biometric Device</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 main-page-content p-0">
                <div class="container-fluid main-header-top">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end align-items-center">
                            <label class="user-name">Admin</label><span class="user-profile"><i class="fa-solid fa-circle-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                   @yield('main-content')
                </div>
            </div> 
        </div>

    <!-- jQuery Datatable js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->    
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.table2excel.min.js"></script>
    <script>
      //Data Table
      $(document).ready( function () {
          $('.table').DataTable();
      } );
    </script>
    </body>
</html>