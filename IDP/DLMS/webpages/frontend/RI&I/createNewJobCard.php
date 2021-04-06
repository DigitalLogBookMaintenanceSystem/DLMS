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
            <div class="form-title">Add new Job Card</div>
            <div class="form-content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Unit / Institution / Organization</span>
                    <input type="text" placeholder="Enter name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">BA No</span>
                    <input type="text" placeholder="Enter BA-No" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date of placing in workstation</span>
                    <input type="date"  required>
                  </div>
                  <div class="input-box">
                    <span class="details">Oil stored before entering</span>  <!-- option box better -->
                    <input type="text" placeholder="Enter running KM" required>
                  </div>
                  <div class="input-box">
                    <span class="details">current kilometer</span>  <!-- option box better -->
                    <input type="text" placeholder="Enter running KM" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Vehicle Type</span>  <!-- option box better -->
                    <input type="text" placeholder="Enter vehicle type" required>
                  </div>
                  <div class="input-box">
                    <div class="problems">
                      <span class="details">Problems</span>  <!-- option box better -->
                      <textarea name="problem" rows="5" cols ="50" resize="vertical"
                      placeholder="Enter your Problems here" required > </textarea>
                    </div>
                  </div>
                  <div class="input-box">
                    <div class="specifics">  
                      <span class="details">Vehicle Structure</span>  <!-- option box better -->
                      <input type="text" placeholder="Enter details" required >
                    </div>
                  </div>
                </div>
                <div class="button">
                  <input type="reset" value="Clear">
                
                  <input type="submit" value="Create">
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
          <div class="sidebar__link active_menu_link">
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
