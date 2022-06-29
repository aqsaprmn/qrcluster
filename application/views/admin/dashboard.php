<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<header class="text-center text-white my-5">
    <div class="row m-0">
        <div class="col-sm-2 px-5">
            <img style="width:200px ;" src="<?= base_url() ?>asset/img/logoapi.png" class="mb-4" alt="">
        </div>
        <div class="col-sm-10 px-5">
            <div class="row">
                <div class="col-lg-6 text-end">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="<?= base_url() ?>login/logout" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="">
    <div class="row justify-content-around px-4 m-0">
        <div class="col-lg-6 mb-4 ps-lg-4 pe-lg-1">
            <div class="p-4 shadow-lg bg-white border border-gray rounded">
                <div class="text-center mb-4">
                    <h5>Total Akses QR Per Kawasan</h5>
                </div>
                <div class="chartDonat mb-4">
                    <canvas id="donat"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4 pe-lg-4 ps-lg-1">
            <div class="p-4 border border-gray bg-white shadow rounded">
                <div class="text-center mb-4">
                    <h5>Daftar Total Per Kawasan</h5>
                </div>
                <div class="overflow-auto p-1 stateDonat">
                    <table id="tbldonat" class="cell-border row-border hover compact stripe">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Warna</th>
                                <th class="text-center">Kawasan</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around px-4 m-0">
        <div class="col-lg-6 mb-4 ps-lg-4 pe-lg-1">
            <div class="p-4 shadow-lg bg-white border border-gray rounded">
                <div class="text-center mb-4">
                    <h5>Total Akses QR Per Tanggal</h5>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4"><input id="month" type="month" value="<?= date("Y-m"); ?>" class="form-control"></div>
                </div>
                <div class="chartBar overflow-auto position-relative m-auto" style="height: 50vh;">
                    <canvas id="bar"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6 pe-lg-4 ps-lg-1">
            <div class="p-4 shadow-lg bg-white border border-gray rounded">
                <div class="text-center mb-4">
                    <h5>Total Akses QR Per Jam</h5>
                </div>
                <div class="row justify-content-end">
                    <div class="col-4"><input id="day" type="date" value="<?= date("Y-m-d"); ?>" class="form-control"></div>
                </div>
                <div class="chartLine overflow-auto position-relative m-auto" style="height: 50vh;">
                    <canvas id="line"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-4 m-0 pb-5">
        <div class="col-lg-12 pt-4 pt-md-4 pt-lg-0 px-lg-4">
            <div class="overflow-auto bg-white p-4 shadow-lg border border-gray rounded">
                <table id="table" class="cell-border row-border hover compact stripe">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Kawasan</th>
                            <th class="text-center">User IP</th>
                            <th class="text-center">Tanggal & Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($visitor as $d) : ?>
                            <tr>
                                <td class="text-center p-2"><?= $i; ?></td>
                                <td><?= $d['kawasan'] ?></td>
                                <td class="text-center"><?= $d['ip'] ?></td>
                                <td class="text-center"><?= $d['waktu_scan'] ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>