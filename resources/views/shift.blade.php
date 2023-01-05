@extends('layouts.layout')

@section('main-content')
<div class="Shift-section container-fluid">
    <div class="page-title-box">
        <h2 class="page-title text-left">Schedule</h2>
        <div class="row align-items-center">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></i></li>
                        <li class="breadcrumb-item"><a href="#">Shift</a></li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <div class="float-right d-none d-md-block">
                        <a href="#" class="btn btn-primary" type="button"  data-toggle="modal" data-target="#addshift"><i class="fa-regular fa-plus"></i>Add</a>
                    </div>  
                </div>
        </div>

            <!-- Modal -->
            @include('layouts.add-shift')
    </div>
    <div row>
        <div class="col-md-12 table-container">
        <table id="page-table" class="table table-hover table-bordered">
            <thead>
            <tr>                
                <th>ID</th>
                <th>Shift</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th class="w-05">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr data-value="001">
                <td class="user-date-display first-td"><span class="m-content">01</span>
                    <section style="width:100%;" class="innetable-section">
                    @include('layouts.shift-innertable')
                    </section>
                </td>
                <td class="user-date-display">Morning</td>
                <td class="user-date-display">8:0am</td>
                <td class="user-date-display">5:00pm</td>
                <td class="user-date-display">
                    <a href="#"  class="btn btn-info table-action-btn" id="view-btn-id" data-value="001"><i class="fa-regular fa-pen-to-square"></i>Edit</a>    
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
