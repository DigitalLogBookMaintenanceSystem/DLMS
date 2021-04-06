<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Repair Inspection and I</title>
  </head>
  <body id="body">
    <div class="container">


      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>R I & I </h1>
              <p>Logbook of All Units</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->


          <!-- Form STARTS HERE -->

          <div class="form-container">
            <!-- compy from here to the amin part -->
            <div class="form-title">Registration</div>
            <div class="form-content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Confirm your password" required>
                  </div>
                </div>
                <div class="gender-details">
                  <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3">
                  <span class="gender-title">Gender</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                  </label>
                  <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                    </label>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Register">
                </div>
              </form>
            </div>
          </div>


          <!-- Form ENDS HERE -->
        </div>
      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="assets/logo.png" alt="logo" />
            <h1>RI&I</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link ">
            <i class="fa fa-home"></i>
            <a href="homeAdmin.php">Dashboard</a>
          </div>
          <h2>Logbook</h2>
          <div class="sidebar__link ">
            <i class="fa fa-eye"></i>
            <a href="viewLogBook.php">View Logbook</a>
          </div>
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <a href="createNewLogBook.php">New Logbook</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="updateLogBook.php">Update Logbook</a>
          </div>
          <h2>QM</h2>
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewQMList.php">View QM List</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-plus"></i>
            <a href="createNewQM.php">New QM</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="updateQMList.php">Update List</a>
          </div>
          <h2>Job card</h2>
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewAllJobCard.php">View Job Cards</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-plus"></i>
            <a href="createNewJobCard.php">create new</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-wrench"></i>
            <a href="updateJobCard.php">update Job card</a>
          </div>
          <h2>Workorders</h2>
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewWorkOrder.php">View Work Orders</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-spinner fa-spin"></i>
            <a href="pendingWorkOrder.php">Pending Work orders</a>
          </div>
          <!-- logout -->
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="../logIn.php">Log out</a>
          </div>

        </div>
      </div>
    </div>




  </body>
</html>
