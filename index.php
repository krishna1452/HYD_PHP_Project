<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php
   include 'header.php';
   ?>

    <!...................images sildes................>

        <section class="container-fluid p-0">
            <div class="carousel slide" data-bs-ride="carousel" id="indicators">
                <div class="carousel-indicators">
                    <button data-bs-target="#indicators" data-bs-slide-to="0" class="active"></button>
                    <button data-bs-target="#indicators" data-bs-slide-to="1"></button>
                    <button data-bs-target="#indicators" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="asset/image/background2.jpg" class="w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/image/background1.jpg" class="w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="asset/image/background3.jpg" class="w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev active" data-bs-target="#indicators" data-bs-slide="Prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next active" data-bs-target="#indicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        <section class="container p-5">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3 class="p-2 font-monospace">Welcome to <span class="text-danger">Hyderabada It Training</span></h3>
                    <p class="text-justify font-monospace py-2">Hyderabad IT Trainings is a Hyderabad based Training Institute delivering classroom and online
                        trainings in India, USA and UK, Australia. We are Providing high quality training is our core
                        value.
                        We offer both classroom and online training on niche technologies which are in high demand. All
                        our
                        trainers are IT professionals with rich experience.</p>

                    <p class="text-justify font-monospace py-2">Hyderabad IT Trainings is a leading training and placement company in hyderabad managed by
                        industry
                        experts with more than 9+ years of experience in leading MNC Companies. We are wellknown for our
                        practical approach towards training that enables students to gain realtime exposure.</p>

                    <p class="font-monospace py-1 text-justify">Hyderabad IT Trainings is a <strong>one-stop shop for IT courses, Web Development services & Recruitment
                        services</strong>. Hyderabad IT Trainings concentrates on its vision of building up strong client and
                        business partnerships. To this end, Hyderabad IT Trainings offers Real-time and placement
                        focuses
                        training services.</p>
                </div>
                
                <div class="col-12 col-lg-4 px-5 text-center shadow">
                <h3 class="text-white bg-success py-3 mb-3 form-control">Register Now</h3>
                    <form method="post" action="#">
                        <input type="text" name="user name" placeholder="Name" required class="form-control mb-3 p-4">
                        <input type="email" name="email" placeholder="Email" required class="form-control mb-3 p-4">
                        <input type="tel" name="mobile number" placeholder="Phone" required class="form-control mb-3 p-4">
                        <textarea name="message" placeholder="Message" class="form-control mb-4 p-4"></textarea>

                        <button class="btn btn-warning w-100 p-2">Submit</button>
                    </form>
        </section>

        </div>

        </div>

        </section>
        <section class="container-fluid py-5 bg-light">
            <div class="container">
                <div class="row py-2" id="courses">
                <h2 class="text-center p-3">Our <span class="text-danger">courses</span></h2>
                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                        <a href="python_fullstack_courses.php"><figure class="text-center">
                            <img class="w-100 hover" src="asset/image/python10.webp">
                            <figcaption class="py-2 ">
                                <h3>Python Fullstack</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="mern_fullstack_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/mern-stack-dev2.jpg">
                            <figcaption class="py-2 ">
                                <h3>MERN Full Stack Developer</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="ui_development_courses.php"> <figure class="text-center">
                            <img class="w-100" src="asset/image/3.webp">
                            <figcaption class="py-2">
                                <h3>UI development</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="rect_js_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/react js training 4.webp">
                            <figcaption class="py-2">
                                <h3>React JS</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="ui_ux_designer_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/python (2)-min5.jpg">
                            <figcaption class="py-2">
                                <h3>UI/UX Designing</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="node_js_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/nodejs6.webp">
                            <figcaption class="py-2">
                                <h3>Node JS</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="web_designer_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/web design-7.jpg">
                            <figcaption class="py-2">
                                <h3>Web Designing</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="php_mysql_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/phpmysql-8.jpg">
                            <figcaption class="py-2">
                                <h3>PHP with MySQL</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="digital_marketing_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/digital mark9.jpg">
                            <figcaption class="py-2">
                                <h3>Digital Marketing</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="python_fullstack_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/python (1).jpg">
                            <figcaption class="py-2">
                                <h3>Python</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="ui_ux_designer_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/ui-design-min11.jpg">
                            <figcaption class="py-2">
                                <h3>UI Designing</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="django_courses.php"><figure class="text-center">
                            <img class="w-100" src="asset/image/django course12.webp">
                            <figcaption class="py-2">
                                <h3>DJango</h3>
                            </figcaption>
                        </figure></a>
                    </div>
                </div>
            </div>
        </section>


        <section class="container-fluid p-5" id="Batches">

            <h3 class="text-center">New <span class="text-danger">Batches</span></h3>
            <div class="table-responsive p-5">
                <table class="text-justify table table-hover table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Course</th>
                            <th>Date</th>
                            <th>Timings</th>
                            <th>Duration</th>
                            <th>Trainer</th>
                            <th>Register for Demo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Python Fullstack Development</td>
                            <td>26-OCT-2023</td>
                            <td>5:00 PM - 6:00 PM</td>
                            <td>90 Days</td>
                            <td>Mr. Sudheer</td>
                            <td><a class="text-danger"
                                    href="python_fullstack_courses.php">Register
                                    Now</a></td>
                        </tr>
                        <tr>
                            <td>MERN Stack Development</td>
                            <td>26-OCT-2023</td>
                            <td>10:00 AM - 11:00 AM</td>
                            <td>90 Days</td>
                            <td>Jaya Chandra reddy</td>
                            <td><a class="text-danger"
                                    href="mern_fullstack_courses.php">Register
                                    Now</a></td>
                        </tr>
                        <tr>
                            <td>Python with DJango</td>
                            <td>26-OCT-2023</td>
                            <td>12:00 PM - 1:00 PM</td>
                            <td>45 Days</td>
                            <td>Mr. Sudheer</td>
                            <td><a class="text-danger"
                                    href="django_courses.php">Register
                                    Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>UI Development</td>
                            <td>26-OCT-2023</td>
                            <td>10:00 AM - 11:00 AM</td>
                            <td>70 Days</td>
                            <td>Mr.Bharghav</td>
                            <td><a class="text-danger"
                                    href="ui_development_courses.php">Register
                                    Now</a></td>
                        </tr>
                        <tr>
                            <td>Node JS</td>
                            <td>27-Oct-2023</td>
                            <td>6:00 PM - 7:00 PM</td>
                            <td>25 Days</td>
                            <td>Mr.Chandrashekar</td>
                            <td><a class="text-danger"
                                    href="node_js_courses.php">Register
                                    Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>UIUX Designing</td>
                            <td>26-OCT-2023</td>
                            <td>10:00 AM - 11:00 AM</td>
                            <td>90 Days</td>
                            <td>Mr.shakthivel</td>
                            <td><a class="text-danger"
                                    href="ui_ux_designer_courses.php">Register
                                    Now</a></td>
                        </tr>
                        <tr>
                            <td>Web Designing</td>
                            <td>26-OCT-2023</td>
                            <td>10:00 AM - 11:00 AM</td>
                            <td>45 Days</td>
                            <td>Mr.Bharghav</td>
                            <td><a class="text-danger"
                                    href="web_designer_courses.php">Register
                                    Now</a></td>
                        </tr>
                        <tr>
                            <td>React JS</td>
                            <td>26-OCT-2023</td>
                            <td>4:00 PM - 5:00 PM</td>
                            <td>25 Days</td>
                            <td>Mr. Bharghav</td>
                            <td><a class="text-danger"
                                    href="react_js_courses.php">Register
                                    Now</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Degital marketing</td>
                            <td>26-OCT-2023</td>
                            <td>4:00 PM - 5:00 PM</td>
                            <td>25 Days</td>
                            <td>Mr. Bharghav</td>
                            <td><a class="text-danger"
                                    href="digital_marketing_courses.php">Register
                                    Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="container-fluid py-1" id="trainer">
            <div class="container">
                <h3 class="text-center m-3">Training <span class="text-danger">Modes</span></h3>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                        <a href="index.php" class="text-decoration-none text-dark"><figure class="text-center w-100 bg-light p-3">
                            <img src="asset/image/trining1.png" width="25%">
                             <figcaption id="figcap">classroom training</figcaption>
                            <p id="para">Get trined by industy exports via classroom training with live project</p>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="index.php" class="text-decoration-none text-dark"><figure class="text-center w-100 bg-light p-3">
                            <img src="asset/image/training2.png" width="25%">
                            <figcaption id="figcap">Online training</figcaption>
                            <p id="para">Get trined by industy exports via classroom training with live project</p>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="index.php" class="text-decoration-none text-dark"><figure class="text-center w-100 bg-light p-3">
                            <img src="asset/image/training3.png" width="25%">
                            <figcaption id="figcap">Corpoarte training</figcaption>
                            <p id="para">Get trined by industy exports via classroom training with live project</p>
                        </figure></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-3 col-12 col-lg-3">
                    <a href="index.php" class="text-decoration-none text-dark"><figure class="text-center w-100 bg-light p-3">
                            <img src="asset/image/training4.png" width="25%">
                            <figcaption id="figcap">Video based training</figcaption>
                            <p id="para">Get trined by industy exports via classroom training with live project</p>
                        </figure></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid px-5 ">

            <div class="container p-2">
                <h3 class="text-center p-3">Why <span class="text-danger">Choose us?</span></h3>
                <div class="row">
                    <div class="col-12 col-lg-6 p-3">
                        <h4 class="text-danger">IT experts as Trainers</h4>
                        <p>Learning a technology with a professional who is well expertise in that solve above 80% of
                            your
                            needs.</p>
                    </div>
                    <div class="col-12 col-lg-6 p-3">
                        <h4 class="text-danger">Full Hands-on Training</h4>
                        <p>We support any training with more practical classes. So, we always prefer to give hands-on
                            training.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 p-3">
                        <h4 class="text-danger">Placement Assistance</h4>
                        <p>Every course is covered with interview point questions and real time scenarios of what the
                            company may look after from you.</p>
                    </div>
                    <div class="col-12 col-lg-6 p-3">
                        <h4 class="text-danger">Affordable Fees</h4>
                        <p>We are dead cheap in fees. Quality training with less price is only at Hyderabad IT
                            Trainings.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid py-5 bg-secondary" id="countme">
            
            <div class="container px-5">
                <div class="row px-5">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-5">
                        <img src="asset/image/icon.png" class="text-white">
                        <h1 id="counter" class="text-warning">15+</h1>
                        <p>No.of Courses</p>
                    </div>

                    <div class=" col-12 col-sm-6 col-md-3 col-lg-3  px-5">
                        <img src="asset/image/icon.png">
                        <h1 id="counter1" class="text-warning">31,000+</h1>
                        <p>No.of students</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 col-lg-3  px-5">
                        <img src="asset/image/icon.png">
                        <h1 id="counter2" class="text-warning">25,000+</h1>
                        <p>No.of Placement</p>
                    </div>

                    <div class=" col-12 col-sm-6 col-md-3 col-lg-3  px-5">
                        <img src="asset/image/icon.png">
                        <h1 id="counter3" class="text-warning">39000+</h1>
                        <p>No.of Registrations</p>
                    </div>
                </div>
            </div>
        </section>
