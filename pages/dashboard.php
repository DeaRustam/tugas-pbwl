<?php
    require_once "config.php";

    $pelanggan = new App\Pelanggan();
?>

<div class="container" style="padding-top: 40px; min-height: 530px">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tugas 2</h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-3">
                                Nama 
                            </div>
                            <div class="col-md-8">
                                : Dea Lestari
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                NIM
                            </div>
                            <div class="col-md-8">
                                : 0702193196
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Jumlah Pelanggan</h4>
                <p class="card-text" style="font-size: 30px; font-weight: bold"><?= $pelanggan->sumPelanggan() ?></p>
              </div>
            </div>
        </div>
    </div>
</div>
