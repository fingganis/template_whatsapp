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
                <h4 class="modal-title" id="myModalLabel1">Start New Scrapper</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="first-name">Scrapper Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" id="first-name" class="form-control" name="fname"
                                        placeholder="Scrapper Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="email-id">Site Name</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" id="email-id" class="form-control" name="email-id"
                                        placeholder="Site Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="contact-info">Query</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="position-relative" data-select2-id="46"><select
                                            class="select2 form-select select2-hidden-accessible" id="select2-multiple"
                                            multiple="" data-select2-id="select2-multiple" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="+99" data-select2-id="60">+99</option>
                                            <option value="+62" data-select2-id="61">+62</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-1 row">
                                <div class="col-sm-12">
                                    Result Expetation : 500 result
                                </div>
                                <div class="col-sm-12">
                                    <input type="range" class="form-range" id="customRange1">
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
<h2 class="modal-title"><b>SCRAP DATA
        <button type="button" class="btn btn-outline-primary waves-effect" data-bs-toggle="modal"
            data-bs-target="#default" style="float: right;">
            Start New Scrap
        </button></h2>
<section class="ping-page">

    <!-- list and filter start -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="user-list-table table">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Scrapper Name</th>
                        <th>Site Name</th>
                        <th>Query</th>
                        <th>Status</th>
                        <th width='200px'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1;$i<=111;$i++){ ?>
                    <tr>
                        <th>{{$i}}</th>
                        <th>1688311639134</th>
                        <th>Scrap</th>
                        <th>Instagram.com</th>
                        <th>+62</th>
                        <th>Finished</th>
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
/*=========================================================================================
    File Name: app-user-list.js
    Description: User List page
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent

==========================================================================================*/
$(function() {
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