
@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <form action="{{route('admin.phones.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4>Phone create</h4>
                            <div class="form-group">
                                <label>Number</label>
                                <input type="number" class="form-control" name="number">
                            </div>
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Yuborish">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection


