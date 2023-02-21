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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


