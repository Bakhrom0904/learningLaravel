@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Categories</h4>
                            <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                    </tr>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
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


