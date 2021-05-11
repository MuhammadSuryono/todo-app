<div class="row">
    <div class="col-md-12">
        <div class="card" style="margin-right: auto; margin-left: auto; display: block;">
            <div class="card-header">
                <strong class="card-title mb-3">
                    Edit SmartPhone
                </strong>

            </div>
            <div class="card-body">
                <form action="<?= base_url('smartphone/store')?>" method="post">
                    <div class="form-group">
                        <label class="form-control-label">Seri Smartphone</label>
                        <input type="text" name="seri_smartphone" placeholder="Seri Smartphone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Ukuran Layar</label>
                        <select name="merk_smartphone" class="form-control">
                            <option value="">Select Merk</option>
                            <?php
                            $options = array(
                                [
                                    "id" => "Oppo",
                                    "label" => "Oppo"
                                ],
                                [
                                    "id" => "Samsung",
                                    "label" => "Samsung"
                                ],
                                [
                                    "id" => "Nokia",
                                    "label" => "Nokia"
                                ],
                                [
                                    "id" => "Iphone",
                                    "label" => "Iphone"
                                ]
                            );
                            foreach ($options as $option) {
                                echo "<option value='".$option['id']."' >". $option['label']  ."</option> ";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Ukuran Layar</label>
                        <input type="text" name="ukuran_layar" placeholder="Ukuran Layar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Kamera Depan</label>
                        <input type="text" name="kamera_depan" placeholder="Kamera Depan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Kamera Belakang</label>
                        <input type="text" name="kamera_belakang" placeholder="Kamera Belakang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Tanggal Launching</label>
                        <input type="date" name="tanggal_launching" class="form-control">
                    </div>

                    <button class="btn btn-primary btn-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

