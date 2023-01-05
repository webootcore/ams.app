@extends('layouts.layout')

@section('main-content')
<div class="payroll-section container-fluid">
    <div class="page-title-box">
        <h2 class="page-title text-left">Payroll</h2>
        <div class="row align-items-center">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></i></li>
                        <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <div class="float-right d-none d-md-block">
                        <a href="#" class="btn btn-primary" type="button"  data-toggle="modal" data-target="#payslip"><i class="fa-regular fa-plus"></i>Add</a>
                    </div>
                </div>
        </div>

            <!-- Modal -->
            @include('layouts.create-payslip')
    </div>
    <div row>
        <div class="col-md-12 table-container">
        <table id="page-table" class="table table-hover table-bordered">
            <thead>
            <tr>                
                <th>Employee ID</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Salary</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr data-value="001">
                <td class="user-date-display first-td"><span class="m-content">EMP 001</span>
                    <section style="width:100%;" class="innetable-section">
                    @include('layouts.employee-innertable')
                    </section>
                </td>
                <td class="user-date-display">Dave</td>
                <td class="user-date-display">11/01/2022</td>
                <td class="user-date-display">11/15/2022</td>
                <td class="user-date-display">5500</td>
                <td class="user-date-display">Not Payed</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
  
</div>
@include('layouts.table-scripts')
@endsection
