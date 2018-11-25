<h3>EDIT DATA</h3>
<br>
<form action="{{ url('index/update/' ~ user.id) }}" method="post">
    <input type="text" name="name" value="{{ user.name }}"><br>
    <input type="text" name="username" value="{{ user.username }}"><br>
    <input type="password" name="password" value="{{ user.password }}"><br>
    <button type="submit">Submit</button>
</form>