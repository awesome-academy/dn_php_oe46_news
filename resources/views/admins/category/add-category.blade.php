@extends('admins.layout.index')
@section('content')

<div class="content-page">

    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.Addcategory')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item"><a href="">@lang('Categorypost')</a></li>
                            <li class="breadcrumb-item active">@lang('task.Addcategory')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('Categoryname')</label>
                        <input type="text"  name='name' class="form-control" id="" aria-describedby=""
                            placeholder="Enter category name">

                    </div>
                    <button type="submit" class="btn btn-primary">@lang('Add')</button>
                </form>

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