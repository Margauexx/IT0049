<?= $this->include('layouts/header') ?>

<div class="card">

    <h1><?= esc($pageTitle) ?></h1>

    <p>
        Below is the list of user/staff accounts stored
        in the temporary static PHP array.
    </p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($users as $index => $user): ?>

                <tr>
                    <td><?= $index + 1 ?></td>

                    <td>
                        <?= esc($user['username']) ?>
                    </td>

                    <td>
                        <?= esc($user['full_name']) ?>
                    </td>

                    <td>
                        <?= esc($user['role']) ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?= $this->include('layouts/footer') ?>