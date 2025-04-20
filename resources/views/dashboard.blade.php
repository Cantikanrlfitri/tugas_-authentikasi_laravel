<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Artikel</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
        }

        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn.add {
            background-color: #28a745;
            color: white;
        }

        .btn.add:hover {
            background-color: #218838;
        }

        .btn.logout {
            background-color: #dc3545;
            color: white;
            margin-left: 10px;
        }

        .btn.logout:hover {
            background-color: #c82333;
        }

        .empty-box {
            border: 2px dashed #ccc;
            padding: 40px;
            text-align: center;
            color: #666;
            background-color: #fafafa;
            border-radius: 10px;
        }

        .empty-box p {
            font-size: 18px;
            margin: 0;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Dashboard Artikel</h2>
            <div>
                <a href="{{ route('logout') }}" class="btn logout">Logout</a>
            </div>
            <div>
                <a href="{{ route('artikel.index') }}" class="btn add">Lihat artikel</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Dashboard Artikel - Telkom University
        </div>
    </div>
</body>
</html>
