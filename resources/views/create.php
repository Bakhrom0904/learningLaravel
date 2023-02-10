<h2>Message create page</h2>

<form action="<?=route('store');?>" method="post">
    <?=csrf_field();?>
    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Message</label>
    <input type="text" name="message"><br>
    <input type="submit" value="Send">
</form>
