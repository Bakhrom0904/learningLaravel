@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Phones</h4>
                            <a href="{{route('admin.phones.create')}}" class="btn btn-primary">Add Phone</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th>Number</th>
                                        <th>User</th>
                                    </tr>
                                    @foreach($phones as $phone)
                                    <tr>
                                        <td>{{$phone->id}}</td>
                                        <td>{{$phone->number}}</td>
                                        <td>{{$phone->user->name}}</td>
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


