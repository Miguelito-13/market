<h1 align="center"> Edit your Account </h1>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group"><!-- form-group Start -->

    <label> Customer Name: </label>

    <input type="text" class="form-control" name="c_name" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label> Customer Email: </label>

    <input type="text" class="form-control" name="c_email" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Gender </label>
      <select name="c_gender" id="" class="form-control" required>
        <option>Please choose</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>City </label>
    <input type="text" class="form-control" name="c_city" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Complete Address </label>
    <input type="text" class="form-control" name="c_address" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Zip Code </label>
    <input type="text" class="form-control" name="c_zip" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Contact no. </label>
    <input type="text" class="form-control" name="c_contact" required>

  </div><!-- form-group Finish -->

  <div class="form-group"><!-- form-group Start -->

    <label>Profile Picture </label>
    <input type="file" class="form-control" name="c_image">

  </div><!-- form-group Finish -->

  <div class="text-center"><!-- text-center Start -->

    <button name="update" class="btn btn-primary">
      <i class="fa fa-user-md"></i> Update account
    </button>

  </div><!-- text-center Finish -->

</form>