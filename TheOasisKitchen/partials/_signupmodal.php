
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign up </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form method="POST" action="partials/_signup_handle.php">
                <div class="modal-body">
                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="cpassword" class="form-control" id="cpassword" name="cpassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mobile No</label>
                        <input type="number" class="form-control" id="" name="mobileno">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
            </form>
    </div>
  </div>
</div>