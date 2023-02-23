
@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12">
                    <form action="{{route('admin.services.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4>Service create</h4>
                            <div class="form-group">
                                <label>Title Uz</label>
                                <input type="text" class="form-control" name="title_uz">
                            </div>
                            <div class="form-group">
                                <label>Title Ru</label>
                                <input type="text" class="form-control" name="title_ru">
                            </div>
                            <div class="form-group">
                                <label>Title En</label>
                                <input type="text" class="form-control" name="title_en">
                            </div>
                            <div class="form-group">
                                <label>Description Uz</label>
                                <input type="text" class="form-control" name="description_uz">
                            </div>
                            <div class="form-group">
                                <label>Description Ru</label>
                                <input type="text" class="form-control" name="description_ru">
                            </div>
                            <div class="form-group">
                                <label>Description En</label>
                                <input type="text" class="form-control" name="description_en">
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