<!-------------------------------------------------------------------------------------------------------------->

    <section class="container py-5">
            <h2 class="text-center ">Students <span class="text-danger">What they say</span></h2>
        
        <div class="abc owl-carousel owl-theme">
                <div class="item">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo et itaque labore beatae a eaque
                            animi
                            quidem quibusdam distinctio iure fugiat quam quasi optio, vel architecto repellendus soluta
                            cumque
                            quis?
                    </p>
                    <h6 class="text-end px-5">mahammad khalida praveen</h6>
                </div>
                <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo et itaque labore beatae a eaque
                            animi
                            quidem quibusdam distinctio iure fugiat quam quasi optio, vel architecto repellendus soluta
                            cumque
                            quis?
                        </p>
                        <h6 class="text-end px-5">mahammad khalida praveen</h6>
                </div>
                <div class="item">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo et itaque labore beatae a eaque
                            animi
                            quidem quibusdam distinctio iure fugiat quam quasi optio, vel architecto repellendus soluta
                            cumque
                            quis?
                    </p>
                    <h6 class="text-end px-5">mahammad khalida praveen</h6>
                </div>
                <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo et itaque labore beatae a eaque
                            animi
                            quidem quibusdam distinctio iure fugiat quam quasi optio, vel architecto repellendus soluta
                            cumque
                            quis?
                        </p>
                        <h6 class="text-end px-5">mahammad khalida praveen</h6>
                </div>
        </div>
