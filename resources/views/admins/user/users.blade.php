@extends('admins.layout.index')

@section('content')
    
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.user')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item active">@lang('task.user')</li>
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
                            <span class="pull-right">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
                                    <i class="fas fa-user-plus" aria-hidden="true"></i>@lang('task.Addnew')</button>
                            </span>
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form action="#" method="post" enctype="multipart/form-data">

                                            <div class="modal-header">
                                                <h5 class="modal-title">@lang('task.Addnew')</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">@lang('task.Close')</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>@lang('task.Fullname')</label>
                                                            <input class="form-control" name="name" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>@lang('task.email')</label>
                                                            <input class="form-control" name="email" type="email" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>@lang('task.password')</label>
                                                            <input class="form-control" name="password" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>@lang('task.Role')</label>
                                                            <select name="role_id" class="form-control" required>
                                                                <option value="">- @lang('task.select') -</option>
                                                                <optgroup label="Staff member">
                                                                    <option value="1"></option>
                                                                </optgroup>
                                                                <optgroup label="Registered member">
                                                                    <option value="4"></option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>@lang('task.img')</label>
                                                    <br />
                                                    <input type="file" name="image">
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">@lang('task.Adduser')</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <h3>
                                <i class="far fa-user"></i>@lang('task.alluser')</h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width:300px">@lang('task.detailuser')</th>
                                            <th style="width:120px">@lang('task.Role')</th>
                                            <th style="min-width:110px;">@lang('task.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="user_avatar_list d-none d-none d-lg-block"><img alt="image" src="images/avatars/avatar_small.png" /></div>
                                                <h4>Admin 2</h4>
                                                <p>admin2@website.com</p>
                                                <p>Bio: Nulla cursus maximus lacus at efficitur. In lobortis ante vitae nulla semper, in volutpat libero aliquet. Morbi sit amet nibh vitae metus interdum finibus sed nec nisl nec sidios.</p>
                                            </td>
                                            <td>Administrator</td>
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

</body>

</html>
@endsection
