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
              <p>Ask For Authorization From RI&I</p>
            </div>
          </div>

          <div class="register-form">
            <div class="reg-title">
              Registration
            </div>
            <div class="reg-content">
              <div class="reg-details">
                <div class="reg-to">
                    <div class="reg-to-title"> Registered To </div>
                    <div class="input-box">
                      <span class="details">Workshop Name</span>
                      <input type="text" value="703 Medium Workshop" disabled>
                    </div>
                    <div class="input-box">
                      <span class="details">RI&I Email</span>
                      <input type="text" value="abcd@gmail.com" disabled>
                    </div>
                </div>
                <div class="reg-under">
                  <div class="reg-under-title"> Registered Under Identity </div>
                  <div class="input-box">
                  <span class="details">Unit Name</span>
                        <input type="text" value="11 Signal Battalion" disabled>
                  </div>
                  <div class="input-box">
                  <span class="details">Corps</span>
                        <input type="text" value="Signals" disabled>
                  </div>
                  <div class="input-box">
                  <span class="details">Appointment</span>
                        <input type="text" value="QM" disabled>
                  </div>
                  <div class="input-box">
                  <span class="details">Email</span>
                        <input type="text" value="zabulanakakil@gmail.com" disabled>
                  </div>
                </div>
              </div>
            </div>
          
          </div>

          <div class="form-container">
            <!-- compy from here to the amin part -->
            <div class="form-title">Change Authority(if required)</div>
            <div class="form-content">
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Unit Name</span>
                    <input type="text" value="11 Signal Battalion" PlaceHolder="Unit Name"required>
                  </div>
                  <div class="input-box">
                    <span class="details">Corps</span>
                    <select name="corps" id="corps"  required>
                        <option value="Infantry">Infantry</option>
                        <option value="Artillery">Artillery</option>
                        <option value="Armoured">Armoured</option>
                        <option value="Signals" selected>Signals</option>
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
                    <span class="details">Corps</span>
                    <select name="corps" id="corps"  required>
                        <option value="Infantry">Infantry</option>
                        <option value="Artillery">Artillery</option>
                    </select>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text"  value="zabulanakakil@gmail.com" PlaceHolder="Enter Email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email of RI&I</span>
                    <input type="text"   PlaceHolder="Enter Email" required>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" value="Send">
                </div>
              </form>
            </div>
          </div>
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
          <div class="sidebar__link ">
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
          <div class="sidebar__link ">
            <i class="lar la-calendar-plus"></i>
            <a href="addToCalender.php ">Add reminder</a>
          </div>
          <div class="sidebar__link active_menu_link">
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
