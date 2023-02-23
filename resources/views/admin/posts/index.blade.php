@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Posts</h4>
                            <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Add Post</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                    </tr>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->category_id}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody></table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{$posts->links()}}
{{--                                <ul class="pagination mb-0">--}}
{{--                                    <li class="page-item disabled">--}}
{{--                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#">2</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


