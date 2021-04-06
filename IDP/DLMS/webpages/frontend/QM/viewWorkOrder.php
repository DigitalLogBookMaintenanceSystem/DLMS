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
    <title>Appointment</title>
  </head>
  <body id="body">
    <div class="container">


      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Appointment</h1>
              <p>Logbook of All Vehicle</p>
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
                            <th width="10%" >BA Number</th>
                            <th  width="10%">Work Order no</th>
                            <th  width="15%">Vehicle Type</th>
                            <th  width="30%">Problems</th>
                            <th  width="5%">Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>10481</td>
                            <td>1234</td>
                            <td>Jeep</td>
                            <td>Lost tire</td>
                            <td> <a href=""> <i class="fa fa-eye"></i> </a> </td>
                          </tr>
                          <tr>
                            <td>10485</td>
                            <td>12345</td>
                            <td>3 ton</td>
                            <td>broken window</td>
                            <td> <a href=""> <i class="fa fa-eye"></i> </a> </td>
                          </tr>
                          <tr>
                            <td>10451</td>
                            <td>1254</td>
                            <td>motorcycle</td>
                            <td>broken brake</td>
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
            <h1>Appointment</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link">
            <i class="fa fa-home"></i>
            <a href="homePage.php">Dashboard</a>
          </div>
          <h2>Logbook</h2>
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewLogBook.php">View Logbook</a>
          </div>
          <h2>Work Order</h2>
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-eye"></i>
            <a href="viewWorkOrder.php">View All</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-plus"></i>
            <a href="newWorkOrder.php">New Work Order</a>
          </div>
          <h2>Other</h2>
          <div class="sidebar__link">
            <i class="fa fa-pencil"></i>
            <a href="editProfileInfo.php">Edit Profile Info</a>
          </div>
          <div class="sidebar__link">
            <i class="las la-clipboard-check"></i>
            <a href="report.php">Completion Report</a>
          </div>
          <div class="sidebar__link">
            <i class="lar la-calendar-plus"></i>
            <a href="addToCalender.php">Add reminder</a>
          </div>
          <div class="sidebar__link ">
            <i class="las la-envelope"></i>
            <a href="askForAuthorization.php ">Ask For Authorization</a>
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
