@extends('admins.layout.index')

@section('content')

<div class="content-page">

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

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i>@lang('Categorytable')</h3>
                            <span class="pull-right"><a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"
                                        aria-hidden="true"></i>@lang('task.Addnewcategory')</a></span>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display">
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
                                                <a href="" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i>@lang('edit')</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i>@lang('delete')</a>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
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