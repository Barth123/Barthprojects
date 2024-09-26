


<?php
session_start();

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] ){
    header("location: login.php");

}

?>

<html>
    <head>
        <title>Homepage | Four Seasons</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
             <table align="center">
            <td><img src="logo.jpg" alt="img not found" height="100" width="200"> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td> <div class="topnav" >
                <a class="active" href="homepage.php">Home</a>
                <a href="rooms.html">Rooms</a>
                <a href="meetings and events.html">Meetings & Events</a>
                <a href="deals reference.html">Deals</a>
                <a href="safari.html">Safari</a>
                <a href="gallery.html">Gallery</a>
                <a href="covid 19 protocols.html">Covid 19 Protocols</a>
                <a href="bookings.php">Book Now</a>
                <a href="logout.php">Log out</a>
                
              </div> </td>
             </table><br> 
        </div>
         
       
              
        <div align="center">
             <img src="pic1.jpg" alt="image not found" width="90%" height="600px"> <hr>
        </div>
       
       <div align="center">
          <h1><u>EBENEZER</u> </h1>
          <h2><i>Best Agrovet within Butula sub countyand Busia as large </i></h2>
        <p> The Four Seasons Hotels & Restaurants is rated amongst the best five-star hotels in Nairobi. Situated in Nairobi's Central Business District, it offers 212 </p>
        <p>stylish rooms and suites, and dedication to service. The hotel is a stone’s throw away from Kenyatta International Conference Centre (KICC) and close to several</p>
        <p> popular attractions and business centers. It is also very well located for quick access to areas such as the Nairobi National Park, Jomo Kenyatta International </p>
        <p> Airport (JKIA), Wilson Airport, Government Offices  and the United Nations offices in Nairobi.The luxury of this heritage hotel delivers a wondrous old world </p>
        <p> charm whilst offering modern facilities and legendary service, to create Nairobi's top 5-Star hotel experience. This unique experience is replete with indoor and  outdoor restaurants,</p>
        <p> a rooftop swimming pool, courtyard and a glamourous jazz bar. Conferencing and banqueting facilities are available in our heritage spaces and ballroom.The restaurants at </p>
         <p>The Four Seasons Hotel & Restaurants offer the best of local flavors and a host of international cuisine prepared by our remarkable chefs.</p>
        <p> The Four Seasons Hotel & Restaurants is a perfect haven for both business and leisure travellers. At Four Seasons, we strive to provide guests with an</p> 
          <p>  experience that’s beyond all expectation. It all begins with our friendly staff, who will do everything they can to make your </p>
        <p> stay relaxing and enjoyable. The team at Four Seasons looks forward to welcoming you in one of our luxury rooms where you will experience </p>
         <p>comfort and convenience in this beautiful city of Nairobi.</p> 
          <br>
          <p>You can book <a href="bookings.html"><u>online</u> </a>, call our <a href="tel:+254705036698"><u>reservations desk</u></a> or <a href="mailto:mk@gmail.com"><u>mail</u></a> to assist you with your room reservation. Our beautiful rooms and suites await your arrival.</p>
       </div>
       <div align="center"><hr>
         <div>
             <table>
                 <tr>
                     <td><img src="martin.jpg" alt="browser not supported" width="665px" height="400px"></td>
                     <td><img src="elephant.jpg" alt="browser not supported" width="665px" height="400px"></td>

                 </tr>
             </table>
         </div>
           <table style="padding: 10px; border-spacing: 50px 10px;padding-right: 200px;">
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>
                   <div align="">
                        <h2>Heritage Four Seasons</h2>
                   <p>We all travel the world seeking to discover an experience.
                    <p>   Four Seasons was home to adventurers, seekers, writers, artists and celebrities.</p>
                   <p> Named after the journalist turned explorer FM Seasons commissioned to
                   find the infamous Dr Livingstone.</p>
                   <p> It was among the first hotels in Kenya,<br> the venue
                   for the first address from England's reigning Queen as Monarch.</p> 
                   <p>The first post office and the first stock exchange in Kenya.</p>
                   
                   <a href="#about us"><u> Read More</u></a> <hr>

               
                   </div>
                   </td>
                   <td>  <div align="">
                           <h2>Safari Discovery</h2>
                       <p>Immerse yourself in a world of adventure at any of our three Safari destinations, <br>
                        each located in one of Kenya's prime National Parks or Conservancies.</p>
                        <p> Marvel at the sunrise across the savannah or gaze at the starry nights skies. </p>
                        <p> Feel your heart beat hasten as you watch the King of the jungle in all his majesty just footsteps away, <br>
                         venture to climb mountain like structures in community lands and explore the Masai and Samburu cultures <br>
                         as you connect to the absolute miracles of Mother Nature.</p>
                        Ready for the <a href="safari.html"><u>Safari Experience</u> </a>? <hr>
                      </td>
           </table>
        
       <div align="center">
           <table style="padding:px; border-spacing: 60px 10px;" >
                <tr>
                   <td>
                       <img src="meetings1.jpg" alt=""  >
                   </td>
                   <td>
                           <h2>Meeting Conferences</h2>
                           <p>Our goal is to help you create an inspired, 
                              energised and innovative environment.</p> 
                              <p> With a host of in and out door venues for 
                                events we are here to serve you.</p>

                            <p> You say the word, we will make it happen.</p>
                            <a href="meetings and events.html"><u>Find out more</u></a> <hr>
                       
                   </td>
               </tr>

           </table>
       </div><br>
        
       <div align="center">
              <button class="button"><span><a href="bookings.php">Book Now</a></span></button>
               <button class="button"><span><a href="logout.php">Log Out</a></span></button>
       
       </div><br>
       
      
       
      
       
    
       

     <footer>
         <div align="center" style="padding: 2px;">
           <p><a href="mailto:5@gmail.com"> Contact Us</a> | <a href="about us.html">About Us</a> | <a href="#privacy policy">Privacy Policy</a> | </p>
          <p> <a href="#faqs">FAQs</a> | <a href="#Four Seasons Blog">Four Seasons Blog</a> | <a href="staff.html">Staff</a></p>
          
           <img src="footer.png" alt="" width="">
           <p><small><i>copyright © 2022 Developed by <a href="tel:+254705036698">ProjectPower</a></i></small><i></p>
         </div>
        

     </footer>   
      

    </body>
</html>