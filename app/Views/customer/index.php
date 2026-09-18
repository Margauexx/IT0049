<?= $this->include('layouts/header') ?>

<div class="card">

    <h1><?= esc($pageTitle) ?></h1>

    <p>
        Below is the list of customer accounts stored
        in the temporary static PHP array.
    </p>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($customers as $index => $customer): ?>

                <tr>
                    <td><?= $index + 1 ?></td>

                    <td>
                        <?= esc($customer['full_name']) ?>
                    </td>

                    <td>
                        <?= esc($customer['email']) ?>
                    </td>

                    <td>
                        <?= esc($customer['phone']) ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?= $this->include('layouts/footer') ?>