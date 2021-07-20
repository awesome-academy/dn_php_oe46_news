@extends('admins.layout.index')

@section('content')

<div class="content-page">

    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">@lang('task.post')</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">@lang('task.Home')</li>
                            <li class="breadcrumb-item active">@lang('task.post')</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <span class="pull-right"><a href="{{route('posts.create')}}"
                                    class="btn btn-primary btn-sm"><i class="fas fa-plus"
                                        aria-hidden="true"></i>@lang('task.Addpost')</a></span>
                            <h3><i class="far fa-file-alt"></i>@lang('task.post')</h3>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th id='column1'>@lang('task.Detailpost')</th>
                                            <th id='column2'>@lang('task.Categorypost')</th>
                                            <th id='column3'>@lang('task.action')</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                <div class="blog_list"><img class="img-fluid d-none d-lg-block"
                                                        alt="image" src="images/{{$post->img}}" /></div>
                                                <h4>{{$post->title}}</h4>
                                                <p>@lang('task.postby')<b>{{$post->user->name}}</b>{{$post->created_at}}
                                                </p>
                                                <p>{!!$post->body!!}</p>
                                            </td>
                                            <td>{{$post->category->name}}</td>
                                            <td>
                                                <form action="{{ route('posts.destroy',['post' => $post->id ]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('posts.edit',['post' => $post->id ]) }}"
                                                        class="btn btn-primary btn-sm btn-block"><i
                                                            class="far fa-edit"></i>@lang('task.edit')</a>
                                                    <button type="submit"
                                                        class="btn btn-danger">@lang('task.delete')</button>
                                                </form>
                                            </td>
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
<script src="bower_componets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/template.js"></script>

</div>

</body>

</html>

@endsection