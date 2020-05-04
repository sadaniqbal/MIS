<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Traquer | Admin</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="plugins/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css" />
    <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css" />
    <link
      rel="stylesheet"
      href="plugins/perfect-scrollbar/css/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css" />
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/weather-icons/css/weather-icons.min.css"
    />
    <link rel="stylesheet" href="plugins/c3/c3.min.css" />
    <link
      rel="stylesheet"
      href="plugins/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="dist/css/theme.min.css" />
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <div class="wrapper">
      <header class="header-top" header-theme="light">
        <div class="container-fluid">
          <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
              <button
                type="button"
                class="btn-icon mobile-nav-toggle d-lg-none"
              >
                <span></span>
              </button>

              <button type="button" id="navbar-fullscreen" class="nav-link">
                <i class="ik ik-maximize"></i>
              </button>
            </div>
            <div class="top-menu d-flex align-items-center">
              <h3 style="padding-top: 10%;">Hi Sadan!</h3>
            </div>
            <div class="top-menu d-flex align-items-center">
              <div class="dropdown">
                <div
                  class="dropdown-menu dropdown-menu-right notification-dropdown"
                  aria-labelledby="notiDropdown"
                >
                  <h4 class="header">Notifications</h4>
                  <div class="notifications-wrap">
                    <a href="#" class="media">
                      <span class="d-flex">
                        <i class="ik ik-check"></i>
                      </span>

                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >Invitation accepted</span
                        >
                        <span class="media-content"
                          >Your have been Invited ...</span
                        >
                      </span>
                    </a>
                    <a href="#" class="media">
                      <span class="d-flex">
                        <img
                          src="/images/Sadan1-crop.jpg"
                          class="rounded-circle"
                          alt=""
                        />
                      </span>
                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >Steve Smith</span
                        >
                        <span class="media-content"
                          >I slowly updated projects</span
                        >
                      </span>
                    </a>

                    <a href="#" class="media">
                      <span class="d-flex">
                        <i class="ik ik-calendar"></i>
                      </span>
                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >To Do</span
                        >
                        <span class="media-content"
                          >Meeting with Nathan on Friday 8 AM ...</span
                        >
                      </span>
                    </a>
                  </div>
                  <div class="footer">
                    <a href="javascript:void(0);">See all activity</a>
                  </div>
                </div>
              </div>

              <div class="dropdown">
                <div
                  class="dropdown-menu dropdown-menu-right menu-grid"
                  aria-labelledby="menuDropdown"
                >
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Dashboard"
                    ><i class="ik ik-bar-chart-2"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Message"
                    ><i class="ik ik-mail"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Accounts"
                    ><i class="ik ik-users"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Sales"
                    ><i class="ik ik-shopping-cart"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Purchase"
                    ><i class="ik ik-briefcase"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Pages"
                    ><i class="ik ik-clipboard"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Chats"
                    ><i class="ik ik-message-square"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Contacts"
                    ><i class="ik ik-map-pin"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Blocks"
                    ><i class="ik ik-inbox"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Events"
                    ><i class="ik ik-calendar"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Notifications"
                    ><i class="ik ik-bell"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="More"
                    ><i class="ik ik-more-horizontal"></i
                  ></a>
                </div>
              </div>
              <!-- Dropdown User Photo-->
              <div class="dropdown">
                <a
                  class="dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img class="avatar" src="img/user.jpg" alt=""
                /></a>
                <div
                  class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="profile.html"
                    ><i class="ik ik-user dropdown-icon"></i> Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="ik ik-settings dropdown-icon"></i> Settings</a
                  >
                  <a class="dropdown-item" href="#"
                    ><span class="float-right"
                      ><span class="badge badge-primary">6</span></span
                    ><i class="ik ik-mail dropdown-icon"></i> Inbox</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="ik ik-navigation dropdown-icon"></i> Message</a
                  >
                  <a class="dropdown-item" href="login.html"
                    ><i class="ik ik-power dropdown-icon"></i> Logout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="page-wrap">
        <div class="app-sidebar colored">
          <div class="sidebar-header">
            <center>
              <img
                src="/images/traquer-logo-main.png"
                style="
                  padding-top: 10%;
                  padding-bottom: 10%;
                  width: 70% !important;
                  height: 120% !important;
                "
              />
            </center>
          </div>

          <div class="sidebar-content">
            <div class="nav-container">
              <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                  <a href="index.html"
                    ><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/premises.html"
                    ><i class="ik ik-menu"></i><span>Premises</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/devices.html"
                    ><i class="ik ik-menu"></i><span>Devices</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/checkpoints.html"
                    ><i class="ik ik-menu"></i><span>Checkpoints</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/events.html"
                    ><i class="ik ik-menu"></i><span>Events</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/event-mapping.html"
                    ><i class="ik ik-menu"></i><span>Event Mapping</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="/admin/pages/users.html"
                    ><i class="ik ik-menu"></i><span>Users</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>
              </nav>
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block"
              >Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span
            >
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center"
              >Crafted with <i class="fa fa-heart text-danger"></i> by
              <a href="http://lavalite.org/" class="text-dark" target="_blank"
                >Lavalite</a
              ></span
            >
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
