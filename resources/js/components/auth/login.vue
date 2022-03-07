<template>
  <div class="authincation h-100">
    <div class="container-fluid h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <h4 class="text-center mb-4">Sign in System</h4>
                  <form action="">
                    <div class="form-group">
                      <label><strong>Email</strong></label>
                      <input
                        type="email"
                        placeholder="Enter mail address"
                        class="form-control"
                        value=""
                      />
                    </div>
                    <div class="form-group">
                      <label><strong>Password</strong></label>
                      <input type="password" class="form-control" value="" />
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                      <div class="form-group">
                        <div class="form-check ml-2">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            id="basic_checkbox_1"
                          />
                          <label class="form-check-label" for="basic_checkbox_1"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <div class="form-group">
                        <router-link to="/forget">Forget-password</router-link>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">
                        Sign me in
                      </button>
                    </div>
                  </form>
                  <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="./page-register.html">Sign up</a></p>
                                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.card-body {
  background-color: #050a14;
}
</style>
