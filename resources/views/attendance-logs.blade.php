@extends('layouts.layout')

@section('main-content')
<div class="attendance-section container-fluid">
    <div class="page-title-box">
        <h2 class="page-title text-left">Attendance Logs</h2>
        <div class="row align-items-center">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></i></li>
                        <li class="breadcrumb-item"><a href="#">Attendance Logs</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    
                </div>
        </div>
    </div>
    <div row>
        <div class="col-md-12 table-container">
        <table id="page-table" class="table table-hover table-bordered">
            <thead>
            <tr>                
                <th>Employee ID</th>
                <th>Name</th>
                <th>Shift</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr data-value="001">
                <td>Emp 001</td>
                <td>Dave</td>
                <td>Morning 8:00am - 5:00pm</td>
                <td>7:50am</td>
                <td>5:00pm</td>
                <td>01/05/2023</td>
            </tr>
            <tr data-value="002">
                <td>Emp 002</td>
                <td>availpops</td>
                <td>Morning 8:00am - 5:00pm</td>
                <td>8:20am</td>
                <td>5:00pm</td>
                <td>01/05/2023</td>
            </tr>
            
            </tbody>
        </table>
        </div>
    </div>
  
</div>
@endsection
