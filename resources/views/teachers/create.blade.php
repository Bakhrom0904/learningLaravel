<h2>Message create page</h2>

{{--    @if($errors->any())--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            <li>{{$error}}</li>--}}
{{--        @endforeach--}}
{{--    @endif--}}

<form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
    <?=csrf_field();?>
    <label>Name</label>
    <input type="text" name="name"><br>
{{--    @error('name') {{$message}} @enderror<br>--}}
    <label>Addres</label>
    <input type="text" name="address"><br>
    <label>Phone</label>
    <input type="text" name="phone"><br>
    <label>Foto</label>
    <input type="file" name="image"><br>
{{--    @error('phone') {{$message}} @enderror<br>--}}
    <label>Email</label>
    <input type="text" name="email"><br>
    <input type="submit" value="Send">
</form>

