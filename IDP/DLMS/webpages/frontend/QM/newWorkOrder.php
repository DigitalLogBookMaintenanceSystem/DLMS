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
              <p>Welcome to your admin dashboard</p>
            </div>
          </div>
          <!-- MAIN TITLE ENDS HERE -->
          <!-- MAIN CARDS STARTS HERE -->
          <div class="form-container">
            <!-- compy from here to the amin part -->
            <div class="form-title">Add new Work Order</div>
            <div class="form-content">
              <form action="viewWorkOrder.php">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Unit / Institution / Organization</span>
                    <input type="text" placeholder="Enter name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Area/ Station</span>
                    <input type="text" placeholder="Enter place" required>
                  </div>
                  <div class="input-box">
                    <span class="details">BA No</span>
                    <input type="text" placeholder="Enter BA-No" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date </span>
                    <input type="date"  required>
                  </div>
                  <div class="input-box">
                  <span class="details" for="auth">Authority</span>
                     <select name="auth" id="auth" required>
                        <option value="Comdt">Comdt</option>
                        <option value="CO">CO</option>
                        <option value="2IC">2IC</option>
                    </select>
                  </div>
                  <div class="input-box">
                    <span class="details">Creation/Manufacture</span>  <!-- option box better -->
                    <input type="text" placeholder="Enter Here" required>
                  </div>
                  <div class="input-box">
                    <div class="problems">
                      <span class="details">Problems</span>  <!-- option box better -->
                      <textarea name="problem" rows="5" cols ="60"
                      placeholder="Enter your Problems here"  required > </textarea>
                    </div>
                  </div>
                  
                  <div class="input-box">
                    <span class="details">Hard Cash Payment(if any)</span>  <!-- option box better -->
                    <input type="text" placeholder="Enter Amount" value="">
                  </div>
                </div>
                <div class="button">
                  <input type="reset" value="Clear">
                
                  <input type="submit" value="Create">
                </div>
              </form>
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
          <div class="sidebar__link">
            <i class="fa fa-eye"></i>
            <a href="viewWorkOrder.php">View All</a>
          </div>
          <div class="sidebar__link active_menu_link">
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
