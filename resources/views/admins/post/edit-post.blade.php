@extends('admins.layout.index')

@section('content')

    <div class="content-page">

        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">@lang('task.Editpost')</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">@lang('task.Home')</li>
                                <li class="breadcrumb-item"><a href="">@lang('task.post')</a></li>
                                <li class="breadcrumb-item active">@lang('task.Editpost')</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="card mb-3">

                            <div class="card-body">

                                <form action="{{route('posts.update',['post' => $post->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                            <div class="form-group">
                                                <label>@lang('task.title')</label>
                                                <input class="form-control" name="title" type="text" value="{{$post->title}}">
                                            </div>

                                            <div class="form-group">
                                                <label>@lang('task.body')</label>
                                                <textarea rows="3" class="form-control ckeditor" name="body">{{$post->body}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>@lang('task.img')</label><br />
                                                <input type="file" name="img">
                                            </div>


                                        </div>

                                        <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                            <div class="form-group">
                                                <label>@lang('task.excerpt')</label>
                                                <input type="text" class="form-control" value="{{$post->exceprt}}" name="exceprt">
                                            </div>

                                            <div class="form-group">
                                                <label>@lang('task.slug')</label>
                                                <input type="text" class="form-control" value="{{$post->slug}}" name="slug">
                                            </div>
                                            <div class="form-group">
                                                <label>@lang('task.Selectcontenttype')</label>
                                                <select name="content_type" class="form-control">
                                                    <option value="Video" {{$post->content_type == 'Video' ? 'selected' : ''}}>@lang('task.video')</option>
                                                    <option value="News" {{$post->content_type == 'News' ? 'selected' : ''}}>@lang('task.news')</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>@lang('task.Selectcategory')</label>
                                                <select name="cate_id" class="form-control">
                                                    @foreach ($categories as $category)

                                                    <option value="{{$category->id}}"{{$category->id ===$post->cate_id ? 'selected' : ''}}>{{$category->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">@lang('task.update')</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_componets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

    <script src="js/template.js"></script>

    </div>

    </body>

    </html>

@endsection
