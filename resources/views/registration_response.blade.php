<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMO 2025 Registration Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 420px;
            width: 100%;
            text-align: center;
        }
        .icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .success { color: #00913C; }
        .info { color: #0E5B9C; }
        h1 {
            margin: 0 0 1rem;
            font-size: 1.5rem;
        }
        p {
            margin: 0 0 1.5rem;
            color: #444;
        }
        .btn {
            display: inline-block;
            background: #00913C;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #007b2f;
        }
    </style>
</head>
<body>

    @if ($success)
         <!-- Example: Success message -->
    <div class="card">
        <div class="icon success">✅</div>
        <h1>Submission Successful</h1>
    </div>

    @else

    <div class="card">
        <div class="icon info">ℹ️</div>
        <h1>Re-submission Successful</h1>
    </div>


    @endif
   


</body>
</html>
