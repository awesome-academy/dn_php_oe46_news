@extends('admins.layout.index')
@section('content')
    
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.Edituser')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item"><a href="">@lang('task.user')</a></li>
                            <li class="breadcrumb-item active">@lang('task.Edituser')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
                        <div class="card-body">
                            <form>
                                    <div class="form-group">
                                        <label>@lang('task.Role')</label>
                                        <select name="role_id" class="form-control" required>
                                            <option value="">-@lang('task.Role') -</option>
                                            <optgroup label="Staff member">
                                                <option value="1"></option> 
                                            </optgroup>

                                            <optgroup label="Registered member">
                                                <option value="4">@lang('task.user')</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                <button type="submit" class="btn btn-primary">@lang('task.update')</button>
                            </form>

                        </div>
                    

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
