<form action='{{ action('DateController@create') }}' method="post" enctype="multipart/form-data">
    @csrf
    <input type="test" name="name">
    <input type="file" name="profile_picture">
    <input type="submit">
</form>
1`