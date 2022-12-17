<?php include('partial-front/menu.php');?>
    <!--food-search section start-->
    <section class="food-search text-center">
        <div class="container">
            <div class="text">
            <h1 style="color:white;">Welcome To SERVICIFY</h1>
            <p style="color:whitesmoke;">Simple Solution To Your Need</p>
            </div>

            <div>


                <!-- <input type="search" name="search" id="search" placeholder="Search for restaurants">
                <input type="submit" name="submit" value="Search" class="btn btn-primary"> -->
                <!-- <div id="term"></div> -->

            </div>
        </div>
    </section>
    <!--food-search section end-->
    
    <!--restaurant section start-->
    <section class="restaurant">
        <div class="container">
            <h2 class="text-center">Top Rated Services</h1>
            <?php
                $sql = "SELECT * FROM avg_rating ORDER BY avgrating DESC LIMIT 3";
                $res = mysqli_query($conn,$sql) or mysqli_error($conn);
                $count = mysqli_num_rows($res);
                if($res)
                {
                     if($count>0)
                     {
                        while($row  = mysqli_fetch_assoc($res))
                        {
                           $username = $row['owner_name'];
                           
                           $sql1 = "SELECT * FROM tbl_company_info WHERE username='$username'";
                           $res1 = mysqli_query($conn,$sql1) or mysqli_error($conn);
                           $count1 = mysqli_num_rows($res1);
                           if($res1)
                           {
                                if($count1>0)
                                {
                                   while($row1  = mysqli_fetch_assoc($res1))
                                   {
                                    $com_name = $row1['com_name'];
                                      $com_img = $row1['com_img'];
                             
                
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
                   
            }
        }
    }
    
    
                ?>
               
            <!-- <a href="#">
                <div class="box-3 float-container">
                 <img src="images/res1.jpg" alt="res1" class="img-responsive">
                 <div class="float-text background">
                    <h3 class="text-white">Faria's Cafe</h3>
                 </div>
            </div> </a>

         <a href="#">
              <div class="box-3 float-container">
                <img src="images/res2.jpg" alt="res1" class="img-responsive">
                <div class="float-text background text-center">
                   <h3 class="text-white">Naib's Cafe</h3>
                </div>
           </div> 
        </a>
         
        <a href="#">
            <div class="box-3 float-container">
            <img src="images/res3.jpg" alt="res1" class="img-responsive">
            <div class="float-text background text-center">
               <h3 class="text-white">Faib's Corner</h3>
            </div>
       </div> 
    </a> -->

            <div class="clearfix"></div>
        </div>
    </section>

    <!--restaurant section end-->

    <!--specialities section start-->
    <section class="specialities">
        <div class="container">
            <div class="special-container">
            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Visit out website.Ask for any kind of service and we will be there for you!!</p>
            </div>
            
            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-biking"></i>
                </div>
                <h3>Quickest Service</h3>
                <p>Book your required service any time and you will experience a very quickest response!!</p>
            </div>

            <div class="special-box">
                <div class="icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Easy Payment</h3>
                <p>We are offering you all easy methods of paying such as Cash on delivery, BKash , Nagad , Rocket etc.</p>
               </div>
            </div>
            
            <div class="clearfix"></div>


        </div>
    </section>
    <!--specialities section end-->

    <!--our-team section start-->
    <section class="our-team text-center">
        <div class="container">
            <h2 style="color:#777777;font-style:italic;">our team</h2>
             <div class="team">
            <div class="team-member">
              <img src="./images/member1.jpg" alt="faria">
               <div class="text-member">
                   <h2>Faria Hasan</h2>
                   <p>Owner & Founder</p>
               </div>
             <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
             </div>
             </div>

             <div class="team-member">
                <img src="./images/member2.jpg" alt="naib">
                 <div class="text-member">
                     <h2>Naib Uddin</h2>
                     <p>Owner & Co-Founder</p>
                 </div>
               <div class="social-link">
                  <ul>
                      <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
               </div>
               </div>
               <div class="clearfix"></div>
               </div>
    </section>
   <!--our-team section end-->
   <!-- <script type="text/javascript">
  $(document).ready(function() {
     $( "#term" ).keyuo(function(){
         var query=$(this).val();
         if(query!=''){
             $ajax({
                 url:"ajax-db-search.php",
                 method:"POST",
                 data:{query:query},
                 success:function(data)
                 {
                     $('#term').fadeIn();
                     $('#term').html(data);

                 }
             });
         }
         else{
             $('#term').fadeout();
             $('#term').html("");
         }
     });
     $(document).on('click','li',function(){
         $('#search').val($(this).text());
         $('#term').fadeOut();
     });
    });
</script> -->


  <?php include('partial-front/footer.php');?>