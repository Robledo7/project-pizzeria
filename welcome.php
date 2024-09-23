<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css">

    <link rel="stylesheet" href="css/insert_products.css">
    
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>Panel de Administrador</h1>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    

    <div class=" content">
        <?php
        session_start();
        $_SESSION['logueado'];
        if ($_SESSION['logueado']) {
            echo "Bienvenido/a  " . $_SESSION['username'];
            echo "<br>";
            echo "Horario de conexión  " . $_SESSION['time'];
        }
        ?>
        
        <br>

        <br/>
        <nav>
            <a href="insert_products.php">INSERTAR PRODUCTOS</a>
        </nav>

        <?php
        echo "<table class='table table-bordered table-striped' id='example'>
                 <thead class='thead-dark'>
                 <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Fecha de Alta</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>";
        include_once("config_products.php");
        include_once("db.class.php");
        $link = new Db();
        $sql = "SELECT c.category_name,p.id_product,p.product_name,p.price,date_format(p.start_date,'%d/%m/%Y') as 'DATE' FROM products p inner join categories c on p.id_category=c.id_category";
        $stmt = $link->run($sql, NULL);
        $data = $stmt->fetchAll();
        foreach ($data as $row) {
        ?>
        
            <tr>
                <td>
                    <?php echo $row['id_product']; ?>
                </td>
                <td>
                    <?php echo $row['product_name']; ?>
                </td>
                <td>
                    <?php echo $row['category_name']; ?>
                </td>
                <td>
                    <?php echo $row['price']; ?>
                </td>
                <td>
                    <?php echo $row['DATE']; ?>
                </td>
                <td>
                 <a href="#" onclick="deleteProduct(<?php echo $row['id_product'] ?>)"> Eliminar Producto</a>
                </td>
                <td>
                <a href="#" onclick="updateProduct(<?php echo $row['id_product'] ?>)"> Actualizar Producto</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script>
        var table = new DataTable('#example', {
            info: true,
            ordering: true,
            paging: true,
            language: {
                url: 'es-MX.json',
            },
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js" integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script> function deleteProduct(cod){
        bootbox.confirm("Desea ud. eliminar realmente el id " + cod, function(result){
            if(result){
                window.location="delete.php?q="+cod;
            }
            
        });
    }
    </script>
    
    <script> function updateProduct(cod){
        
                window.location="edit.php?q="+cod;

            
        
    }
    </script>

</body>

</html>