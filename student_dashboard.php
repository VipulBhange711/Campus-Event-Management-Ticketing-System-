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
      <h3 class="font-weight-bold">Student Dashboard</h3>
      <p class="text-muted">Browse events, manage registrations and download tickets</p>
    </div>
  </div>

  <!-- Summary Cards -->
  <div class="row">

    <!-- Total Registered Events -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h4>Registered Events</h4>
          <h2>6</h2>
        </div>
      </div>
    </div>

    <!-- Upcoming Events -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h4>Upcoming Events</h4>
          <h2>3</h2>
        </div>
      </div>
    </div>

    <!-- Completed Events -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-info text-white">
        <div class="card-body">
          <h4>Completed Events</h4>
          <h2>2</h2>
        </div>
      </div>
    </div>

    <!-- Total Amount Spent -->
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-danger text-white">
        <div class="card-body">
          <h4>Total Spent</h4>
          <h2>₹ 1,500</h2>
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

          <a href="browse-events.php" class="btn btn-primary">
            <i class="icon-calendar"></i> Browse Events
          </a>

          <a href="my-registrations.php" class="btn btn-success">
            <i class="icon-list"></i> My Registrations
          </a>

          <a href="my-tickets.php" class="btn btn-info">
            <i class="icon-ticket"></i> My Tickets
          </a>

          <a href="profile.php" class="btn btn-dark">
            <i class="icon-user"></i> My Profile
          </a>

        </div>
      </div>
    </div>
  </div>

  <!-- My Upcoming Events Table -->
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">

          <h4 class="card-title">My Upcoming Events</h4>

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="bg-light">
                <tr>
                  <th>Event</th>
                  <th>Date</th>
                  <th>Venue</th>
                  <th>Fee</th>
                  <th>Payment Status</th>
                  <th>Ticket</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Tech Fest 2026</td>
                  <td>15 Mar 2026</td>
                  <td>Main Auditorium</td>
                  <td>₹ 500</td>
                  <td><span class="badge badge-success">Paid</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
                  </td>
                </tr>

                <tr>
                  <td>Coding Competition</td>
                  <td>20 Mar 2026</td>
                  <td>Lab 3</td>
                  <td>Free</td>
                  <td><span class="badge badge-success">Confirmed</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-primary">Download</a>
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