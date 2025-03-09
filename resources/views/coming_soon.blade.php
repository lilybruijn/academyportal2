<!-- resources/views/coming-soon.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('{{ asset('img/cover.jpg') }}');
            background-size: cover;
            color: #fff;
            text-align: center;
            font-family: 'Quicksand', sans-serif;
        }
        h1 {
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 30px;
            font-size: 5rem;
        }
    </style>
</head>
<body>
    <h1>Coming Soon</h1>
</body>
</html>
