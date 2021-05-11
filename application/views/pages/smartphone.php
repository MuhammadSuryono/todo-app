<div class="row">
    <div class="col-md-12">
        <div class="card" style="margin-right: auto; margin-left: auto; display: block;">
            <div class="card-header">
                <strong class="card-title mb-3">
                    SmartPhone
                    <a href="/smartphone/create" class="au-btn au-btn-icon au-btn--blue" style="float: right">
                        <i class="zmdi zmdi-plus"></i>add smartphone
                    </a>
                </strong>

                <?php var_dump($data); ?>

            </div>
            <div class="card-body">
                <table class="table table-data2">
                    <tbody>
                    <?php
                    foreach ($data as $item){
                    ?>

                    <tr class="tr-shadow">
                        <td><?= $item->kode_smartphone?></td>
                        <td>
                            <span class="block-email"><?= $item->seri_smartphone?></span>
                        </td>
                        <td class="desc"><?= $item->merk_smartphone?></td>
                        <td><?= $item->tanggal_launching?></td>
                        <td>
                            <span class="status--process"><?= $item->ukuran_layar?></span>
                        </td>
                        <td>
                            Kamera Belakang: <?= $item->kamera_belakang?><br/>
                            Kamera Depan: <?= $item->kamera_depan?><br/>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href="/smartphone/edit/1" class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

