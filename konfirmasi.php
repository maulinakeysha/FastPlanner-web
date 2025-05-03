<?php
include __DIR__ . DIRECTORY_SEPARATOR .'Function/getPlanBYID.php';
var_dump($BeliPlan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
        .card {
            border: none; /* Menghilangkan garis pada elemen card */
        }

        .radius-30{
            border-radius: 30px;
        }
        .radius-15{
            border-radius: 15px;
        }
        .radius-7{
            border-radius: 7.5px;
        }
        .bg-3E{
            background-color: #3E3E3E;
        }
        .bg-2F{
            background-color: #2F2F2F;
        }
    </style>
  <title>Formulir Pembayaran</title>
</head>
<body>
<div class="container"> 
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white px-5" style="border-radius: 1rem;">
                        
                            <div class="card-header mb-md-3 mt-md-3">
                                <div class="pt-5">
                                    <h2 class="fw-bold mb-2 text-uppercase text-center">Informasi Pembayaran</h2>
                                    <p class="text-white-50 mx-3">Please enter your login and password!</p>
                                </div>
                            <div class="card-body p-5 text-center">
                                <form id="form_bayar" action="addPlan.php" method="GET">
                                    <input type="text" class="form-control" id="pembayaran" name="pembayaran" required>

                                </form>
                            <div class="card-footer text-center">
                                <div class="justify-content-center">
                                <button type="submit" form="form_bayar" class="btn btn-outline-warning edit px-5 radius-7">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

