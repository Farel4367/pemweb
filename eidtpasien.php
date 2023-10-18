<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Edit Data Pasien</title>
    <?php
        include 'koneksi.php';
        $panggil = $koneksi->query("SELECT * FROM pasiensanti where idPasien='$_GET[edit]'");
    ?>  

    <?php
        while ($row = $panggil->fetch_assoc()) 
    ?>
    <from action="koneksi.php" method="POST">
        <div class="form-group">
            <label for="idPasien">ID Pasien</lbael>

            <input type="text class="form-control mb-3 name="idPasien value="<?= $row['idPasien'] ?> readonly>

        </div>
        <div class="form-group">
            <label for="idPasien">ID Pasien</label>

                        <input type="text" class="form-control mb-
3" name="idPasien" placeholder="ID Pasien">

                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>

                        <input type="text" class="form-control mb-
3" name="nmPasien" placeholder="Nama Pasien">

                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-
input" name="jk" value="perempuan"> Perempuan

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-
input" name="jk" value="laki-laki"> Laki-laki

                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>

                            <textarea class="form-
control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alama

t"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="S
impan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>