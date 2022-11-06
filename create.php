<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Barang</title>
    <style type="text/css">
        body{
            background-color: #e1e4e6;
        }
        h1{
            font-family: 'poppins';
            padding: 10vh 3vh 5vh;
        }
        label{
            font-family: 'poppins';
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input{
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: whitesmoke;
            border: 2px solid #ccc;
            outline-color: salmon;
        }
        .base{
            width:400px;
            padding: 20px;
            margin: auto;
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
    <center><h1>Tambah Barang</h1></center>
    <form action="store.php" method="post">
        <section class="base">
            <div>
                <label>Nomor Barang</label> <br/>
                <input type="text" name="nb"> <br/>
            </div>
                
                <div>
                    <label>Nama Barang</label> <br/>
                    <input type="text" name="name"> <br/>
                </div>
                
                <div>
                    <label>Spesifikasi</label> <br/>
                    <input type="text" name="spek"> <br/>
                </div>
                <div>
                    <label>Harga Barang</label> <br/>
                </div>
                <div>
                <input type="number" name="harga"> <br/> <br/>
                </div>
                <button>Simpan</button>
        </section>
    </form>
</body>
</html>
