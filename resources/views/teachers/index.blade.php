@extends('layouts.crud')
@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{route('teachers.create')}}"><h3 style="text-align: right">Create</h3></a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Addres</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Buttons</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher['id']}}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>
                        <a href="{{ route('teachers.show',$teacher->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{route('teachers.edit',$teacher->id)}}" class="btn btn-primary btn-sm">Edit</a>

                        <form action=" {{route('teachers.destroy',$teacher->id)}} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