</section>
<!-------------------------------------------------------------------------------------------------------------->

        <section>
            <h2 class="text-center">Recent <span class="text-danger">Placements</span></h2>
            <div class="container p-5">
                <div class="row">
                <div class="aa owl-carousel owl-theme">
                    <div class="item">
                        <img src="asset/image/place1.jpg" width="100%">
                    </div>

                    <div class="item">
                        <img src="asset/image/place2.jpg" width="100%">
                    </div>

                    <div class="item">
                        <img src="asset/image/place3.jpg" width="100%">
                    </div>

                    <div class="item">
                        <img src="asset/image/place4.jpg" width="100%">
                    </div>
                    <div class="item">
                        <img src="asset/image/place4.jpg" width="100%">
                    </div>
                    <div class="item">
                        <img src="asset/image/place4.jpg" width="100%">
                    </div>
            
                    </div>
                </div>
                </div>
        </section>
 
        <!-------------------------------------------------------------------------------------------------------------->

        <section class="container-fluid">
            <div class="container">
                <div class="row py-3">
                    <h2 class="text-center p-2">Our Training <span class="text-danger">Approach</span></h2>
                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                       <a href="index.php" class="text-decoration-none text-dark"> 
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch1.png">
                            <figcaption class="py-3">
                                <h3>Theory</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch2.png">
                            <figcaption class="py-3 ">
                                <h3>Project Work</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch3.png">
                            <figcaption class="py-3 ">
                                <h3>Assignments</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch4.png">
                            <figcaption class="py-3 ">
                                <h3>Certification</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch5.png">
                            <figcaption class="py-3 ">
                                <h3>Resume Preparation</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch6.png">
                            <figcaption class="py-3 ">
                                <h3>Interview Preparation</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center p-5" id="approach">
                            <img class="w-50 px-3" src="asset/image/approch7.png">
                            <figcaption class="py-3 ">
                                <h3>Resume Marketing</h3>
                            </figcaption>
                        </figure></a>
                    </div>

                    <div class="col-12  col-sm-12 col-md-6  col-lg-2 col-xl-3">
                    <a href="index.php" class="text-decoration-none text-dark">
                        <figure class="text-center py-2" id="approach">
                            <img class="w-50 px-3"  src="asset/image/approch8.png">
                            <figcaption class="py-3 ">
                                <h3>Placement Support</h3>
                            </figcaption>
                        </figure></a>
                    </div>
                </div>
            </div>
        </section>
