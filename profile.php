<?php
 error_reporting (0);
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
  }else{
  include "partials/_dbconnect.php";
  $email1 = $_SESSION['email'];
  $query =  "select * from register where email = '$email1'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $phno = $row['phno'];
  $doj = $row['date_join'];
  $doe = $row['date_end'];
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
      body {
        margin-top: 20px;
        background-color: #f2f6fc;
        color: #69707a;
      }
      .img-account-profile {
        height: 10rem;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }
      .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
      }
      .card .card-header {
        font-weight: 500;
      }
      .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
      }
      .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
      }
      .form-control,
      .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }

      .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
      }
      .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
      }
    </style>
  </head>
  <body>
    <?php require "partials/_nav.php"; ?>
    
      
    <div class="row my-5 py-5 mx-3">
      <div class="col-xl-4">
        <!-- Profile picture card -->
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">
            <!-- Profile picture image -->
            <img
              class="img-account-profile rounded-circle mb-2"
              src="http://bootdey.com/img/Content/avatar/avatar1.png"
              alt=""
            />
            <!-- Profile picture help block -->
            <div class="small font-italic text-muted mb-4">
              JPG or PNG no larger than 5 MB
            </div>
            <!-- Profile picture upload button -->
            <button class="btn btn-primary" type="button">
              Upload new image
            </button>
          </div>
        </div>
      </div>
      <div class="col-xl-8 ">
        <!-- Account details card-->
        <div class="card mb-4">
          <div class="card-header">Account Details</div>
          <div class="card-body">
            <form>
              <!-- Form Group (username)-->
              <!-- <div class="mb-3">
                <label class="small mb-1" for="inputUsername">Username</label>
                <input
                  class="form-control"
                  id="inputUsername"
                  type="text"
                  placeholder="Enter your username"
                  value="username"
                />
              </div> -->
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (first name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputFirstName"
                    >First name</label
                  >
                  <input
                    class="form-control"
                    id="inputFirstName"
                    type="text"
                    placeholder="Enter your first name"
                    value= <?php echo $fname ?>
                  />
                </div>
                <!-- Form Group (last name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLastName"
                    >Last name</label
                  >
                  <input
                    class="form-control"
                    id="inputLastName"
                    type="text"
                    placeholder="Enter your last name"
                    value=<?php echo $lname ?>
                  />
                </div>
              </div>
              <!-- Form Row        -->
              <!-- Form Group (email address)-->
              
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <div class="col-md-6">
                  <label class="small mb-1" for="inputEmailAddress"
                    >Email address</label
                  >
                  <input
                    class="form-control"
                    id="inputEmailAddress"
                    type="email"
                    placeholder="Enter your email address"
                    value=<?php echo $email ?>
                  />
                </div>
                <!-- Form Group (phone number)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputPhone"
                    >Phone number</label
                  >
                  <input
                    class="form-control"
                    id="inputPhone"
                    type="tel"
                    placeholder="Enter your phone number"
                    value=<?php echo $phno ?>
                  />
                </div>
                <!-- Form Group (birthday)-->
                <!-- <div class="col-md-6">
                  <label class="small mb-1" for="inputBirthday">Birthday</label>
                  <input
                    class="form-control"
                    id="inputBirthday"
                    type="text"
                    name="birthday"
                    placeholder="Enter your birthday"
                    value="06/10/1988"
                  />
                </div> -->
              </div>
              <div class="row gx-3 mb-3">
                <div class="col-md-6">
                  <label class="small mb-1" for="date-join"
                    >Date of Joining</label
                  >
                  <input
                    class="form-control"
                    id="date-join"
                    type="text"
                    value=<?php echo $doj ?>
                    disabled="disabled"
                  />
                </div>
                <div class="col-md-6">
                  <label class="small mb-1" for="date-end">Date of Ending</label>
                  <input
                    class="form-control"
                    id="date-end"
                    type="text"
                    name="date-end"
                    value=<?php echo $doe ?>
                    disabled="disabled"
                  />
                </div>
              </div>
              <!-- Save changes button-->
              <button class="btn btn-primary" type="button">
                Save changes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
