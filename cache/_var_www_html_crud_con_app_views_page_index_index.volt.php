<h1>DAFTAR LIST USER</h1>

<a href="<?= $this->url->get('index/create') ?>"><button type="Tambah">Tambah</button></a>

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
        <?php $no = 1; ?>
        <?php foreach ($users as $x) { ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $x->name ?></td>
            <td><?= $x->username ?></td>
            <td><?= $x->password ?></td>
            <td>
                <a href="<?= $this->url->get('index/edit/' . $x->id) ?>">Edit</a> | <a href="<?= $this->url->get('index/delete/' . $x->id) ?>">Delete</a>
            </td>
        </tr>
        <?php $no = $no + 1; ?>
        <?php } ?>
    </tbody>
</table>
<br>
<footer>&copy; Copyright 2018 qodr.i am Sigit wasis subekti</footer>
