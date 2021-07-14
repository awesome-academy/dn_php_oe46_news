@extends('admins.layout.index')

@section('content')

<div class="content-page">

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

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right"><a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus"
                                        aria-hidden="true"></i>@lang('task.Addpost')</a></span>
                            <h3><i class="far fa-file-alt"></i>@lang('task.post')</h3>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th id='column1'>@lang('task.Detailpost')</th>
                                            <th id='column2'>@lang('task.Categorypost')</th>
                                            <th id='column3'>@lang('task.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="https://via.placeholder.com/180x120" /></div>
                                                <h4> Vivamus condimentum rutrum odio</h4>
                                                <p>Posted by <b>Administrator</b> at Nov 29 2018</p>
                                                <p>Nulla cursus maximus lacus at efficitur. In lobortis ante vitae nulla
                                                    semper, in volutpat libero aliquet. Morbi sit amet nibh vitae metus
                                                    interdum finibus sed nec nisl. Ut quam dolor, bibendum id maximus
                                                    ut, suscipit consectetur sem.</p>
                                            </td>
                                            <td>Blog</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i>@lang('task.edit')</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i>@lang('task.delete')</a>
                                            </td>
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