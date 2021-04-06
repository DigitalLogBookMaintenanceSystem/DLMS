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
    <link rel="stylesheet" href="table.css" />
    <title>Repair Inspection and I</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          <a class="active_link" href="homeQm.php">Quarter Master</a>
          <a href="homeLogBook.php">Log Book</a>
          <a href="homeAdmin.php">Admin</a>
        </div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a href="#">
            <img width="30" src="assets/avatar.svg" alt="" />
            <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
          </a>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>R I & I </h1>
              <p>Welcome to your admin dashboard</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <i
                class="fa fa-user fa-2x text-blue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Total number of QMs</p>
                <!-- number will be counted by the db -->
                <span class="font-bold text-title">???</span>
              </div>
            </div>

            <div class="card">
              <i class="fa fa-user-o fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Auth Holder</p>
                <!-- number will be counted by the db -->
                <span class="font-bold text-title">???</span>
              </div>
            </div>

          </div>
          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->

          <!-- CHARTS ENDS HERE -->
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
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="homeAdmin.php">Dashboard</a>
          </div>
          <h2>Logbook</h2>
          <div class="sidebar__link">
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

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
