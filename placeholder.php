<?php
include_once('components/header.php');
include('components/register.php');
include('components/login.php')

?>
<!--HTML-->
<!--login/reg buttons-->
<div class="main" id="main">
  <div class="buttons" id="buttons">
    <button class="btn btn1" id="register">Register</button>
    <button class="btn btn2" id="login">Login</button>
  </div>
  <!--hidden register/login-->
  <!--register-->
  <div
    class="regform d-flex justify-content-center align-items-center"
    id="regform"
  >
    <form name="form1" method="POST" action="">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full name</label>
        <input
          type="text"
          name="name"
          class="form-control"
          id="fullname"
          required="required"
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="email"
          name="email"
          class="form-control"
          id="email"
          required="required"
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input
          type="text"
          name="username"
          class="form-control"
          id="username"
          required="required"
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
          type="password"
          required="required"
          name="password"
          class="form-control"
          id="password"
        />
      </div>
      <button
        type="submit"
        name="submitreg"
        class="btn btn-warning"
        id="regbtn"
      >
        Register
      </button>
      <button type="button" class="btn btn-warning" id="closebtn">
        <i class="far fa-window-close"></i>
      </button>
    </form>
  </div>
  <!--loginform-->
  <div
    class="loginform d-flex justify-content-center align-items-center"
    id="loginform"
  >
    <form method="POST" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input
          type="text"
          name="username"
          class="form-control"
          required="required"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
        />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          name="password"
          required="required"
          id="exampleInputPassword1"
        />
      </div>
      <button
        type="submit"
        name="submitlog"
        value="submitlog"
        class="btn btn-warning"
        id="loginbtn"
      >
        Login
      </button>
      <button type="button" class="btn btn-warning" id="closebtn2">
        <i class="far fa-window-close"></i>
      </button>
    </form>
  </div>
</div>
<!--script-->
<script src="js/login.js"></script>


<?php
include_once('components/footer.php');
?>