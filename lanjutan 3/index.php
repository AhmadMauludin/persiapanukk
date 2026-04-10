<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div>

    <h3>Data Users</h3>

    <?php if (session()->getFlashdata('success')): ?>
        <div><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Foto</th>
                <?php if (session()->get('role') == 'admin') : ?>
                    <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($users)): ?>
                <?php $no = 1;
                foreach ($users as $u): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= ucfirst($u['role']) ?></td>
                        <td>
                            <?php if ($u['foto']): ?>
                                <img src="<?= base_url('uploads/users/' . $u['foto']) ?>" width="60">
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>

                        <?php if (session()->get('role') == 'admin') : ?>
                            <td>
                                <a href="<?= base_url('users/edit/' . $u['id']) ?>">
                                    Edit
                                </a>

                                <a href="<?= base_url('users/delete/' . $u['id']) ?>"
                                    onclick="return confirm('Hapus user ini?')">
                                    Hapus
                                </a>
                            </td>
                        <?php endif; ?>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Belum ada data user</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<?= $this->endSection() ?>
