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
              <h1>Appointment- Unit Name</h1>
              <p>Welcome to your admin dashboard</p>
            </div>
          </div>
          <!-- MAIN TITLE ENDS HERE -->
          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <i
                class="fa fa-book fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Total Logbooks</p>
                <!-- number will be counted by the db -->
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i class="fa fa-car fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Jeep</p>
                <!-- number will be counted by the db -->
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i
                class="las la-truck-pickup la-2x text-yellow"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">P-Ups</p>
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-truck fa-2x text-green"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">3 Tons</p>
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-motorcycle fa-2x text-blue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Motor cycle</p>
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-bus fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Micro Bus</p>
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i
                class="las la-bus-alt la-2x text-red"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Bus</p>
                <span class="font-bold text-title">???</span>
              </div>
            </div>


          </div>
          <!-- MAIN CARDS ENDS HERE -->
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
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="homePage.php">Dashboard</a>
          </div>
          <h2>Logbook</h2>
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewLogBook.php">View Logbook</a>
          </div>
          <h2>Work Order</h2>
          <div class="sidebar__link">
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
