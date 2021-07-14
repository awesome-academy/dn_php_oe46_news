@extends('admins.layout.index')
@section('content')
    
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.Editcategory')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item"><a href="">@lang('task.Categorypost')</a></li>
                            <li class="breadcrumb-item active">@lang('task.Editcategory')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

                        <div class="card-body">

                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('task.Categoryname')</label>
                                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter category name" required>
    
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
