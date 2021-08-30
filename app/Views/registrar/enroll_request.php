<!-- MAIN CONTENT -->
    <main class="p-4 my-container">
      <h3 class="text-center">Enrollment Request</h3>
     <div class="container-sm col-sm-12 justify-content-center">
       <nav class="nav nav-pills nav-justified">
        <a class="nav-item nav-link active" href="#">New Student</a>
        <a class="nav-item nav-link" href="#">Old Student</a>
       </nav>
        <div class=" col-sm-12 rounded-3"></div>
          <table class="table bg-light shadow text-center table-striped table-borderless">
            <thead>
              <tr>
                <th scope="col">Student Photo</th>
                <th scope="col">LRN</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Name Extension</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 0; $i < 5; $i++): ?>
              <tr class="align-middle">
                <td scope="row"><img class="mx-auto d-block" src="../img/2x2photo.png" alt="hugenerd" width="50" height="50" class="rounded-circle"></td>
                <td>136887090657.</td>
                <td>Jake</td>
                <td>R.</td>
                <td>Garcia</td>
                <td></td>
                <td><a href="<?= site_url()?>registrar/validation" type="button" class="btn btn-primary btn-sm ">Validate</a></td>
              </tr>
              <?php endfor;?>
            </tbody>
          </table>
        </div>
      </div>
    </main> 