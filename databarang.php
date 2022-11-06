<?php include_once("connection.php"); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Data Barang</title>
    <style type="text/css">
        body{
            background-color: #e1e4e6;
        }
        table{
            font-family: 'poppins';
            border: 1px solid black;
            border-collapse: collapse;
            border-spacing: 0;
            width: 80%;
            margin: 10px auto 10px auto;
            text-align: center;
        }
        thead{
            background-color: rgb(136, 176, 221);
            margin: 10px 0 0 0;
            font-size: 15px;
        }
        h1{
            text-align: center;
            padding: 15vh 5vh 2vw;
            font-family: 'poppins';
            font-size: 20px;
        }
        h4{
            text-align: right;
            font-family: 'poppins';
            padding-right: 10vw;
        }
        table thead th{
            padding: 10px 10px;
        }
        td{
            padding: 10px 10px;
            font-size: 15px;
            background-color: rgb(241, 235, 213);
        }
        h4 a{
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            font-family: 'poppins';
        }
        td a{
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            text-align: center;
            font-family: 'poppins';
        }

    </style>
</head>
<body>
        <div class="head-about">
                <nav class="navbar" id="navbar">
                            <h2 class="logo">Java<span>Comp</span></h2>
                            <ul>
                                <li><a href="http://localhost/hargalaptop/">HOME</a></li>
                                <li><a class="active" href="http://localhost/hargalaptop/databarang.php">DATA BARANG</a></li>
                                <li><a href="http://localhost/hargalaptop/about.php">ABOUT</a></li>
                            </ul>
                </nav>
        </div>
        <h1>DATA BARANG PENJUALAN JAVA COMP</h1>
        <h4><a href="create.php">+ Tambah Barang</a></h4>
        <table border="1">
            <thead>
            <tr >
                <th width="100">Nomor Barang</th>
                <th width="200">Nama Barang</th>
                <th>Spesifikasi</th>
                <th width="150">Harga</th>
                <th width="150">Action</th>
            </tr>
            </thead>
            <?php $query = $conn->query('SELECT * FROM laptop'); ?>

            <?php if($query->rowCount() > 0): ?>
                <?php 
                    $no = 1; 
                    foreach($query->fetchAll(PDO::FETCH_ASSOC) AS $data): 
                ?>  
                    <tr>
                        <td width="100"> <?php echo $data['nb']; ?> </td>
                        <td width="200"> <?php echo $data['name']; ?> </td>
                        <td> <?php echo $data['spek']; ?> </td>
                        <td width="150">Rp <?php echo number_format($data['harga'], 0,',','.'); ?></td>
                        <td width="150"> 
                            <a href="edit.php?nb=<?php echo $data['nb']; ?>">Edit</a>
                            <a href="delete.php?nb=<?php echo $data['nb']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php 
                    $no++; 
                    endforeach; 
                ?>
            <?php else: ?>        
                <tr>
                    <th colspan="5">Belum ada data user</th>
                </tr>		
            <?php endif; ?>

        </table>
        <audio hidden autoplay loop>
            <source src="were you go.mp3" type="audio/mpeg">
        </audio>
</body>
</html>
        