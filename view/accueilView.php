
<?php

include 'headerac.php';

?>
<body>
  <div class="container d-flex flex-column h-90 w-auto">

  <h1 class="d-flex mt-5 p-2">DASHBOARD</h1>
   <!-- Button HTML (to Trigger Modal) -->
   <a href="#myModal" class="trigger-btn m-0 p-5" id="login" data-toggle="modal">Login<i class="fas fa-key fa-x3 ml-2"></i></a>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
     <div class="modal-dialog modal-login modal-lg modal-sm modal-xs">
    	 <div class="modal-content">
    		 <div class="modal-header">
    			 <div class="avatar">
    				 <img src="view/img/avatar.png" alt="connexion">
    			 </div>
    			 <h4 class="modal-title">Member Login</h4>
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		 </div>
    		 <div class="modal-body">
    			 <form action="" method="post">
    				 <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="email" required="required">
    				 </div>
    				 <div class="form-group">
    					 <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    				 </div>
    				 <div class="form-group">
    					 <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
    				 </div>
    			 </form>
    		 </div>
    		 <div class="modal-footer">
           <a href="#registred" class="trigger-btn" id="login" data-toggle="modal">Registred?</a><br>
    			 <a href="#forgotpassword" class="trigger-btn" id="login" data-toggle="modal">Forgot Password?</a><br>
           <a href="#changepassword" class="trigger-btn" id="login" data-toggle="modal">Change Password?</a><br>
    		 </div>
    	 </div>
     </div>
    </div>
    <!-- forgotpassword -->
    <div id="forgotpassword" class="modal fade">
     <div class="modal-dialog modal-login modal-lg modal-sm modal-xs">
       <div class="modal-content">
         <div class="modal-header">
           <div class="avatar">
             <img src="view/img/avatar.png" alt="connexion">
           </div>
           <h4 class="modal-title">Forgot password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
           <form action="" method="post">
             <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="email" required="required">
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">sent</button>
             </div>
           </form>
         </div>
       </div>
     </div>
    </div>
    <!-- change password -->
    <div id="changepassword" class="modal fade">
     <div class="modal-dialog modal-login modal-lg modal-sm modal-xs">
       <div class="modal-content">
         <div class="modal-header">
           <div class="avatar">
             <img src="view/img/avatar.png" alt="connexion">
           </div>
           <h4 class="modal-title">Change password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
           <form action="" method="post">
             <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="email" required="required">
             </div>
             <div class="form-group">
    					 <input type="password" class="form-control" name="password" placeholder="Actual password" required="required">
    				 </div>
             <div class="form-group">
    					 <input type="password" class="form-control" name="newpassword" placeholder="New password" required="required">
    				 </div>
             <div class="form-group">
    					 <input type="password" class="form-control" name="repeatnewpassword" placeholder="Repeat new password" required="required">
    				 </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">sent</button>
             </div>
           </form>
         </div>
       </div>
     </div>
    </div>
    <!-- registred -->
    <div id="registred" class="modal fade">
     <div class="modal-dialog modal-login modal-lg modal-sm modal-xs">
       <div class="modal-content">
         <div class="modal-header">
           <div class="avatar">
             <img src="view/img/avatar.png" alt="connexion">
           </div>
           <h4 class="modal-title">Registred</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
           <form action="" method="post">
             <div class="form-group">
               <input type="text" class="form-control" name="name" placeholder="nom" required="required">
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="firstname" placeholder="Prenom" required="required">
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="email" placeholder="email" required="required">
             </div>
             <div class="form-group">
    					 <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    				 </div>
             <div class="form-group">
    					 <input type="password" class="form-control" name="repeatpassword" placeholder="Repeat Password" required="required">
    				 </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">sent</button>
             </div>
           </form>
         </div>
       </div>
     </div>
    </div>
  </div>

<?php
include 'footer.php';
?>
