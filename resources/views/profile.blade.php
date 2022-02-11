@extends('layouts.main')

@section('content')

  <div class="container my-5 flex-fill">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <form action="" method="post">
          @csrf
          <div class="card">
            <div class="card-body">
              <h3>Profile</h3>
              <div class="row mb-3">
                <label class="col-sm-6 col-form-label">First Name</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control"  required/>
                </div>
              </div>
                <div class="row mb-3">
                    <label class="col-sm-6 col-form-label">Last Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-6 col-form-label">Gender</label>
                    <div class="form-check col-sm-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check col-sm-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-6 col-form-label">Role</label>
                    <div class="col-sm-6">
                        <label class="col-form-label border rounded text-center" style="width: 20%">User</label>
                    </div>
                </div>

              <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Email</p>
                <div class="col-sm-6">
                  <label class="col-form-label">Email@mail.com</label>
                </div>
              </div>

                <div class="row mb-3">
                    <label class="col-form-label col-sm-6" for="inputGroupFile01">Display Picture</label>
                    <div class="col-sm-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>

              <div class="d-grid gap-2 d-md-block">
                <a href="/" class="btn btn-warning">Back to Home</a>
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/profile/password" class="btn btn-warning">Change Password</a>
              </div>



            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
