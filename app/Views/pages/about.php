<?= $this->include('layouts/header') ?>

<div class="card">

    <h1><? ($pageTitle) ?></h1>

    <p>
        This Point-of-Sale system is a basic CodeIgniter 4
        laboratory project designed to demonstrate the
        Model-View-Controller architecture.
    </p>

    <p>
        The system contains four pages: a landing page,
        an about page, a customer accounts page, and a
        user accounts page.
    </p>

    <p>
        For this version, customer and user information
        is stored in static PHP arrays. A database can be
        added in a future version of the system.
    </p>

</div>

<?= $this->include('layouts/footer') ?>