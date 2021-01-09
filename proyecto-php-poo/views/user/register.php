<h1>Register new user</h1>

<?php 
    if(isset($_SESSION['register']) && $_SESSION['register']){
        echo "Registro completed";
    }else{
        echo "Error in register";
    }
?>


<form action="<?=base_url?>usuario/save" method="POST">
    <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
        <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="lastname" class="form-control" id="floatingInput" placeholder="Lastname">
        <label for="floatingInput">Lastname</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <p></p>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Register</button>
  </div>
</form>