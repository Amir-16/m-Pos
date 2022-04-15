<template>
  <div class="authincation h-100">
    <div class="container-fluid h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <h4 class="text-center mb-4">Add User</h4>
                  <form action="index.html">
                    <div class="form-group">
                      <label><strong>Username</strong></label>
                      <input type="text" class="form-control" placeholder="username" />
                    </div>
                    <div class="form-group">
                      <label><strong>Email</strong></label>
                      <input
                        type="email"
                        class="form-control"
                        placeholder="hello@example.com"
                      />
                    </div>
                    <div class="form-group">
                      <label><strong>Password</strong></label>
                      <input type="password" class="form-control" value="Password" />
                    </div>
                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-primary btn-block">
                        Sign me up
                      </button>
                    </div>
                  </form>
                  <div class="new-account mt-3">
                    <p>
                      Already have an account?
                      <router-link to="/">Sign-in</router-link>
                    </p>
                  </div>
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

<style></style>
