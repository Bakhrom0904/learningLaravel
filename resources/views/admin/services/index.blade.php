@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Services</h4>
                            <a href="{{route('admin.services.create')}}" class="btn btn-primary">Add Service</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                    </tr>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->title_uz}}</td>
                                            <td>{{$service->description_uz}}</td>
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


