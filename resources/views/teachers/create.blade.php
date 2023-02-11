<h2>Message create page</h2>

<form action="/teachers" method="post">
    <?=csrf_field();?>
    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Addres</label>
    <input type="text" name="address"><br>
    <label>Phone</label>
    <input type="text" name="phone"><br>
    <label>Email</label>
    <input type="text" name="email"><br>
    <input type="submit" value="Send">
</form>
<div>
    @foreach($teachers as $teacher)
        {{$teacher->name}}
    @endforeach
</div>
