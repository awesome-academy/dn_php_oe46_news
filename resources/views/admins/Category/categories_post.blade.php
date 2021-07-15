@extends('admins.layout.index')

@section('content')
    
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('Categorytable')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('Home')</li>
                            <li class="breadcrumb-item active">@lang('Categorytable')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i>@lang('Categorytable')</h3>
                            <span class="pull-right"><a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i>@lang('task.Addnewcategory')</a></span>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>@lang('id')</th>
                                            <th>@lang('name')</th>
                                            <th>@lang('action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                <a href="" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i>@lang('edit')</a>                                                        
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i>@lang('delete')</a>                                                        
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive-->

                        </div>
                        <!-- end card-body-->

                    </div>
                    <!-- end card-->

                </div>

            </div>
            <!-- end row-->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->


<script src="js/modernizr.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/moment.min.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/detect.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="js/admin.js"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<!-- dataTabled data -->
<script src="data/data_datatables.js"></script>
<!-- END Java Script for this page -->

</body>

</html>
@endsection
