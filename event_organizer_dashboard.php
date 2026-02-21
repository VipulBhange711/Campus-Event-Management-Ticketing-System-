<?php include 'include/head.html'; ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
     
    <?php include 'include/navbar.html'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <?php include 'include/sidebar.html'; ?>

      <!-- partial -->
      <div class="main-panel">
       <div class="content-wrapper">

  <!-- Page Title -->
  <div class="row mb-4">
    <div class="col-md-12">
      <h3 class="font-weight-bold">Event Organizer Dashboard</h3>
      <p class="text-muted">Manage your events and track registrations</p>
    </div>
  </div>

  <!-- Summary Cards -->
  <div class="row">

    <!-- Total Events -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h4>Total Events</h4>
          <h2>12</h2>
        </div>
      </div>
    </div>

    <!-- Active Events -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h4>Active Events</h4>
          <h2>5</h2>
        </div>
      </div>
    </div>

    <!-- Total Registrations -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-warning text-white">
        <div class="card-body">
          <h4>Total Registrations</h4>
          <h2>320</h2>
        </div>
      </div>
    </div>

    <!-- Total Revenue -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-danger text-white">
        <div class="card-body">
          <h4>Total Revenue</h4>
          <h2>₹ 25,000</h2>
        </div>
      </div>
    </div>

  </div>

  <!-- Quick Actions -->
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-header">
          <h5>Quick Actions</h5>
        </div>
        <div class="card-body d-flex justify-content-around">

          <a href="create-event.php" class="btn btn-primary">
            <i class="icon-plus"></i> Create Event
          </a>

          <a href="manage-events.php" class="btn btn-info">
            <i class="icon-folder"></i> Manage Events
          </a>

          <a href="registrations.php" class="btn btn-success">
            <i class="icon-users"></i> View Registrations
          </a>

          <a href="profile.php" class="btn btn-dark">
            <i class="icon-user"></i> My Profile
          </a>

        </div>
      </div>
    </div>
  </div>

  <!-- Recent Events Table -->
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <h4 class="card-title">My Recent Events</h4>

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="bg-light">
                <tr>
                  <th>Event Title</th>
                  <th>Date</th>
                  <th>Venue</th>
                  <th>Fee</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Tech Fest 2026</td>
                  <td>15 Mar 2026</td>
                  <td>Main Auditorium</td>
                  <td>₹ 500</td>
                  <td><span class="badge badge-success">Published</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>

                <tr>
                  <td>Coding Competition</td>
                  <td>20 Mar 2026</td>
                  <td>Lab 3</td>
                  <td>Free</td>
                  <td><span class="badge badge-warning">Draft</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

</div>
        <!-- content-wrapper ends -->
          <?php include 'include/foot.html'; ?>