<div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="card text-black" style="border-radius: 25px; background: url({{asset('images/aktiv1.jpg')}}) no-repeat fixed center; background-size: cover;">
        <div class="card-body p-md-5">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
              <form class="mx-1 mx-md-4">
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa fa-user fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    {{-- <input type="text" id="form3Example1c" class="form-control" /> --}}
                    <input type="text" name="name" id="form3Example1c" class="form-control" placeholder="Your Name" />
                    {{-- <label class="form-label" for="form3Example1c">Your Name</label> --}}
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa fa-envelope fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    {{-- <input type="email" id="form3Example3c" class="form-control" /> --}}
                    <input type="text" name="email" id="form3Example1c" class="form-control" placeholder="Your Email" />
                    {{-- <label class="form-label" for="form3Example3c">Your Email</label> --}}
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa fa-lock fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    {{-- <input type="password" id="form3Example4c" class="form-control" /> --}}
                    <input type="text" name="password" id="form3Example1c" class="form-control" placeholder="Password" />
                    {{-- <label class="form-label" for="form3Example4c">Password</label> --}}
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa fa-key fa-lg me-3 fa-fw"></i>
                  <div class="form-outline flex-fill mb-0">
                    {{-- <input type="password" id="form3Example4cd" class="form-control" /> --}}
                    <input type="text" name="password" id="form3Example1c" class="form-control" placeholder="Repeat your password" />
                    {{-- <label class="form-label" for="form3Example4cd">Repeat your password</label> --}}
                  </div>
                </div>
                <div class="form-check mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                  <label class="form-check-label" for="form2Example3">
                    I agree all statements in. Terms of service.
                  </label>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <button type="button" class="btn btn-primary btn-lg">Register</button>
                </div>
                <div class="text-subtitle">
                    <p>Already have an account? <a class="login" href="#" data-toggle="modal" data-target="#login"> Sign in</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>