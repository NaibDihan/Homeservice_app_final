<?php include('partial-front/menu1.php');?>

<style>
    
    .contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    background-color:crimson;
    border-radius: 6rem;
    width: 20%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

@media screen and (max-width:1024px){
    .contact-form{
        width:100%;
        margin-top: 20%;
    }
    
}
@media screen and (max-width:768px){
    .contact-form{
        width:100%;
        margin-top: 25%;
    }
}
</style>

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3 style="color:crimson;">Drop Us a Message</h3>
               <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="Phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <textarea name="Message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                        </div>
                </div>
            </form>

</div>

<?php
//Process the value from form and save it in database

//Check whether the submit button is clicked or not

if(isset($_POST['btnSubmit']))
{
    //1.Get the data from form
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $msg =$_POST['Message']; 

    $sql = "INSERT INTO contact SET
        Name='$name',
        Email='$email',
        Phone='$phone',
        Message='$msg'
";
      $res=mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
      if($res)
  {
      echo "
       <script>
            alert('Thanks for contacting us.');
            window.location.href='contact.php';

       </script>
      
      ";
      
  }
  else{
    echo "
    <script>
         alert('failed');
         window.location.href='contact.php';

    </script>
   
   ";
     
  }
}
   
    ?>
</body>
</html>