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
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="first-name">Campaign Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" id="first-name" class="form-control" name="fname"
                                        placeholder="Campaign Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="email-id">Select Instance</label>
                                </div>
                                <div class="col-sm-9">
                                    <div><select class="select2 form-select" aria-hidden="true">
                                            <option value="" data-select2-id="60">Select Instance</option>
                                            <option value="+62" data-select2-id="61">+62</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12">
                                    <label class="col-form-label" for="first-name">Random Delay 1 to 7 Second</label>
                                </div><br><br>
                                <div class="col-sm-6 form-floating">
                                    <input type="text" id="isi1" class="form-control" name="fname"
                                        placeholder="Enter second from">
                                    <label for="isi1">Enter second from</label>
                                </div>
                                <div class="col-sm-6 form-floating">
                                    <input type="text" id="isi2" class="form-control" name="fname"
                                        placeholder="Enter second to">
                                    <label for="isi2">Enter second to</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12 btn-group" role="group" aria-label="Basic example">
                                    <button type="button" id="btn1"
                                        class="btn btn-primary waves-effect waves-float waves-light">Select
                                        Template</button>
                                    <button type="button" id="btn2"
                                        class="btn btn-primary waves-effect waves-float waves-light">Select
                                        Manual</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="div1">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="email-id">Select Template</label>
                                </div>
                                <div class="col-sm-9">
                                    <div><select class="select2 form-select" aria-hidden="true">
                                            <option value="" data-select2-id="60">Select Template</option>
                                            <option value="+62" data-select2-id="61">+62</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="div2">
                            <div class="mb-1 row">
                                <div class="col-sm-12 form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Enter Your Messages</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="email-id">Select Phonebook</label>
                                </div>
                                <div class="col-sm-9">
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
<h2 class="modal-title"><b>Template Messages
        <button type="button" class="btn btn-outline-primary waves-effect" data-bs-toggle="modal"
            data-bs-target="#default" style="float: right;">
            Start New template
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
                        <span>Template Limits</span>
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
                        <span>Template Add</span>
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
                            <th>No</th>
                            <th>ID</th>
                            <th>Template Name</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th width='200px'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=1;$i<=20;$i++){ ?>
                        <tr>
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
    ('use strict');

    var dtUserTable = $('.user-list-table'),
        newUserSidebar = $('.new-user-modal'),
        newUserForm = $('.add-new-user'),
        select = $('.select2'),
        dtContact = $('.dt-contact'),
        statusObj = {
            1: {
                title: 'Pending',
                class: 'badge-light-warning'
            },
            2: {
                title: 'Active',
                class: 'badge-light-success'
            },
            3: {
                title: 'Inactive',
                class: 'badge-light-secondary'
            }
        };

    var assetPath = '../../../app-assets/',
        userView = 'app-user-view-account.html';

    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
        userView = assetPath + 'app/user/view/account';
    }

    select.each(function() {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
            // the following code is used to disable x-scrollbar when click in select input and
            // take 100% width in responsive also
            dropdownAutoWidth: true,
            width: '100%',
            dropdownParent: $this.parent()
        });
    });

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            columnDefs: [

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
    }
});
</script>
@endsection