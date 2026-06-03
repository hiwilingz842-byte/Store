<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusZone | Game Top-Up Store</title>
    <style>
        :root {
            --primary: #ff4a11;
            --dark: #121214;
            --card-bg: #1a1a1e;
            --text: #ffffff;
            --text-gray: #a1a1aa;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--dark);
            color: var(--text);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #09090b;
            padding: 20px 10%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #27272a;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
            text-decoration: none;
        }
        nav a {
            color: var(--text);
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: var(--primary);
        }
        .container {
            width: 80%;
            margin: 40px auto;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: var(--card-bg);
            border: 1px solid #27272a;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }
        .btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: var(--text-gray);
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            background: #27272a;
            border: 1px solid #3f3f46;
            color: white;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">🎮 NEXUSZONE</a>
        <nav>
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="cart.php">Cart 🛒</a>
        </nav>
    </header>
