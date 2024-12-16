<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div id="banner" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center text-light">
          <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, quam!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione dicta fugiat suscipit sunt ipsam
            doloribus at saepe maiores quam reprehenderit.</p>
          <a href="" class="btn btn-brand"> Please Click Here </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT SECTION -->
  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="set.jpg" alt="">


        </div>

        <div class="col-lg-6">
          <h2>ABOUT US</h2>
          <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum ipsa dolorum perspiciatis tempora ex,
            placeat inventore qui facere maxime recusandae.</p>
          <a href="" class="btn btn-brand"> Please Click Here </a>


        </div>
      </div>
    </div>
  </section>

  
<!-- FRONT_SERVICES -->


  <?php
  include './includes/front_services.php'
  ?>


  
 <!-- REVIEWS -->
<?php
  include './includes/rebyew.php';
  ?>


      <!--ITEM-->
      <div class="row row-cols-lg-3">
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="cactus.jpeg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="cactus.jpeg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="dark.jpg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="cactus.jpeg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="cactus.jpeg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
        <div class="col">
          <div class="testimonials">
            <div class="d-flex">
              <img src="cactus.jpeg" alt="">
              <div class="ms-3">
                <h3>clientName</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="@client"></a>
              </div>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis similique non maxime cum
              suscipit, architecto nihil nam hic autem, ab animi? Quidem atque doloribus iure voluptatum ex cum aliquam!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--FAQS-->
  </section>

  <section id="Faq">
    <div class="container">
      <div class="faq-section">
        <div class="text-center">
          <h2>Frequently ask question</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, recusandae laboriosam molestias odio sint
            labore minima tempore eos corrupti! Magni voluptatum quasi beatae saepe corrupti facere fuga odit commodi
            minima.</p>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>
</body>

</html>