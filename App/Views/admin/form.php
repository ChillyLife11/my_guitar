<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card col-md-7 p-4 mb-0 mx-auto">
            <? print_r($_SESSION['user'] ?? null); ?>
            <div class="card-body">
                <h1><?=$this->pageTitle?></h1>
                <? echo $this->form->render();?>
                <!-- <form action="actions/add" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="cat">
                            <? foreach ($this->cats as $cat): ?>
                                <option value="<?=$cat->id_cat?>" <?=(isset($this->guitar->id_cat) && $this->guitar->id_cat == $cat->id_cat) ? 'selected' : ''?>><?=$cat->name?></option>
                            <? endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select a category.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> -->
            </div>
        </div>
    </div>
</div>