<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>
<body>
    <h1>Online Shop</h1>

    <form action="form_belanja.php" method="post">
    <div class="form-group">
                    <label for="">Nama Pemesan</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                  <div class="form-group">
                  <label for="" >Nama Barang</label><br>
                  <div class="form-check form-check-inline"  >
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="mesin cuci" disabled>
                    <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Barang</label>
                    <input type="text" name="total_barang" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Tanggal Pemesanan</label>
                    <input type="date" name="tanggal_pemesanan" value="" class="form-control">
                </div>
                <label for="">Ekspedisi Pengiriman</label>
                <select class="form-select form-control" name="kurir" class="form-control">
                    <option selected>Pilih Kurir:</option>
                    <option value="jne">JNE</option>
                    <option value="si cepat">Si Cepat</option>
                    <option value="jnt">JNT</option>
                    <option value="grab">Grab</option>
                    <option value="gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Alamat Pengiriman</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Biaya Kirim</label>
                    <input type="text" name="biaya_kirim" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Biaya Asuransi</label>
                    <input type="text" name="biaya_asuransi" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">
            </form>
    </div>

<?php
$customer = $_POST['customer'];
$item = $_POST['item'];
$total_barang = $_POST['total_barang'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$kurir = $_POST['kurir'];
$alamat = $_POST['alamat'];
$biaya_kirim = $_POST['biaya_kirim'];
$biaya_asuransi = $_POST['biaya_asuransi'];
$simpan = $_POST['simpan']; 
if($item == "TV") {
    $total_biaya = (3000000 * $total_item) + ($biaya_kirim + $biaya_asuransi);
} else if ($item == "Refrigator") {
    $total_biaya = (6000000 * $total_item) + ($biaya_kirim + $biaya_asuransi);
} else  {
    $total_biaya = (4000000 * $total_item) + ($biaya_kirim + $biaya_asuransi);
}
?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $customer?></li>
                    <li class="list-group-item">Item : <?= $item?></li>
                    <li class="list-group-item">Tanggal Pemesanan : <?= $tanggal_pemesanan?>  </li>
                    <li class="list-group-item">Ekspedisi Pengiriman :<?= $kurir?></li>
                    <li class="list-group-item">Shipping Address :<?= $alamat?></li>
                    <li class="list-group-item">Biaya Kirim : <?= $biaya_kirim?> </li>
                    <li class="list-group-item">Biaya Asuransi : <?= $biaya_asuransi?> </li>
                    <li class="list-group-item">Total Biaya :<?= $total_biaya?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Kulkas : Rp.6000.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>