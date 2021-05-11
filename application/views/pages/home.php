<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Group Todo</strong>
                <button class="au-btn au-btn-icon au-btn--blue" style="float: right" data-toggle="modal" data-target="#addGroup">
                    <i class="zmdi zmdi-plus"></i>add group work</button>
            </div>
            <div class="card-body">
                <?php
                $dataGroup = $data;
                if (count($dataGroup) < 1) echo "<p class='text-center'><i>No Data Group</i></p>";
                else if (count($dataGroup) > 0) {
                    echo $dataGroup['group'];
                } ?>
            </div>
        </div>
    </div>
</div>

