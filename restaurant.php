<?php include('partial-front/menu.php');?>

<section class="food-search text-center">
        <div class="container">
           <!-- <form action="">
                <input type="search" name="search" placeholder="Search for restaurants">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form> -->
            <h2 class="text-center" style="color:white;font-size:3.5rem;margin-bottom:15px;">Services</h1>
            <p style="font-size:25px;font-weight:700;text-align:center; color:whitesmoke;">Grab your required services! We are here to serve and help you with our simplest solution!!!</p>
            

        </div>
    </section>
<section class="restaurant">
        <div class="container">
        
            <?php
            $sql = "SELECT * FROM tbl_addedres_front";
            $res = mysqli_query($conn,$sql) or mysqli_error($conn);
            $count = mysqli_num_rows($res);
            if($res)
            {
                 if($count>0)
                 {
                    while($row  = mysqli_fetch_assoc($res))
                    {
                       $username = $row['username'];
                       $com_name = $row['com_name'];
                       $com_img = $row['com_img'];
                       ?>
               <a href="<?php echo SITEURL;?>food.php?username=<?php echo $username;?>">
                <div class="box-3 float-container">
                <?php
                if($com_img=="")
                {

                }
                else
                {
                   ?>
                  <img src="<?php echo SITEURL;?>images/restaurant/<?php echo $com_img;?>" alt="res1" class="img-responsive" height="600px">
                  <?php
                }
                ?>
                 
                 <div class="float-text background">
                    <h3 class="text-white"><?php echo $com_name;?></h3>
                 </div>
            </div> </a>

                       <?php


                    }
                 }
            }


            ?>
           

         

            <div class="clearfix"></div>
        </div>
    </section>


    <?php include('partial-front/footer.php');?>