<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = strtoupper($_SESSION['username']);

    if ($username !== 'ADMIN') {
        header('Location: index');
        exit();
    }
} else {
    header('Location: index');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Plan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(45deg, #232526, #414345);
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .form-container {
            background: linear-gradient(45deg, #232526, #414345);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 50%;
            color: #fff;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group label {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #777;
            font-size: 16px;
            pointer-events: none;
            transition: all 0.3s;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-bottom: 2px solid #777;
            background-color: transparent;
            color: #fff;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group input:valid,
        .form-group select:focus,
        .form-group select:valid {
            border-color: #ffc107;
            outline: none;
        }

        .form-group input:focus+label,
        .form-group input:valid+label,
        .form-group select:focus+label,
        .form-group select:valid+label {
            font-size: 12px;
            top: -12px;
            color: #ffc107;
        }
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-bottom: 2px solid #777;
            background-color: transparent;
            color: #fff;
            transition: all 0.3s;
            appearance: none;
        }
        .form-group select:focus {
            background-color: black;
            color: #fff;
        }

        .form-group select::selection {
            background: #ffc107;
            color: #fff;
        }

        .form-group input:hover,
        .form-group select:hover {
            border-color: #ffc107;
        }
    </style>
</head>

<body>
<?php
// ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... -->
</head>

<body>

    <div class="form-container">
        <?php
        // Periksa apakah ada parameter ID dalam URL
        if (isset($_GET['id'])) {
            $planId = $_GET['id'];
            $cUrl = curl_init();

            $options = array(
                CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-2023-hckdc/endpoint/getPlanByID?id='.$planId,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_RETURNTRANSFER => true
            );

            curl_setopt_array($cUrl,$options);

            $response = curl_exec($cUrl);

            $dataPlan = json_decode($response);

            // var_dump($data);

            curl_close($cUrl);

            // Periksa apakah data rencana ditemukan
            if ($planId) {
        ?>
                <h2 class="text-center mb-4">Update Plan</h2>

                <form action="Function/updateplan" method="post">
                    <!-- Gunakan nilai default dari data rencana yang sudah ada -->
                    <div class="form-group">
                        <input type="text" id="id" name="id" value="<?= $planId ?>" hidden>
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama_plan" name="nama_plan" value="<?= isset($dataPlan[0]->nama_plan) ? $dataPlan[0]->nama_plan : '' ?>" required>
                        <label for="nama_plan">Nama Plan</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="harga" name="harga" value="<?= isset($dataPlan[0]->harga) ? $dataPlan[0]->harga : '' ?>" required>
                        <label for="harga">Harga</label>
                    </div>

                    <div class="form-group">
                        <select id="waktu" name="waktu" required>
                            <option value="" disabled>Pilih Waktu</option>
                            <option value="1" <?= isset($dataPlan[0]->periode) && $dataPlan[0]->periode == 1 ? 'selected' : '' ?>>Seminggu</option>
                            <option value="2" <?= isset($dataPlan[0]->periode) && $dataPlan[0]->periode == 2 ? 'selected' : '' ?>>Sebulan</option>
                            <option value="3" <?= isset($dataPlan[0]->periode) && $dataPlan[0]->periode == 3 ? 'selected' : '' ?>>Setahun</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Update Plan</button>
                    </div>
                </form>
        <?php
            } else {
                echo '<p>Data Plan tidak ditemukan.</p>';
            }
        } else {
        ?>
        <h2 class="text-center mb-4">Tambah Plan</h2>

        <form action="Function/addplan" method="post">
            <div class="form-group">
                <input type="text" id="nama_plan" name="nama_plan" required>
                <label for="nama_plan">Nama Plan</label>
            </div>

            <div class="form-group">
                <input type="text" id="harga" name="harga" required>
                <label for="harga">Harga</label>
            </div>

            <div class="form-group">
                <select id="waktu" name="waktu" required>
                    <option value="" disabled selected>Pilih Waktu</option>
                    <option value="1">Seminggu</option>
                    <option value="2">Sebulan</option>
                    <option value="3">Setahun</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-warning">Tambah Plan</button>
            </div>
        </form>
        <?php
        }
        ?>

    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
