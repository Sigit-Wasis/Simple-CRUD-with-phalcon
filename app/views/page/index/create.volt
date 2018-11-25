<!-- form create untuk CRUD -->

<h3>TAMBAH DATA</h3>
<br>
<form action="{{ url('index/store') }}" method="post">
    Nama : <input type="text" name="name">
    <br>
    Username : <input type="text" name="username">
    <br>
    Password : <input type="password" name="password">
    <br>
    <button type="submit">Submit</button>
</form>