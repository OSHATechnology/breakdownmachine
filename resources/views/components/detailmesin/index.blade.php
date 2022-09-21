@extends('layouts.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Table Detail Mesin</h4>
                    {{-- <p class="card-description">Add class <code>.table-bordered</code></p> --}}
                    
                    <button class="btn btn-primary btn-add float-right" type="button" title="Add New"><i class="bi bi-plus"></i> Add New</button>
                    <div class="table-responsive pt-3">
                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Machine</th>
                                    <th>Component</th>
                                    <th>Type</th>
                                    <th>Latest Maintenance</th>
                                    <th>Next Maintenance</th>
                                    <th>Condition</th>
                                    <th>Breakdown Possibility</th>
                                    <th>Machine Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('javascript')
        <script type="text/javascript" src="{{asset('external_js/detailmesin.js')}}"></script>
    @endsection
</div>
@endsection