<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Shop - Contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding-bottom: 50px;
        }

      
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 3rem;
            color: #995496;
        }

       
        nav {
            display: flex;
            justify-content: center;
            background-color: #995496;
            padding: 15px 0;
            margin-top: 0px;
            
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 15px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            
        }

        nav a:hover {
            background-color: purple;
        }

        nav a:active {
            background-color: #1abc9c;
        }

        
        .main-content {
            padding: 50px 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 40px 0;
            border-radius: 10px;
        }

        .main-content p {
            font-size: 1.3rem;
            color: #7f8c8d;
            text-align: center;
        }

       
        .about-section {
            text-align: center;
            margin-top: 40px;
        }

        .about-section h2 {
            font-size: 2.5rem;
            color: orange;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.2rem;
            color: #7f8c8d;
            line-height: 1.8;
            margin: 20px auto;
            width: 80%;
        }

        
    </style>
</head>
<body>
    <nav>
        <a class="navbar-brand" href="#home"><img src="data:image/png;base64,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" alt="Ice Cream Shop" width="35"> Unicone Ice Cream Shop</a>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact Us</a>
        <a href="admin.php">Admin</a>
        <a href="login.php">Login</a>
    </nav>

    <h1>Contact Us</h1>
    
    <div class="container">
        <p align="center">If you have any questions, please reach out to us at <a href="mailto:support@uniconesweets.com">support@uniconesweets.com</a>.</p>
    </div>

   
</body>
</html>
