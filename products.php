
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Shop - Products</title>
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
            margin-top: 40px;
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
       
        section {
            margin-top: 10px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        section h2 {
            font-size: 2.5rem;
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

       
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-item {
            width: 180px;
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-item img {
            width: 100%;
            max-width: 120px;
            height: 120px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .product-item h3 {
            font-size: 1.2rem;
            color: black;
            margin-bottom: 10px;
        }

        .product-item p {
            font-size: 1rem;
            color: #7f8c8d;
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

    <h1>Our Products</h1>


    <p style="text-align: center;">Here are some delightful products available in our shop!</p>
    <p style="text-align: center;">Try our new products!</p>
    
    <section>
        <h2>Popular Ice Creams</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="https://media.istockphoto.com/id/1326143969/photo/bowl-with-vanilla-ice-cream-balls.jpg?s=612x612&w=0&k=20&c=WxEriNEK7yW7F4AWImLQRrpco-R_bdDYEQoyhigu9fc="  width="100">
                <h3>Vanilla Dream</h3>
                <p>Delicious vanilla ice cream with sprinkles.</p>
                <p>Price: $3.00</p>
            </div>
            <div class="product-item">
                <img src="https://media.istockphoto.com/id/153560334/photo/delicious-gourmet-chocolate-ice-cream.jpg?s=612x612&w=0&k=20&c=0V7LrfZGBHBddNmcOCCOza-mhrTV_ONtgqgK_AxExWU=" width="100">
                <h3>Choco Fudge</h3>
                <p>Rich chocolate ice cream with fudge swirls.</p>
                <p>Price: $3.50</p>
            </div>
            <div class="product-item">
                <img src="https://img.freepik.com/premium-photo/ube-purple-ice-cream-trendy-filipino-fusion-wooden-table_887552-42650.jpg" width="100" height="100">
                <h3>Ube Fudge</h3>
                <p>Rich Ube ice cream </p>
                <p>Price: $4.30</p>
            </div>
            <div class="product-item">
                <img src="https://thumbs.dreamstime.com/b/smooth-rich-matcha-ice-cream-served-bowl-delightful-indulgence-339779207.jpg" width="100" height="100">
                <h3>Matcha ice cream </h3>
                <p>Matcha ice cream </p>
                <p>Price: $5.30</p>
            </div>
            <div class="product-item">
                <img src="data:image/jpeg;base64,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" width="100" height="100">
                <h3> Ube ice cream</h3>
                <p>Rich Ube ice cream </p>
                <p>Price: $2.30</p>
            </div>
        </div>
    </section>
    <h1>Our Flavors</h1>


    <p style="text-align: center;">Here are some flavors available in our shop!</p>
    <p style="text-align: center;">Pick any flavor that you want to try.</p>
    
    <section>
        <h2>Popular Flavors</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="https://i.cbc.ca/1.3936854.1491412141!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_780/vanilla-ice-cream.jpg"  width="100">
                <h3>Vanilla</h3>
            </div>
            <div class="product-item">
                <img src="https://www.ifyougiveablondeakitchen.com/wp-content/uploads/2022/06/no-churn-chocolate-ice-cream-open-graph-image.jpg" width="100">
                <h3>Chocolate</h3>
            </div>
            <div class="product-item">
                <img src="https://www.shutterstock.com/shutterstock/videos/1032233393/thumb/1.jpg?ip=x480" width="100" height="100">
                <h3>Strawberry</h3>
            </div>
            <div class="product-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_KiQMWQHo0QQfWF0ukCBZBk7fosaotMaxPQ&s" width="100" height="100">
                <h3>Matcha</h3>
            </div>
            <div class="product-item">
                <img src="https://media.istockphoto.com/id/1457892820/video/scoop-of-lime-ice-cream-vertical.jpg?s=640x640&k=20&c=WmoS71WcF1hql_4_3C_zAfub-pcj5aJlbQi_I_rK1Vw=" width="100" height="100">
                <h3>Lime</h3>
            </div>
            <div class="product-item">
                <img src=https://cdn4.projectmealplan.com/wp-content/uploads/2018/08/4-mango-lime-nice-cream-scoop.jpg width="100" height="100">
                <h3>Mango</h3>
            </div>
        </div>
    </section>

</body>
</html>