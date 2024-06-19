<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .btn-large {
            display: block;
            width: 100%;
            padding: 1rem 2rem;
            font-size: 1.25rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .btn-company-profile {
            background-color: #007bff;
            color: #fff;
        }

        .btn-laravel {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-back {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">My Project</h1>
        <div class="mt-4">
            <a href="/pages/company_profile.php" class="btn btn-large btn-company-profile">Company Profile</a>
            <a href="/pages/laravel.php" class="btn btn-large btn-laravel">Laravel</a>
            <a href="/index.php" class="btn btn-large btn-back">Back</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>