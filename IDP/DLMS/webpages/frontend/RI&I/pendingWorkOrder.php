<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="table.css" />
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
              <p>Pending Work orders</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->


          <!-- Table STARTS HERE -->

          <div class="table">
            <div class="search-box">


            </div>
            <div class="table-head">
                <table class="content-table">
                        <thead>
                          <tr>
                            <th width="20%" >BA Number</th>
                            <th  width="30%">Unit</th>
                            <th  width="25%">Vehicle Type</th>
                            <th  width="10%">Info</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>10481</td>
                            <td>11 Signal Battalion</td>
                            <td>Jeep</td>
                            <td> <a href=""> <i class="fa fa-eye"></i> </a> </td>
                          </tr>
                          <tr>
                            <td>10485</td>
                            <td>37 AD Regt</td>
                            <td>3 ton</td>
                            <td> <a href=""> <i class="fa fa-eye"></i> </a> </td>
                          </tr>
                          <tr>
                            <td>10451</td>
                            <td>5 Signal Battalion</td>
                            <td>motorcycle</td>
                            <td> <a href=""> <i class="fa fa-eye"></i> </a> </td>
                          </tr>
                        </tbody>
                      </table>
            </div>

          </div>


          <!-- Table ENDS HERE -->
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
          <div class="sidebar__link">
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
          <div class="sidebar__link active_menu_link">
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
