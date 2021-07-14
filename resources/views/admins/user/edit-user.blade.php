@extends('admins.layout.index')
@section('content')

<div class="content-page">

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

    </div>

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_componets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/template.js"></script>

</div>

</body>

</html>
@endsection