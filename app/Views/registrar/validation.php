  <main class="p-4 my-container"> 
    <div class="mt-3">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Enrollment</li>
        </ol>
      </nav>
    </div>
    
    <form class="row bg-light mx-3 shadow rounded">
      <div class="bg-light shadow-sm p-2 text-center h5">Learner's Infomation</div>
      <div class=" col-sm-3 mt-1 text-center ">
        <img src="../img/2x2photo.png" alt="hugenerd" style="width: 200px; height: 200px; background-color: rgba(0,0,255,.1);" class=" shadow img-fluid img-thumbnail mx-4 rounded-circle" alt="">
      </div>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-3 mt-1">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control form-control-sm shadow" id="firstName" value="Jake" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="middleName" class="form-label">Middle name</label>
            <input type="text" id="middleName" class="form-control form-control-sm shadow" value="Reno" required disabled> 
          </div>
          <div class="col-sm-3 mt-1">
            <label for="surName" class="form-label">Sur name</label>
            <input type="text" class="form-control form-control-sm shadow" id="surName" value="Garcia" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="nameExtension" class="form-label">Name Extension</label>
            <input type="text" class="form-control form-control-sm shadow" id="nameExtension" value="" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="dateOfBirth" class="form-label mt-2">Date of Birth</label>
            <input type="text" id="dateOfBirth" class="form-control form-control-sm shadow" value="02/09/2003" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="religiosAffilication" class="form-label mt-2">Religious Affilication</label>
            <input type="text" id="religiosAffilication" class="form-control form-control-sm shadow" value="Catholic" required disabled>
          </div>

          <div class="col-sm-3 mt-1">
            <label for="lrn" class="form-label mt-2">LRN</label>
            <input type="text" class="form-control form-control-sm shadow" id="lrn" value="136887090657." required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="gradeLevel" class="form-label mt-2">Grade Level</label>
            <input type="text" class="form-control form-control-sm shadow" id="gradeLevel" value="Grade 11" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="dateOfAdmission" class="form-label mt-2">Date Of Admission</label>
            <input type="text" class="form-control form-control-sm shadow" id="gradeLevel" value="06/03/2020" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="learningModality" class="form-label mt-2">Learning Modality</label>
            <input type="text" class="form-control form-control-sm shadow" id="learningModality" value="Modular (print)" required disabled>
          </div>
        </div> 
      </div>
      <div class="col-sm-12">
        <div class="row mt-3">
          <label for="completeAddres" class="h6 text-center"><u>Complete Address</u></label>
            <div class="col-sm-3 mt-1">
              <label for="houseNo" class="form-label">House #/Street/Sitio/Purok</label>
              <input type="text" id="houseNo" class="form-control form-control-sm shadow" value="" required disabled>
            </div>
          <div class="col-sm-3 mt-1">
            <label for="barangay" class="form-label">Barangay</label>
            <input type="text" id="barangay" class="form-control form-control-sm shadow" value="San Rafael" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="municipalityCity" class="form-label">Municipality/ City</label>
            <input type="text" id="municipalityCity" class="form-control form-control-sm shadow" value="Lagonoy" required disabled>
          </div>
        
          <div class="col-sm-3 mt-1">
            <label for="province" class="form-label">Province</label>
            <input type="text" id="province" class="form-control form-control-sm shadow" value="Goa Camarines Sur" required disabled>
          </div>
     
        
          <label for="parent" class="h6 text-center mt-3"><u>Parents</u></label>
          <div class="col-sm-3 mt-1">
            <label for="fathersName" class="form-label">Fathers name</label>
            <input type="text" class="form-control form-control-sm shadow" id="fathersName" value="James A. Garcia" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="mothersName" class="form-label">Mothers name</label>
            <input type="text" id="middleName" class="form-control form-control-sm shadow" value="Melody R. Garcia" required disabled> 
          </div>
          <div class="col-sm-3 mt-1">
            <label for="guardian" class="form-label">Guardian </label>
            <input type="text" class="form-control form-control-sm shadow" id="mothersName" value="" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="parentGardianNo" class="form-label">ContactNo. Parent or Guardian</label>
            <input type="text" class="form-control form-control-sm shadow" id="parentGardianNo" value="" required disabled>
          </div>
        </div>
      </div>

      <div class="container-sm bg-light shadow p-2 text-center h5 mt-3">Eligibility For SHS Enrollment</div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-3 mt-1">
            <label for="middleName" class="form-label">High School Completer</label>
            <div class="input-group-text shadow">
              <input type="checkbox" aria-label="Checkbox for following text input" value="High School Completer" checked>
            </div>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="genAve" class="form-label">Gen. Ave</label>
            <input type="number" class="form-control form-control-sm shadow" id="surName" value="85.7" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="middleName" class="form-label">Junior High School Completer</label>
            <div class="input-group-text shadow">
              <input type="checkbox" aria-label="Checkbox for following text input" value="High School Completer" checked>
            </div>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="genAve" class="form-label">Gen. Ave</label>
            <input type="number" class="form-control form-control-sm shadow" id="surName" value="85.7" required disabled>
          </div>
          <div class="col-sm-4 mt-1">
            <label for="dateOfGrad" class="form-label">Date Of Graduation/Completion</label>
            <input type="text" class="form-control form-control-sm shadow" id="dateOfGrad" value="04/18/2020" required disabled>
          </div>
          <div class="col-sm-4 mt-1">
            <label for="nameOfSchool" class="form-label">Name Of School</label>
            <input type="text" id="nameOfSchool" class="form-control form-control-sm shadow" value="Lagonoy High" required disabled>
          </div>
          <div class="col-sm-4 mt-1">
            <label for="schoolAddress" class="form-label">School Address</label>
            <input type="text" class="form-control form-control-sm shadow" id="lrn" value="Sta. Maria, Lagonoy, Camarines Sur" required disabled>
          </div>
          <div class="col-sm-3 mt-1 ">
            <label for="peptPasser" class="form-label">PEPT Passer</label>
            <div class="input-group-text shadow">
              <input type="checkbox" aria-label="Checkbox for following text input" id="peptPasser" value="" disabled>
            </div>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="ratingPept" class="form-label">Rating</label>
            <input type="number" class="form-control form-control-sm shadow" id="ratingPept" value="" required disabled>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="alsPasser" class="form-label">ALS A&E Passer</label>
            <div class="input-group-text shadow">
              <input type="checkbox" aria-label="Checkbox for following text input" id="alsPasser" value="" disabled >
            </div>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="ratingPept" class="form-label">Rating</label>
            <input type="number" class="form-control form-control-sm shadow" id="ratingPept" value="" required disabled>
          </div>
          <div class="col-sm-3 mt-1 ">
            <label for="othesPlsspecify" class="form-label">Others (PLs.Specify)</label>
            <div class="input-group-text shadow">
              <input type="checkbox" aria-label="Checkbox for following text input" id="othesPlsspecify" value="" disabled>
            </div>
          </div>
          <div class="col-sm-3 mt-1">
            <label for="dateOfExam" class="form-label">Date Of Examination/Assessment</label>
            <input type="text" class="form-control form-control-sm shadow" id="dateOfExam" value="06/03/2020" required disabled>
          </div>
          <div class="col-sm-6 mt-1">
            <label for="leaningCenter" class="form-label">Name and Address of Cummunity Learning Center</label>
            <input type="text" class="form-control form-control-sm shadow" id="leaningCenter" value="" required disabled>
          </div>
        </div>
      </div>
      <div class=" gap-2 d-sm-flex justify-content-end mt-3 mb-3">
        <button type="button" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Notify</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title " id="exampleModalLabel">Send Email to Student</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mt-1">
                  <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="jakeGAr@gmail.com" disabled>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    </div>
  </main>