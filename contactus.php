<?php
include 'dbconnect.php';
?>
<?php
if (isset($_POST['submit'])) {

    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $stmt=$dbcon->prepare('insert into cantactus (uname,email,phone,message) values(:unamed,:emaild,:phoned,:message)');
    $stmt->bindParam(":unamed",$uname);
    $stmt->bindParam(":emaild",$email);
    $stmt->bindParam(":phoned",$phone);
    $stmt->bindParam(":message",$message);
    $eq=$stmt->execute();
    if($eq) {
        echo "<script>alert('data added sucess....');
        location.href='contactus.php';
        </script>";
    } else {
        echo "<script>alert('unable to add the data....');</script>";
}

}
?>


<?php
include 'header.php';
?>

<!-- Breadcrumbs Start -->
<div class="container-fluid breadcrumbs">
    <div class=" container">
        <div class="col-md-12">
            <div class="col-md-6">
                <h1 class="page-title">Contact Us</h1>
            </div>
        </div>
        <div class="col-md-6 py-2">
            <ul>
                <li>
                    <a class="active" href="index.php">Home</a>
                </li>
                <li class=" text-warning">Contact us - </li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->



<section class="container-fluid py-5">
    <div class="row px-5">
            <div class="col-md-7 text-center shadow px-5">
                <h3 class="text-white bg-success py-3 mb-3 form-control">Quick enquiry</h3>
                    <form method="post" action="#" name="contact" onsubmit="return valid()">
                        <input type="text" name="uname" placeholder="Name" class="form-control mb-3 p-4">
                        <p id="unote"></p>
                        <input type="email" name="email" placeholder="Email" class="form-control mb-3 p-4">
                        <p id="enote"></p>
                        <input type="tel" name="phone" placeholder="Phone" class="form-control mb-3 p-4">
                        <p id="pnote"></p>
                        <textarea name="message" placeholder="Message" class="form-control mb-4 p-4"></textarea>
                        <p id="mnote"></p>

                        <input type="submit" name="submit" value="Send" class="btn btn-warning w-50 p-2">
                    </form>

            </div>
        <div class=" col-md-5 shadow px-5 p-5">
        
            <h4>Address</h4>
            
            <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-house-door-fill text-warning" viewBox="0 0 16 16">
    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
    </svg></i>&nbsp;&nbsp;&nbsp;&nbsp;House No 40, Third Floor,</p>
                <p class="px-5">Vittalrao Nagar, Madhapur, </p>
            <p class="px-5">Hitech City Main Road, </p>
            <p class="px-5">Hyderabad, Telangana- 081</p> 

            <p><svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-telephone-fill text-warning" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>&nbsp;&nbsp;&nbsp;+91 81439 56849</p>

            <p><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope text-warning" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
</svg>&nbsp;&nbsp;&nbsp;info@hyderabadittrainings.com<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  hr@hyderabadittrainings.com</p>
            </div>
            </div>
        <div class="col-md-12 w-100  pt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.324605807167!2d78.38211137501148!3d17.44417088345263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91065c1d3e53%3A0x2d84d6e311a69e21!2sHyderabad%20IT%20Trainings%20-%20Python%20Java%20MERN%20Full%20Stack%20Web%20Development%20React%20JS%20PHP%20UI%20UX%20Design%20Training%20Institute%20Hyderabad!5e0!3m2!1sen!2sin!4v1700712176821!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>
</section>


<?php
include 'footer.php';
?>