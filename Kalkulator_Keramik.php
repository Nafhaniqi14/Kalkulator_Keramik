<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Keramik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Kalkulator Keramik</h4>
            </div>
            <div class="card-body">
                <form action="" method="post" class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Lebar (m)</label>
                        <input type="number" name="lebar" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Panjang (m)</label>
                        <input type="number" name="panjang" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Ukuran Per Dus (m²)</label>
                        <input type="number" step="0.01" name="perdus" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-success">Proses</button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $panjang   = (float) $_POST['panjang'];
            $lebar     = (float) $_POST['lebar'];
            $perdus    = (float) $_POST['perdus'];

            $luas      = $panjang * $lebar;
            $kebutuhan = $luas / $perdus; // kebutuhan dus = luas ÷ isi per dus
        ?>
        <div class="card shadow mt-4">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Hasil Perhitungan</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Luas Total (m²)</th>
                            <th>Kebutuhan (dus)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $luas; ?></td>
                            <td><?php echo ceil($kebutuhan); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
