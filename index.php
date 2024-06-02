<?php
include('header.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="row">
        <div class=""></div>
        <div class="col-12">

            <div id="demo" class="carousel slide" data-bs-ride="carousel">


                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img8.jpg" alt="" class="d-block" style="width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <p>St. Teresa's School</p>
                            <h2>St. Teresa's School is located Rangamati Sadar Up
                                Rangamati.Its EIIN is 138987. </h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/img9.jpg" alt="" class="d-block" style="width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Rangamati Govt Girl's High School</p>
                            <h2>Rangamati Govt Girls High School is located at Rajbari area,Rangamati Sadar Up
                                Rangamati.Its EIIN is 107794. </h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/img10.jpg" alt="" class="d-block" style="width:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Rani Dayamoyee High School</p>
                            <h2>Rangamati Govt Girls High School is located at Art council colony, tabalchari Rangamati
                                Sadar Up Rangamati.Its EIIN is 107797.</h2>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <div class=""></div>
    </div>

    <section class="std-info">
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-3 mb-0 md-lg-2">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">

                                <div class="info-icons"><img class="img-fluid d-block" src="img/audience1.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
									include('connection.php');
									$sql = "SELECT * from student";

										if ($result = mysqli_query($conn, $sql)) {

											// Return the number of rows in result set
											$rowcount = mysqli_num_rows( $result );
											
											// Display result
											echo $rowcount."+";
 }
								?>
                                    </h5>

                                </div>

                            </div>
                            <div class="col-md-4">
                            </div>
                            <p class="text-center">Total Students</p>
                        </div>

                    </div>
                </div>


                <div class="col-md-3 mb-0 md-lg-2">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">

                                <div class="info-icons"><img class="img-fluid d-block" src="img/audience4.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
									include('connection.php');
									$sql = "SELECT * from student";
                                    $sql1 = "SELECT * from admin";
                                    $sql2 = "SELECT * from instructor";
                                    $result = mysqli_query($conn, $sql);
                                    $result1 = mysqli_query($conn, $sql1);
                                    $result2 = mysqli_query($conn, $sql2);
										if ($result = mysqli_query($conn, $sql)) {
											// Return the number of rows in result set
											$rowcount = mysqli_num_rows( $result)+mysqli_num_rows( $result1)+mysqli_num_rows( $result2);
											// Display result
											echo $rowcount."+";
                                        }
								?>
                                    </h5>

                                </div>

                            </div>
                            <div class="col-md-3">
                            </div>
                            <p class="text-center">Total Member</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 mb-0 md-lg-2">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">

                                <div class="info-icons"><img class="img-fluid d-block" src="img/audience2.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
									include('connection.php');
									$sql = "SELECT * from instructor";

										if ($result = mysqli_query($conn, $sql)) {

											// Return the number of rows in result set
											$rowcount = mysqli_num_rows( $result );
											
											// Display result
											echo $rowcount."+";
 }
								?>
                                    </h5>

                                </div>

                            </div>
                            <div class="col-md-4">
                            </div>
                            <p class="text-center">Total Instructor</p>
                        </div>

                    </div>
                </div>


                <div class="col-md-3 mb-0 md-lg-2">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">

                                <div class="info-icons"><img class="img-fluid d-block" src="img/audience3.png" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
									include('connection.php');
									$sql = "SELECT * from admin";

										if ($result = mysqli_query($conn, $sql)) {

											// Return the number of rows in result set
											$rowcount = mysqli_num_rows( $result );					
											// Display result
											echo $rowcount."+";
 }
								?>
                                    </h5>

                                </div>

                            </div>
                            <div class="col-md-4">
                            </div>
                            <p class="text-center">Total Admin</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <main id="about">
        <div class="about mt-5 mb-5">
            <div class="container">
                <h2 class="h2-responsive fw-bold text-center my-2">
                    About
                </h2>
                <p class="text-center w-responsive mx-auto mb-1">
                    Our school is committed to empowering students through education,
                    creating a supportive environment where they can thrive academically and personally.
                </p>
                <div class="row pt-5">
                    <div class="col-md-6 align-items-stretch">
                        <img class="img-fluid" src="img/building.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="h2-responsive fw-bold text-start text-justify section-heading">Our School</h2>
                        <p class="lh-base text-justify">Schools are vital establishments that serve as the cornerstone
                            of education in society. Within their walls,students embark on journeys of
                            discovery,growth,and development under the guidance of skilled educators.These institutions
                            offer structured environments where learning is not only academic but also social and
                            emotional.</p>
                        <p class="lh-base text-justify">Play a crucial role in fostering a sense of community,bringing
                            together
                            students,teachers,parents, and local stakeholders in a collaborative environment.Schools are
                            more than just buildings; they are vibrant centers of knowledge,empowerment and
                            socialization that shape the future of individuals and societies alike.</p>
                        <a href="" class="btn btn-primary px-2 pl-2 mt-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <main id="course" class="course">
        <div class="container">
            <h2 class="h2-responsive fw-bold text-center my-2">
                Courses
            </h2>
            <p class="text-center w-responsive mx-auto mb-1">
                Discover our diverse range of courses designed to cater to every student's interests and academic goals.
                Detailed course descriptions and syllabi are available to help you make informed decisions.
            </p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card box">
                        <img src="img/card1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Math</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card box">
                        <img src="img/card4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">English</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card box">
                        <img src="img/card6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bangla</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="mt-5" id="gallery">
        <div class="container">
            <h2 class="h2-responsive fw-bold text-center my-2">
                Gallery
            </h2>
            <p class="text-center w-responsive mx-auto mb-1">
                Explore our gallery to see the vibrant school life captured in photos and videos. From classroom
                activities to special events, witness the engaging environment we foster.
            </p>
            <!-- Gallery -->
            <div class="row pt-5">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="img/gallery2.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="img/gallery1.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="img/gallery6.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="img/gallery5.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="img/gallery3.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="img/gallery4.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>
            </div>
            <!-- Gallery -->
    </main>


    <main class="mt-5" id="contact">
        <div class=" container">
            <h2 class="h2-responsive fw-bold text-center my-2">
                Contact Us
            </h2>
            <p class="text-center w-responsive mx-auto mb-1">
                Get in touch with us for any queries or support regarding our school management system. Our dedicated
                team is here to assist you with prompt and efficient solutions.
            </p>

            <!-- 2 column grid layout with text inputs for the first and last names -->
            <section class="mb-4">
                <div class="row mt-5">
                    <div class="col-md-6 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label class="" for="name">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Enter Name" required />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label class="" for="email">Your email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Enter Email" required />

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <div class="md-form mb-0">
                                        <label class="" for="subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-12 pt-3">
                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" name="message" class="form-control" id="message"
                                            rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 text-center text-md-left">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58910.33906381147!2d92.19633184562989!3d22.65765873462697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1714624482223!5m2!1sen!2sbd"
                            width="600" height="335" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>


        </div>
    </main>
</body>

</html>
<?php
   include('footer.php');
?>