<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars List</title>
    <!-- Bootstrap CSS samo preko CDN-a -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4" style="color: green; font-weight: bold;">
            ✅ Production Test - Cars List
        </h1>

        <p class="text-center text-primary fw-bold">
            Novi deployment je uspješno izvršen 🚀
        </p>


        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td style="color: green; font-weight: bold;">{{ $car->name }}</td>
                            <td>{{ $car->color }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>