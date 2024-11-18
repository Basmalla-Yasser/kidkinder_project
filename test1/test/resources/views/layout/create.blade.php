<h1>create new post</h1>
<form action="{{route('posts.store)}}" method="post">
    @csrf
    <input type="text" name="body" placeholder="enter body">
    <input type="text" name="title" placeholder="enter title">
    <button type="submit">submit</button>


</form>