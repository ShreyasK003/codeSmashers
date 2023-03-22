<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../javascript/bootstrap.js"></script>
</head>

<body>
    <div class="hero-section">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-light">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Entries</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="data d-flex align-items-center justify-content-center">
            <div class="content">
                <h3 class="text-center text-light">Enjoy the world of development.</h3>
                <div class="d-flex align-items-center justify-content-center my-3">
                    <div class="rectangle"></div>
                </div>
                <h1 class="text-center text-light mb-3 ">Code Smashers</h1>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-lg text-light ">Visit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row py-4">
            <h1 class='text-center'>Queries and Comments</h1>
            <div class="d-flex align-items-center justify-content-center my-3">
                <div class="rectangle"></div>
            </div>
            <div>
                <table class="table table-striped">
                    <tr>
                        <td class="text-center bold">Name</td>
                        <td class="text-center bold">Email</td>
                        <td class="text-center bold">Phone</td>
                        <td class="text-center bold">Comment / Query</td>
                    </tr>
                    <?php
                        $server="localhost:3306";
                        $username="root";
                        $password="";
                        $database="codesmashers";
                        
                        $connection=new mysqli($server,$username,$password,$database);
                        if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                        }

                        $query="SELECT * FROM `contact`";

                        $result=$connection->query($query);

                        if($result->num_rows > 0){
                            while($row=$result->fetch_assoc()){
                                ?>
                                <tr><td><?php echo $row['name']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['phone']; ?></td><td><?php echo $row['queries']; ?></td></tr>
                                <?php
                            }
                        }

                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <div class="footer bg-dark fixed-bottom">
        <div>
            <p class="text-center text-light pt-4"> Copyrights &copy; 2023 SSWebs</p>
        </div>
    </div>

</body>

</html>