<?php include "./header.php"; ?>

<center>

<div class="login-form">

<form action="./includes/login.inc.php" method="post">
  
  <div class="form-field1">
    
    <input type="text" placeholder="Email / Username" name="user" required/>
  </div>
  
  <div class="form-field2">
    <input type="password" placeholder="Password" name="pass" required/>                      
   </div>
  
  <div class="form-field">
    <button class="btn-log" type="submit" name="login" style=" outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 0.9rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: rgb(211, 26, 26);
  border-radius: 100px;
  
  font-size: 17px;
">Log in</button>
  </div>
</form>

</center>

</div>



<?php include "./footer.php"; ?>