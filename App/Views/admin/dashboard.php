<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div class="pb-5">
                            <div class="fs-4 fw-semibold">
                                <?= count($this->guitars) ?>
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                                </svg>
                            </div>
                            <div>Guitars</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div class="pb-5">
                            <div class="fs-4 fw-semibold"><?= count($this->cats) ?>
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                                </svg>
                            </div>
                            <div>Categories</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div class="pb-5">
                            <div class="fs-4 fw-semibold">
                                <?php
                                echo count(array_filter($this->guitars, function ($guitar) {
                                    return $guitar->sale > 0;
                                }));
                                ?>
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                                </svg>
                            </div>
                            <div>Guitars with sale</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>

        <div class="row">
            <div class="card">
                <a class="btn btn-primary align-self-start mt-3 mb-4" href="<?=BASE_URL?>/admin/add" role="button">Add guitar</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">First</th>
                            <th scope="col">Category</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Sale</th>
                            <th class="col">Add date</th>
                            <th class="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach($this->guitars as $guitar): ?>
                            <tr>
                                <th scope="row"><?=$guitar->id_guitar?></th>
                                <td><img src="<?=BASE_URL?>/Assets/img/models/<?=$guitar->img?>" alt="" width="50"></td>
                                <td><?=$guitar->name?></td>
                                <td><?=$guitar->cat_name?></td>
                                <td>
                                    <?php
                                        if ($guitar->sale > 0) {
                                            echo "<small><del>" . round($guitar->cost) . " $</del></small><br> 
                                                  <span class=\"text-sm text-danger\">" . round($guitar->cost - ($guitar->cost * $guitar->sale / 100)) . " $</span>";
                                        } else {
                                            echo $guitar->cost . ' $';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if ($guitar->sale <= 0) {
                                            echo '-';
                                        } else {
                                            echo $guitar->sale . '%';
                                        }
                                    ?>
                                </td>
                                <td><?=$guitar->dt_add?></td>
                                <td>
                                    <a href="<?=BASE_URL?>/admin/actions/delete?id=<?=$guitar->id_guitar?>">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6276/6276642.png" alt="" width="30">
                                    </a>
                                    <a href="<?=BASE_URL?>/admin/edit?id=<?=$guitar->id_guitar?>">
                                        <img src="https://cdn-icons-png.flaticon.com/512/5996/5996831.png" alt="" width="30">
                                    </a>
                                </td>
                            </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>