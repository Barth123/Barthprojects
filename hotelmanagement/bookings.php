


<html>
    <head>
        <title>Reservations | Four Seasons</title>
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
               <a  href="homepage.php">Home</a>
               <a href="rooms.html">Rooms</a>
               <a href="meetings and events.html">Meetings & Events</a>
               <a href="deals reference.html">Deals</a>
               <a href="safari.html">Safari</a>
               <a href="gallery.html">Gallery</a>
               <a href="covid 19 protocols">Covid 19 Protocols</a>
               
               <a class="active" href="bookings.php">Book Now</a>
               <a href="logout.php">Log Out</a>
               
             </div> </td>
            </table><br> 
       </div>

       <form action="insert.php" method="post" class="form1">
           <fieldset>
               <legend style="font-size: 30px;" >Make Reservation in Minutes</legend>
               <div>
                   <div align="center"><strong style="font-weight: bolder;">*Fill 'Null' in Invalid Areas</strong></div>
                  <table align="center" style="padding: 2px; border-spacing: 50px 10px;">
                    
                    <tr>
                        <td>
                            <label for="name">Please Enter Your Name </label><br>
                            <input type="text" name="name" id="name" placeholder="Fay One" required>
                        </td>
                        <td>
                            <label for="email">Email Address</label><br>
                            <input type="email" name="email" id="email" placeholder="fayone@gmail.com" required>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label for="tel">Telephone/Mobile</label><br>
                            <input type="number" name="tel" id="tel" placeholder="0712345678" required>
                        </td>
                        <td>
                            <label for="room">Room Interested In</label><br>
                            <input type="text" name="room" id="room" list="room" required placeholder="Select Preffered Room">
                               <datalist id="room">
                                <option value="Null"></option>
                                <option value="Southside Summer 6999kes/night"></option>
                                <option value="Winter Wars 8499kes/night"></option>
                                <option value=" Spring Rings 7999kes/night"></option>
                                <option value="Autumn Aroma 9499kes/night"></option>
                                <option value="Fourth Season 9999kes/night"></option>
                                <option value="Winter the II 9499kes/night"></option>
                               </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="hall">Conference Halls</label><br>
                           <input type="text" name="hall" id="hall" list="hall" required placeholder="Select Preffered Halls">
                           <datalist id="hall">
                               <option value="Null"></option>
                               
                           </datalist>
                        </td>
                        <td>
                            <label for="tent">Safari Tents</label><br>
                           <input type="text" name="tent" list="tent" id="tent" required placeholder="Select Preffered Tent">
                           <datalist id="tent">
                               <option value="Null"></option>
                               <option value="Ad Infinitum"></option>
                               <option value="Veni Vidi Vici"></option>
                               <option value="Carpe Diem"></option>
                               <option value="Carpe Noctem"></option>
                               <option value="Ad Astra"></option>
                               <option value="Ad Meliora"></option>
                           </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="adults">Number of Adults</label><br>
                           <input type="text" name="adults" list="adults" id="adults" required placeholder="Adults">
                           <datalist id="adults">
                               <option value=""></option>
                               <option value="1"></option>
                               <option value="2"></option>
                               <option value="3"></option>
                               <option value="4"></option>
                               <option value="5"></option>
                           </datalist>
                        </td>
                        <td>
                            <label for="children">Number of Children</label><br>
                           <input type="text" name="children" list="children" id="children" required placeholder="Children">
                           <datalist id="children">
                               <option value=""></option>
                               <option value="0"></option>
                               <option value="1"></option>
                               <option value="2"></option>
                               <option value="3"></option>
                               <option value="4"></option>
                               <option value="5"></option>
                           </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="checkindate">Check-in Date</label><br>
                            <input type="date" name="checkindate" id="checkindate" required>
                        </td>
                        <td>
                            <label for="checkoutdate">Check-out Date</label><br>
                            <input type="date" name="checkoutdate" id="checkoutdate" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="considerations">Any Considerations You Would Want Us To Make</label><br>
                            <textarea name="considerations" id="considerations" cols="50" rows="5"></textarea>
                        </td>
                         <td>
                            Payment Method 
                            <div style="white-space:nowrap; width: min-content;">
                                <input type="radio" id="payment" name="payment" value="cheque" required>
                                <label for="cheque">Cheque</label>
                                <input type="radio" id="payment" name="payment" value="paypal" required>
                                <label for="paypal">Paypal</label>
                              </div>
                         </td>  
                        </tr>
                        <tr>
                            <td>
                                <label for="cardname">Please Enter Name on Card</label>
                                <input type="text" name="cardname" id="cardname" placeholder="Fay One" required>
                            </td>
                            <td>
                                <label for="cardnumber">Credit Card Number</label>
                                <input type="number" name="cardnumber" id="cardnumber" placeholder="1234-4321-1234" required>
                            </td>
                            <tr>
                                <td align="right">
                                <button type="reset" class="buttonbookings2">Cancel</button> <hr>
                                       
                            </td>
                            <td>
                                 <button type="submit" class="buttonbookings1">Checkout</button> <hr>
                            </td>
                            </tr>
                        </tr>
                </table>  
               </div>
               



           </fieldset>
       </form>
    
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