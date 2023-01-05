@extends('layouts.layout')

@section('main-content')
<div class="employees-section container-fluid">
    <div class="page-title-box">
        <h2 class="page-title text-left">Employees</h2>
        <div class="row align-items-center">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></i></li>
                        <li class="breadcrumb-item"><a href="#">Employees List</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <div class="float-right d-none d-md-block">
                        <a href="#" class="btn btn-primary" type="button"  data-toggle="modal" data-target="#addemployee"><i class="fa-regular fa-plus"></i>Add</a>
                    </div>
                </div>
        </div>

            <!-- Modal -->
            @include('layouts.add-employee-modal')
    </div>
    <div row>
        <div class="col-md-12 table-container">
        <table id="page-table" class="table table-hover table-bordered">
            <thead>
            <tr>                
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Mobile #</th>
                <th>Email</th>
                <th class="w-05">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr data-value="001">
                <td class="user-date-display first-td"><span class="m-content">EMP 1123</span>
                    <section style="width:100%;" class="innetable-section">
                    @include('layouts.employee-innertable')
                    </section>
                </td>
                <td class="user-date-display">Dave</td>
                <td class="user-date-display">Availpops</td>
                <td class="user-date-display">Any Position</td>
                <td class="user-date-display">09124576983</td>
                <td class="user-date-display">admin@gmail.com</td>
                <td class="table-action-column user-date-display">
                    <a href="#"  class="btn btn-info table-action-btn" id="view-btn-id" data-value="001">View</a>    
                    <a href="#"  class="btn btn-danger table-action-btn"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            <tr data-value="002">
                <td class="user-date-display first-td"><span class="m-content">EMP 1123</span>
                    <section style="width:100%;" class="innetable-section">
                    @include('layouts.employee-innertable')
                    </section>
                </td>
                <td class="user-date-display">Dave</td>
                <td class="user-date-display">Availpops</td>
                <td class="user-date-display">Any Position</td>
                <td class="user-date-display">09124576983</td>
                <td class="user-date-display">admin@gmail.com</td>
                <td class="table-action-column user-date-display">
                    <a href="#"  class="btn btn-info table-action-btn" id="view-btn-id" data-value="002">View</a>    
                    <a href="#"  class="btn btn-danger table-action-btn"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
  
</div>
@include('layouts.table-scripts')
@endsection
