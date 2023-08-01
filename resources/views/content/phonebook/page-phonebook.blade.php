@extends('layouts/contentLayoutMaster')

@section('title', 'Scrap Data')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Send Bulk Messages</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12 form-floating">
                                    <input type="text" id="first-name1" class="form-control" name="fname"
                                        placeholder="Name">
                                    <label for="first-name1">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12 form-floating">
                                    <input type="text" id="first-name2" class="form-control" name="fname"
                                        placeholder="Phonebook Name">
                                    <label for="first-name2">Phonebook Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12 form-floating">
                                    <input type="text" id="first-name3" class="form-control" name="fname"
                                        placeholder="Contact Number">
                                    <label for="first-name3">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12">
                                    <div><select class="select2 form-select" aria-hidden="true">
                                            <option value="" data-select2-id="60">Select Phonebook</option>
                                            <option value="+62" data-select2-id="61">+62</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
<h2 class="modal-title"><b>Phonebook
        <button type="button" class="btn btn-outline-primary waves-effect" data-bs-toggle="modal"
            data-bs-target="#default" style="float: right;">
            New Contact Number
        </button></h2>

<section class="ping-page">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">

                    <div class="avatar bg-light-primary p-50">
                        <span class="avatar-content">
                            <i data-feather="message-square" class="font-medium-4"></i>
                        </span>
                    </div>
                    <div>
                        <h3 class="fw-bolder mb-75">21,459</h3>
                        <span>Contact Limits</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="avatar bg-light-success p-50">
                        <span class="avatar-content">
                            <i data-feather="volume-2" class="font-medium-4"></i>
                        </span>
                    </div>
                    <div>
                        <h3 class="fw-bolder mb-75">19,860</h3>
                        <span>Contact Add</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <!-- list and filter start -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phonebook Name</th>
                            <th>mobile</th>
                            <th>Date</th>
                            <th width='200px'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=1;$i<=20;$i++){ ?>
                        <tr>
                            <th></th>
                            <th>{{$i}}</th>
                            <th>1688311639134</th>
                            <th>Scrap</th>
                            <th>Instagram.com</th>
                            <th>+62</th>
                            <th>
                                <a href="#">
                                    <i data-feather="edit-2" class="me-50"></i>
                                    <span>Edit</span>
                                </a>
                                <a href="#">
                                    <i data-feather="trash" class="me-50"></i>
                                    <span>Delete</span>
                                </a>
                            </th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
<script type="text/javascript">
$(document).ready(function() {

});
/*=========================================================================================
    File Name: app-user-list.js
    Description: User List page
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent

==========================================================================================*/
$(function() {
    $("#div1").hide();
    $("#div2").hide();
    $("#btn1").click(function() {
        $("#div1").show();
        $("#div2").hide();
    });
    $("#btn2").click(function() {
        $("#div1").hide();
        $("#div2").show();
    });
    var dtUserTable = $('.user-list-table');
    // Users List datatable
    dtUserTable.DataTable({
        columnDefs: [
            {
                // For Checkboxes
                targets: 0,
                orderable: false,
                responsivePriority: 3,
                render: function(data, type, full, meta) {
                    return (
                        '<div class="form-check"> <input class="form-check-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                        data +
                        '" /><label class="form-check-label" for="checkbox' +
                        data +
                        '"></label></div>'
                    );
                },
                checkboxes: {
                    selectAllRender: '<div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="form-check-label" for="checkboxSelectAll"></label></div>'
                }
            }
        ],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [
            [1, 'asc']
        ],
        // Buttons with Dropdown
        buttons: [

        ],
        // For responsive popup
        responsive: {

        },
        language: {

        },
        initComplete: function() {

        },
        searching: false
    });
});
</script>
@endsection