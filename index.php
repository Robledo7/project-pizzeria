<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Pizze Il Napolitano</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Link font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div id="header-container">
            <div id="logo">
                <img src="img/pizza.svg" alt="">
                <img class="logo-text" src="img/text.svg" alt="">

            </div>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">NOSOTROS</a></li>
                    <li><a href="sucursales.php">SUCURSALES & DELIVERY</a></li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main-content">
        <h2 class="animate__animated animate__backInLeft">NUESTRAS PIZZAS</h2>
        <div id="cart">
            <i class="fa badge" id="badge" value=0><i class="fa-solid fa-cart-shopping fa-lg"></i></i>
        </div>


        <form accept-charset="utf-8" method="get">
            <div id="search-container">
                <input type="search" size="30" placeholder="Descripción del producto..." id="search-input"
                    name="search-input">
                <button id="search" name="search">Buscar</button>
            </div>
        </form>


        <ul class="gallery">
            <?PHP
            include_once("config_products.php");
            include_once("db.class.php");
            $link = new Db();

            $search = isset($_GET['search-input']) ? $_GET['search-input'] : '';
            if (isset($_GET['search'])) {
                $sql = "select c.category_name,p.image,p.product_name,p.price, date_format(p.start_date,'%d/%m/%Y') as DATE from products p inner join categories c on p.id_category=c.id_category  where product_name like CONCAT ('%', '$search', '%') or category_name like CONCAT('%', '$search', '%') order by p.price";
            } else {
                $sql = "select c.category_name,p.image,p.product_name,p.price, date_format(p.start_date,'%d/%m/%Y') as DATE from products p inner join categories c on p.id_category=c.id_category  order by p.price";
            }

            //$sql="SELECT c.category_name,p.image,p.product_name,p.price,date_format(p.start_date,'%d/%m/%Y') as 'DATE' FROM products p inner join categories c on p.id_category=c.id_category order by p.price";
            $stmt = $link->run($sql, NULL);
            if ($stmt->rowCount()==0){
                echo "No hay resultados";
                }
                //VER CÓMO HACER PARA QUE QUEDE MÁS ESTÉTICO//
                else
                {
                  //  echo "Se han encontrado " . $stmt->rowCount(). " resultados";
                }
                
            $data = $stmt->fetchAll();
            try {
                // Conexion a la Base de Datos
                $conn = new PDO("mysql:host=" . SERVER_NAME . ";dbname=" . DATABASE_NAME, USER_NAME, PASSWORD);

                //echo "Conexion Exitosa";
                //REMPLAZA LA LÍNEA DE ARRIBA//$sql = "SELECT c.category_name,p.image,p.product_name,p.price,date_format(p.start_date,'%d/%m/%Y') as 'DATE' FROM products p inner join categories c on p.id_category=c.id_category order by p.price";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $data = $stmt->fetchAll();
            } catch (PDOException $e) {
                echo "¡Error!: ";
                die();
            }
            foreach ($data as $row) {
            ?>
                <li>
                    <div class="card"> <!-- card es box -->
                        <figure> <img src="<?PHP echo $row['image'] ?>" class="img-jpg" alt="fugazzeta" />
                            <figcaption>
                                <h3><?PHP echo $row['category_name'] . " " . $row['product_name'] ?></h3>
                                <p><?PHP echo "$" . " " . $row['price'] ?></p>
                                <time><?PHP echo $row['DATE'] ?></time>
                            </figcaption>
                            <button class="button" value="1">
                                Añadir al carrito <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </figure>
                    </div>
                </li>

            <?PHP
            }
            ?>
        </ul>
    </div>
    <footer>
        <p>Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Todos los derechos reservados
        </p>
    </footer>
    <nav id="social">
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
    </nav>
    <script></script>
    <script src="js/main.js"></script>
</body>

</html>