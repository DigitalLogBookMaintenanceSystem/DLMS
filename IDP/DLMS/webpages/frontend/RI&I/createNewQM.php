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
            <div class="form-title">Add New Quarter Master/User</div>
            <div class="form-content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Unit Name</span>
                    <input type="text" placeholder="Enter Unit name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Corps/Institution</span>
                    <select name="corps" id="corps" required>
                        <option value="Infantry">Infantry</option>
                        <option value="Artillery">Artillery</option>
                        <option value="Armoured">Armoured</option>
                        <option value="Signals">Signals</option>
                        <option value="Engineers">Engineers</option>
                        <option value="ASC">ASC</option>
                        <option value="Ordnance">Ordnance</option>
                        <option value="Trg School">Trg School</option>
                        <option value="Any Institution">Any Institution</option>
                        <option value="Any Organizations">Any Organizations</option>
                        <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="input-box">
                    <span class="details">Authorized Email</span>
                    <input type="text" placeholder="Enter Email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Appointment Registered</span>
                    <select name="appt" id="appt" required>
                        <option value="QM">QM</option>
                        <option value="DQ">DQ</option>
                    </select>
                  </div>
                </div>
                <div class="button">
                  <input type="reset" value="Clear">
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
          <div class="sidebar__link ">
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
          <div class="sidebar__link active_menu_link">
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
