<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vidyasagar University exam portal</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!--css file-->
    <link rel="stylesheet" href="styleee.css" />
  </head>
  <body>
    <section class="sidebar">
      <a href="#" class="logo">
        <img src="logo.jpg" height="100" width="150" position="inline-flex">
        <span class="text">Vidyasagar University</span>
      </a>

      <ul class="side-menu top">
        <li class="active">
          <a href="#" class="nav-link">
            <i class="fas fa-border-all"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-chart-simple"></i>
            <span class="text">Result Analytics</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">
            <i class="fas fa-message"></i>
            <span class="text">UG/PG Notification</span>
          </a>
        </li>
      </ul>

      <ul class="side-menu">
        <li>
          <a href="#">
            <i class="fas fa-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="#" class="logout">
            <i class="fas fa-right-from-bracket"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>

    <section class="content">
      <nav>
        <i class="fas fa-bars menu-btn"></i>
        <a href="#" class="nav-link">Exam </a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="search..." />
            <button class="search-btn">
              <i class="fas fa-search search-icon"></i>
            </button>
          </div>
        </form>

        <input type="checkbox" hidden id="switch-mode" />
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="notification">
          <i class="fas fa-bell"></i>
          <span class="num">28</span>
        </a>

        <a href="#" class="profile">
          <img src="icon.jpg" alt="" />
        </a>
      </nav>

      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Exam Portal</a>
              </li>
              <i class="fas fa-chevron-right"></i>
              <li>
                <a href="#" class="active">Home</a>
              </li>
            </ul>
          </div>

          <a href="#" class="download-btn">
            <i class="fas fa-cloud-download-alt"></i>
            <span class="text">Download</span>
          </a>
        </div>

        <div class="box-info">
          <li>
            <i class="fa-solid fa-s"></i>
            <span class="text">
              <h3>Setter</h3>
              <p>Teacher </p>
            </span>
          </li>
          <li>
            <i class="fa-solid fa-m"></i>
            <span class="text">
              <h3>Moderator</h3>
              <p>Teacher </p>
            </span>
          </li>
          <li>
            <i class="fa-solid fa-e"></i>
            <span class="text">
              <h3>Examminer</h3>
              <p>Teacher</p>
            </span>
          </li>
          <li>
            <i class="fa-solid fa-r"></i>
            <span class="text">
              <h3>Reviewer</h3>
              <p>Teacher</p>
            </span>
          </li>
        </div>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3 style="color: green " ><b>Teacher Selected for the Role</b></h3>
              <i class="fas fa-search"></i>
              <i class="fas fa-filter"></i>
            </div>

            <table>
              <thead>
                <tr>
                  <th>Name of the teacher</th>
                  <th>Subject</th>
                  <th>UG/PG</th>
                  <th>Institute Name</th>
                  <th>Remaing Days</th>
                  <th>S/M/E/R</th>
                  <th>Status</th>
                 
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                     <p>Teacher Name</p>
                  </td>
                  <td>subject</td>
                                  </tr>
                <tr>
                  <td>
                     <p>teacher  Name</p>
                  </td>
                  <td>subject</td>
                                 </tr>
                <tr>
                  <td>
                     <p>Teacher Name</p>
                  </td>
                  <td>Subject</td>
                                 </tr>
                <tr>
                  <td>
                    <p>Teacher Name</p>
                  </td>
                  <td>Subject</td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                     <p>Teacher Name</p>
                  </td>
                  <td>Subject</td>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </section>
  </body>
</html>