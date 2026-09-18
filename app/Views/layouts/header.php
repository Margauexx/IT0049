<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= ($title ?? 'POS System') ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            min-height: 100vh;
        }

        nav {
            background-color: #1f2937;
            padding: 15px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 10px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 9px 15px;
            border-radius: 5px;
        }

        .nav-links a:hover {
            background-color: #374151;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-bottom: 15px;
            color: #1f2937;
        }

        h2 {
            margin-bottom: 15px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #1d4ed8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th,
        td {
            padding: 14px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #1f2937;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        footer {
            text-align: center;
            padding: 25px;
            margin-top: 40px;
            background-color: #1f2937;
            color: white;
        }

        @media (max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            table {
                font-size: 14px;
            }

            .container {
                width: 95%;
            }
        }
    </style>
</head>

<body>

<nav>
    <a href="<?= base_url('/') ?>" class="logo">
        POS System
    </a>

    <ul class="nav-links">
        <li>
            <a href="<?= base_url('/') ?>">Home</a>
        </li>

        <li>
            <a href="<?= base_url('about') ?>">About</a>
        </li>

        <li>
            <a href="<?= base_url('customers') ?>">Customers</a>
        </li>

        <li>
            <a href="<?= base_url('users') ?>">Users</a>
        </li>
    </ul>
</nav>

<main class="container">