<!-- add track and strand form -->
<section class="border bg-white m-4 p-0">
  <h5 for="" class="w-100 bg-secondary text-light p-3 text-center">Add Track and Strands</h5>

  <!-- form -->
  <div class="px-4 py-2 pb-4">
    <?= form_open()?> 
      <div class="row row-cols-1 row-cols-sm-3">
        <div class="col form-group">
          <label for="track" class="form-label"><span class="text-danger">*</span> Track</label>
          <input type="text" name="track" class="form-control" placeholder="Input track here...">
        </div>
        <div class="col form-group">
          <label for="strand" class="form-label"><span class="text-danger">*</span> Strand</label>
          <input type="text" name="strand" class="form-control" placeholder="Input strand here...">
        </div>
        <div class="col form-group">
          <label for="semester" class="form-label"><span class="text-danger">*</span> Semester</label>
          <select name="semester" id="" class="form-select">
            <option value="" selected disabled>Select semester</option>
            <option value="1">1st Semester</option>
            <option value="2">2nd Semester</option>
          </select>
        </div>
      </div>

      <!-- add subject table -->
      <table class="table table-borderless table-light border table-striped mt-4">
        <thead>
          <tr class="text-center">
            <th></th>
            <th>Subject Category</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody id="tierTable">
          <tr>
            <td class="align-middle"><?= 1?>.)</td>
            <td>
              <select name="sc_1" class="form-select">
                <option value="" disabled selected class="disabled">Select Category</option>
                <option value="core">Core</option>
                <option value="applied">Applied</option>
                <option value="specialized">Specialized</option>
              </select>
            </td>
            <td><input type="text" class="form-control" placeholder="Subject Code Here..."></td>
            <td><input type="text" class="form-control" placeholder="Subject Name Here..."></td>
            <td class="text-center align-middle">
              <div class="remove-row">
                <i class="far fa-times-circle text-secondary fa-fw fa-lg"></i>
              </div>
            </td>
          </tr>
        </tbody>                    
      </table>

      <div class="mb-3">
        <div id="addTierBtn" class="p-2 btn btn-light form-control">
          <i class="far fa-plus-square text-success fa-fw fa-lg"></i> <span>Add Row</span>
        </div>
      </div>
      <hr>
      <div class="d-flex justify-content-end">
        <button class="btn btn-outline-primary"><i class="far fa-save"></i> Save</button>
      </div>
    <?= form_close()?>
  </div>
</section>

<!-- view track and strands -->
<section class="border bg-white m-4 mt-5 p-0">
  <h5 for="" class="w-100 bg-secondary text-light p-3 text-center">View Track and Strands</h5>
  <div class="px-4 py-2 pb-4">
    <table class="table table-light table-borderless table-striped border">
      <thead class="text-center">
        <tr>
          <th>Track</th>
          <th>Strand</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="text-center align-middle">
        <tr>
          <td>TVL</td>
          <td>Home Economics</td>
          <td>2021-08-21</td>
          <td class="align-middle text-center">
            <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editTrackStrands"><i class="far fa-edit"></i> Edit</a>
          </td>
        </tr>
        <tr>
          <td>Academic</td>
          <td>ABM</td>
          <td>2021-08-21</td>
          <td class="align-middle text-center">
          <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editTrackStrands"><i class="far fa-edit"></i> Edit</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- edit track and strands model -->
<div class="modal fade" id="editTrackStrands" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTrackStrandsLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white px-4">
        <h5 class="modal-title" id="editTrackStrandsLabel"><i class="far fa-edit fa-3x"></i> Edit Track and Strands</h5>
        <button type="button" class="btn-close bg-white me-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="px-4 py-2 ">
          <?= form_open()?> 
            <div class="row row-cols-1 row-cols-sm-3">
              <div class="col form-group">
                <label for="track" class="form-label"><span class="text-danger">*</span> Track</label>
                <input type="text" name="track" class="form-control" placeholder="Input track here...">
              </div>
              <div class="col form-group">
                <label for="strand" class="form-label"><span class="text-danger">*</span> Strand</label>
                <input type="text" name="strand" class="form-control" placeholder="Input strand here...">
              </div>
              <div class="col form-group">
                <label for="semester" class="form-label"><span class="text-danger">*</span> Semester</label>
                <select name="semester" id="" class="form-select">
                  <option value="" selected disabled>Select semester</option>
                  <option value="1">1st Semester</option>
                  <option value="2">2nd Semester</option>
                </select>
              </div>
            </div>

            <!-- add subject table -->
            <table class="table table-borderless table-light border table-striped mt-4">
              <thead>
                <tr class="text-center">
                  <th></th>
                  <th>Subject Category</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="modalTable">
                <tr>
                  <td class="align-middle">1.)</td>
                  <td>
                    <select name="sc_1" class="form-select">
                      <option value="" disabled selected class="disabled">Select Category</option>
                      <option value="core">Core</option>
                      <option value="applied">Applied</option>
                      <option value="specialized">Specialized</option>
                    </select>
                  </td>
                  <td><input name="sn_1" type="text" class="form-control" placeholder="Subject Code Here..."></td>
                  <td><input name="up_1" type="text" class="form-control" placeholder="Subject Name Here..."></td>
                  <td class="text-center align-middle">
                    <div class="remove-row">
                      <i class="far fa-times-circle text-secondary fa-fw fa-lg"></i>
                    </div>
                  </td>
                </tr>
              </tbody>                    
            </table>

            <div class="mb-3">
              <div id="modalBtn" class="p-2 btn btn-light form-control">
                <i class="far fa-plus-square text-success fa-fw fa-lg"></i> <span>Add Row</span>
              </div>
            </div>

            
          <?= form_close()?>
        </div>
      </div>
      <div class="modal-footer">
        <div type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script src="<?= site_url()?>js/addrow.js"></script>
<!-- setup add row functionality -->
<script>
  setAddRow('tierTable', 'addTierBtn');
  setAddRow('modalTable', 'modalBtn');
</script>