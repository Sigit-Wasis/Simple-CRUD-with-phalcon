{% include "components/header.volt" %}

<a href="{{ url('index/create') }}"><button type="Tambah">Tambah</button></a>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% set no = 1 %}
        {% for x in users %}
        <tr>
            <td>{{ no }}</td>
            <td>{{ x.name }}</td>
            <td>{{ x.username }}</td>
            <td>{{ x.password }}</td>
            <td>
                <a href="{{ url('index/edit/' ~ x.id) }}">Edit</a> | <a href="{{ url('index/delete/' ~ x.id) }}">Delete</a>
            </td>
        </tr>
        {% set no = no + 1 %}
        {% endfor %}
    </tbody>
</table>
<br>
{% include "components/footer.volt" %}