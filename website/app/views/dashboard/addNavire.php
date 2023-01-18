<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <form class="px-5 py-1" method="post" enctype="multipart/form-data" action="<?=url('dashboard/addNavire')?>">
                            <div class="card-header px-0 pb-5 d-flex align-items-center">
                                <h6>Add Navire</h6>
                            </div>
                            <div class="form-group">
                                <label for="navirName" class="form-control-label">Navire name</label>
                                <input class="form-control" type="text" placeholder="add name for this navire" name="navirName" id="navirName" required>
                            </div>
                            <div class="form-group">
                                <label for="Image" class="form-control-label">Image</label>
                                <p id="imageTextAlert" class="opacity-75 fst-italic fs-6 m-0 ms-2"
                                   style="color: red !important; font-size: 13px !important; opacity: 50% !important;"></p>
                                <input class="form-control" type="file" id="Image"
                                       onchange="upload_image_check()"
                                       accept="image/png, image/jpg, image/gif, image/jpeg" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="nbrrom" class="form-control-label">Nombre de chambre</label>
                                <input class="form-control" type="number" value="1" id="nbrrom" name="nbrrom" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="nbrprsn" class="form-control-label">Nombre de places</label>
                                <input class="form-control" type="number" value="1" id="nbrprsn" name="nbrprsn" min="1" required>
                            </div>

                            <div class="card-header px-0 pb-0 d-flex align-items-end">
                                <button type="submit" class="btn btn-sm ms-auto" name="submit"
                                        style="color: white ;background: rgba(123, 188, 209, 50) !important;">add
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>

