@extends('admins.layout.index')
@section('content')

<div class="content-page">

    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.profile')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item active">@lang('task.profile')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-user"></i>@lang('task.Detailprofile')</h3>
                        </div>

                        <div class="card-body">

                            <form action="#" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>@lang('task.Fullname')</label>
                                            <input class="form-control" name="name" type="text" value="Administrator"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>@lang('task.email')</label>
                                            <input class="form-control" name="email" type="email"
                                                value="office@website.com" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>@lang('task.password')</label>
                                            <input class="form-control" name="password" type="password" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr>
                                        <button type="button" class="btn btn-primary">@lang('task.editprofile')</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file-image"></i>@lang('task.avatar')</h3>
                        </div>

                        <div class="card-body text-center">

                            <div class="row">
                                <div class="col-lg-12">
                                    <img alt="avatar" class="img-fluid" src="images/avatars/avatar.png">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-danger btn-block mt-3">
                                        @lang('task.deleteavatar')</button>
                                </div>

                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-info btn-block mt-3">
                                        @lang('task.changeavatar')</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
           
        </div>

    </div>

</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_componets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/template.js"></script>

</div>

</body>

</html>

@endsection