<!-------------------------------------------------------------------------------------------------------------->

        <section class="container-fluid p-5 bg-secondary">
            <h3 class="text-center p-3">Our Students <span class="text-danger">Placed In</span></h3>
            <div class="container p-2">

                <div class="row">
                <div class="ab owl-carousel">
                    <div class="col-12 text-bg-info m-1 p-1">
                        <h5 class="text-ligh text-center">HCl</h5>
                    </div>

                    <div class="col-12 text-bg-primary m-1 p-1">
                        <h5 class="text-ligh text-center">Vipro</h5>
                    </div>

                    <div class="col-12 text-bg-danger m-1 p-1">
                        <h5 class="text-ligh text-center">HP</h5>
                    </div>

                    <div class="col-12 text-bg-warning m-1 p-1">
                        <h5 class="text-ligh text-center">CGI</h5>
                    </div>
                    <div class="col-12 text-bg-info m-1 p-1">
                        <h5 class="text-ligh text-center">CSC</h5>
                    </div>

                    <div class="col-12 text-bg-warning m-1 p-1">
                        <h5 class="text-ligh text-center">Amazon</h5>
                    </div>

                    <div class="col-12 text-bg-primary m-1 p-1">
                        <h5 class="text-ligh text-center">Google</h5>
                    </div>

                    <div class="col-12 text-bg-success m-1 p-1">
                        <h5 class="text-ligh text-center">Genpact</h5>
                    </div>

                    <div class="col-12 text-bg-warning m-1 p-1">
                        <h5 class="text-ligh text-center">Invesco</h5>
                    </div>

                    <div class="col-12 text-bg-danger m-1 p-1">
                        <h5 class="text-ligh text-center">Marlabs</h5>
                    </div>
                </div>
            </div>
        </section>

        <?php
       include 'footer.php';
       ?>