<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Task App</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Task App</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create-task">Create-Tasks</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container p-5 my-5">
        @yield('content')
    </div>

</body>

</html>