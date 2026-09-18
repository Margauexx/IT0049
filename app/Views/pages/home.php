<?= $this->include('layouts/header') ?>

<div class="card">

    <h1><?= esc($pageTitle) ?></h1>

    <p>
        Welcome to our basic Point-of-Sale system.
        This website was created using CodeIgniter 4
        and demonstrates the basic MVC architecture.
    </p>

    <p>
        The system currently uses static PHP arrays
        as temporary data sources instead of a database.
    </p>

    <a href="<?= base_url('customers') ?>" class="btn">
        View Customers
    </a>

    <a href="<?= base_url('users') ?>" class="btn">
        View Users
    </a>

</div>

<?= $this->include('layouts/footer') ?>