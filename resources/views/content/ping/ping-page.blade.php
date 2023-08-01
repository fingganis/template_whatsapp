@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

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
                <h4 class="modal-title" id="myModalLabel1">SEND YOUR MESSAGES</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="mb-12 col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Send Your Messages</label>
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
<h2 class="modal-title"><b>Instance List
        <button type="button" class="btn btn-outline-primary waves-effect" data-bs-toggle="modal"
            data-bs-target="#default" style="float: right;">
            Add Instance
        </button></h2>
<section class="ping-page">

        <!-- list and filter start -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Messages</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>coba pesan</th>
                            <th><span class="badge rounded-pill  badge-light-success">Professional</span></th>
                        </tr>
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