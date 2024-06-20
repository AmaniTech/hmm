<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/img/h1.png" />
    <title>My Project | CP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Comic Sans MS', serif, sans-serif;
        }

        .custom-card {
            width: 200px;
            height: 300px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="/project.php">My project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active">Company Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/laravel.php">Laravel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <?php
            $json_file = '../data/cp.json';
            $json_data = file_get_contents($json_file);
            $data = json_decode($json_data, true);

            foreach ($data as $d) {
                echo '
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                        <a href="" class="text-white text-decoration-none">' . $d["class"] . '</a>
                    </div>
                    <div class="mx-auto d-block">
                        <img src="' . $d["img"] . '"  class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">' . $d["name_project"] . '</h5>
                        <p>
                            <small class="text-muted">' . $d["from"] . '</small>
                        </p>
                        <p class="card-text">' . $d["description"] . '</p>
                        <a href="' . $d["url_project"] . '" class="btn btn-primary" target="__blank">Link</a>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>