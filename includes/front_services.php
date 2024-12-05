<!-- SERVICES -->
<section id="services">
  <div class="container">
    <div class="text-center">
      <h2>SERVICES</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quaerat!</p>
    </div>
    <div class="row">
      <?php
      // Database connection
      $conn = new mysqli('localhost', 'root', '', 'ccit06');

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch services from database
      $query = "SELECT * FROM services";
      $result = $conn->query($query);

      // Loop through services and display them
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>
          <div class="col-lg-4 d-flex align-items-center justify-content-center">
            <div class="card text-center p-3" style="width: 22rem;">
              <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" 
                   class="card-img-top mx-auto" alt="<?php echo htmlspecialchars($row['title']); ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                <a href="#" class="btn btn-brand">Learn More</a>
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "<p class='text-center'>No services available.</p>";
      }

      $conn->close();
      ?>
    </div>
  </div>
</section>