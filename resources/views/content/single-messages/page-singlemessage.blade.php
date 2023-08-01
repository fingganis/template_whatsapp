@extends('layouts/contentLayoutMaster')

@section('title', 'Scrap Data')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/maps/leaflet.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/maps/map-leaflet.css')) }}">
@endsection

@section('content')
<h2 class="modal-title"><b>Single Messages</h2>

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
                        <span>Messages Limits</span>
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
                        <span>Template Limits</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- list and filter start -->
    <div class="card">
        <div class="row">
            <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-12 form-floating">
                        <h2 class="modal-title"><b>Create Messages</h2>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-12">
                        <div>
                            <select class="select2 form-select" id="instance" aria-hidden="true">
                                <option value="" data-select2-id="60">Select Instance</option>
                                <option value="+62" data-select2-id="61">+62</option>
                            </select><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-12 form-floating">
                        <input type="number" id="mobile" class="form-control" placeholder="Mobile Number">
                        <label for="mobile">Mobile Number</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-12">
                        <div>
                            <select class="select2 form-select" id="instance" aria-hidden="true">
                                <option value="" data-select2-id="60">Use Template</option>
                                <option value="+62" data-select2-id="61">+62</option>
                            </select><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-12">

                        <div id="message-editor">
                            <div class="editor" data-placeholder="Type message..."></div>
                            <div class="compose-editor-toolbar">
                                <!-- <span class="ql-formats me-0">
                                    <select class="ql-font">
                                        <option selected>Sailec Light</option>
                                        <option value="sofia">Sofia Pro</option>
                                        <option value="slabo">Slabo 27px</option>
                                        <option value="roboto">Roboto Slab</option>
                                        <option value="inconsolata">Inconsolata</option>
                                        <option value="ubuntu">Ubuntu Mono</option>
                                    </select>
                                </span>
                                <span class="ql-formats me-0">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>

                                </span> -->
                                <span class="ql-formats me-0">
                                    <div class="email-attachement">
                                        <label for="file-input" class="form-label">
                                            <i data-feather="paperclip" width="17" height="17" class="ms-50"></i>
                                        </label>

                                        <input id="file-input" type="file" class="d-none" />
                                    </div>
                                </span>
                                <span class="ql-formats me-0">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#default"><i
                                            data-feather="map-pin" width="17" height="17" class="ms-50"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="col-12">
                    <div class="card mb-12">
                        <div class="card-header">
                            <h4 class="card-title">Basic Map</h4>
                        </div>
                        <div class="card-body">
                            <div class="leaflet-map" id="basic-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/maps/leaflet.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{ asset(mix('js/scripts/pages/app-email.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/maps/map-leaflet.js'))}}"></script>
{{-- Page js files --}}
@endsection