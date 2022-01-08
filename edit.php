<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!-- own css -->
    <link rel="stylesheet" href="css/style.css"> 

    <title>Edit | data spare parts | CRUD </title>
</head>
<body>

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
            <div class="container">
                <a class="navbar-brand" href="#">CRUD | PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active"  href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
            </div>
    </nav>
<!-- close Navbar -->

<!-- container -->
<div class="container">
   <div class="row my-3">
       <div class="col-md">
           <h2><i class="bi bi-pencil-square" style="color: red;"></i>&nbsp;Edit data spare part</h2>
       </div>
       <hr>
   </div>
   <div class="row mb-3">
       <div class="col-md">
           <form action="" method="post">
           <div class="mb-3">
                <label for="tgl" class="form-label">Date</label>
                <input type="date" class="form-control w-50" id="tgl" name="tgl" required="">
            </div>
           <div class="mb-3">
                <label for="kode" class="form-label">Item Code</label>
                <input type="number" class="form-control w-50" id="kode"  name="kode" autocomplete="off" required="" readonly>
            </div>
           <div class="mb-3">
                <label for="old" class="form-label">Old Text</label>
                <input type="text" class="form-control w-50" id="old"  name="'old" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="long" class="form-label">Long Text</label>
                <input type="text" class="form-control w-50" id="long"  name="long" autocomplete="off">
            </div>            
            <div class="mb-3">
                <label for="loc" class="form-label">Location</label>
                <input type="text" class="form-control w-50" id="loc" name="loc" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Qty</label>
                <input type="number" class="form-control w-50" id="qty"  name="qty" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="uom" class="form-label">Uom</label>
                <input type="text" class="form-control w-50" id="uom"  name="uom" autocomplete="off">
            </div>
            <label> Mrp type</label>
            <div class="mb-3">
            <div class="form-check">
                    <input class="form-check-input" type="radio" name="mrp" id="vb">
                    <label class="form-check-label" for="vb">VB</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="mrp" id="nd">
                    <label class="form-check-label" for="nd">ND</label>
                </div>
                <div class="mb-3">
                    <label>Mrp 2</label>
                    <select class="form-select w-50" required name="mrp2">
                    <option selected disabled>---------------------------------------------------------Select Mrp type---------------------------------------------------------</option>
                    <option value="vb">VB</option>
                    <option value="nd">ND</option>
                    <option value="pd">PD</option>
                    </select>
                </div>
            <div class="mb-3">
                <label for="maxi" class="form-label">Max</label>
                <input type="number" class="form-control w-50" id="maxi"  name="maxi" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="rop" class="form-label">Rop</label>
                <input type="number" class="form-control w-50" id="rop"  name="rop" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="mini" class="form-label">Min</label>
                <input type="number" class="form-control w-50" id="mini"  name="mini" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control w-50" id="email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Foto</label>
                <input class="form-control form-control-sm w-50" id="gambar" type="file" name="gambar">
                </div>
            <div class="mb-3">
                <label for="ket" class="form-label">Remarks</label>
                <textarea class="form-control w-50" id="ket" rows="4" name="ket" ></textarea>
            </div>      
            <hr>
            <button type="button" name="edit" class="btn btn-warning">Edit</button>   
            <a href="index.php" class="btn btn-secondary">Back</a>  
           </form>
       </div>
   </div>
</div>
</div>
<!-- close container -->

<!-- Footer -->
<div class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-uppercase fw-bold">About</h4>
            <p>Hi wellcome to my website mohamad arif, i am is WEB Developer this website. if any question about WEB please contact me & follow Links in the right corner of this website  </p>
        </div>
        <div class="col-md-6 text-center link">
            <h4 class="text-uppercase fw-bold">Links Account</h4>
            <a href="https://github.com/arifwonk" target="_blank"><i class="bi bi-github fs-2"></i></a>
            <a href="https://web.facebook.com/arif.andthebackbone.9" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
            <a href="https://www.instagram.com/arif_wonk/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>            
        </div>
    </div>
    <footer class="text-center" style="padding: 20px;">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: red;"></i> By <u classs="fw-bold" >Mohamad arif

        </u> </p>
    </footer>
</div>
<!-- Close footer -->

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>