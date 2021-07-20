@extends('admins.layout.index')

@section('content')

<div class="content-page">

    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.Categorytable')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item active">@lang('task.Categorytable')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i>@lang('task.Categorytable')</h3>
                            <span class="pull-right"><a href="{{route('categories.create')}}"
                                    class="btn btn-primary btn-sm"><i class="fas fa-plus"
                                        aria-hidden="true"></i>@lang('task.Addnewcategory')</a></span>

                        </div>
                        @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>

                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display">
                                    <thead>
                                        <tr>
                                            <th>@lang('task.id')</th>
                                            <th>@lang('task.name')</th>
                                            <th>@lang('task.action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th>{{$category->id}}</th>
                                            <th>{{$category->name}}</th>
                                            <th>
                                                <form
                                                    action="{{route('categories.destroy',['category' => $category->id])}}"
                                                    method="post">
                                                    <a href="{{ route('categories.edit',['category' => $category->id]) }}"
                                                        class="btn btn-primary btn-sm btn-block"><i
                                                            class="far fa-edit"></i>@lang('task.edit')</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">@lang('task.delete')</button>
                                                </form>
                                            </th>
                                        </tr>
                                        @endforeach
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

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="js/template.js"></script>

</div>

</body>

</html>

@endsection