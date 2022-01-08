<div class="panel panel-default sidebar-menu"><!-- panel Start -->

  <div class="panel-heading"><!-- panel-heading Start -->

    <center>
      <img class="img-responsive" src="customer_images/blank_profile.png" alt="Profile">
    </center>

    <br/>

    <h3 align="center" class="panel-title">
      Name: Real User
    </h3>

  </div><!-- panel-heading Finish -->

  <div class="panel-body"><!-- panel-body Start -->

    <ul class="nav-pills nav-stacked nav">
      <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; }?>">
        <a href="my_account.php?my_orders">
          <i class="fa fa-list"></i> My Orders
        </a>
      </li>

      <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; }?>">
        <a href="my_account.php?edit_account">
          <i class="fa fa-pencil"></i> Edit Account
        </a>
      </li>

      <li class="<?php if(isset($_GET['change_password'])){ echo "active"; }?>">
        <a href="my_account.php?change_password">
          <i class="fa fa-lock"></i> Change Password
        </a>
      </li>

      <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; }?>">
        <a href="my_account.php?delete_account">
          <i class="fa fa-trash-o"></i> Delete Account
        </a>
      </li>

      <li>
        <a href="logout.php">
          <i class="fa fa-sign-out"></i> Log out
        </a>
      </li>
    </ul>

  </div><!-- panel-body Finish -->

</div><!-- panel Finish -->