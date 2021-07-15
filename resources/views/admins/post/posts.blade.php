@extends('admins.layout.index')

@section('content')
    
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Blog posts</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Blog posts</li>
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
                            <span class="pull-right"><a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i>@lang('task.Addpost')</a></span>
                            <h3><i class="far fa-file-alt"></i>@lang('task.post')</h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 300px">@lang('task.Detailpost')</th>
                                            <th style="width:110px">@lang('task.Categorypost')</th>
                                            <th style="min-width:110px">@lang('task.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="https://via.placeholder.com/180x120" /></div>
                                                <h4> Vivamus condimentum rutrum odio</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante vitae nulla semper, in volutpat libero aliquet. Morbi sit amet nibh vitae metus interdum finibus sed nec nisl. Ut quam dolor, bibendum id maximus ut, suscipit consectetur sem.</p>
                                            </td>
                                            <td>Blog</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i>@lang('task.edit')</a>                                                        
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i>@lang('task.delete')</a>                                                        
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->


<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/admin.js"></script>

</div>
<!-- END main -->

</body>

</html>
@endsection
