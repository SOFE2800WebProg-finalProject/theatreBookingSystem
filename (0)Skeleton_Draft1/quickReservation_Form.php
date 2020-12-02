<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="../css/stucture_Draft1.css"> <!-- href="css/main.css" -->
    <style><?php include 'css/stucture_Draft1.css'; ?></style>
    <script type="text/javascript" src="../js/mainScript.js"><?php include 'js/mainScript.js';?></script>
    <Title>Movie Theater</Title>
</head>
<body>
    <!-- ____________ Top Navigation Bar ________________ -->
    <?php include("html/TopNav_and_Header.html"); ?>

    <!-- ____________ Quick Reservation Form ________________ -->
    <form action="" method="POST" id="ticketForm">
        <div class="content">
            <div id="Location">
            <!-- _________ ~ Ticket Reservation ~ (Start) ___________-->
            <section>
                <div class="outerRim">
                <div id="TicketOrderForm" class="innerBlock" >
                    <fieldset>
                        <legend><h1 class="innerBlockTitle">~ Ticket Reservation ~</h1></legend>
                        <table class="formTable" align="center">
                            <tr><td colspan=3>
                                <!-- _______ Nested Table 1 ________ --> 
                                <table  align="center">
                                    <th></th>
                                    <th colspan=2>Number of Tickets: </th>
                                    <tr>
                                        <th><label for="adult">Adult(s): </label></th>
                                        <td><input type="number" id="adult" name="adult" placeholder="Please enter a number" min="0" max="getRemainingSeats()"></td>	
                                        <td class="ticketCostDisp">($<output for="adult" name="adultTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <th><label for="senior">Senior(s): </label></th>
                                        <td><input type="number" id="senior" name="senior" placeholder="Please enter a number" min="0" max="getRemainingSeats()()"></td> 
                                        <td class="ticketCostDisp">($<output for="senior" name="seniorTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <th><label for="child">Childeren: </label></th>
                                        <td><input type="number" id="child" name="child" placeholder="Please enter a number" min="0" max="getRemainingSeats()"></td>  
                                        <td class="ticketCostDisp">($<output for="child" name="childTicket">  </output>/person)</td>
                                    </tr>
                                    <!-- ------------------------------- --> 
                                    <tr>
                                        <th rowspan=2><label for="wheelchair">Accessible: </label></th>
                                        <td>
                                            <input type="checkbox" id="wheelchair" name="wheelchair" value="wheelchair" onchange="calculateTotal()">
                                            <label for="wheelchair">Wheelchair Accessible</label>
                                        </td>
                                        <td class="ticketCostDisp">($<output for="wheelchair" name="accessibleTicket">  </output>/person)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" id="support" name="support" value="support" onchange="calculateTotal()"> 
                                            <label for="support">Support Person (No fee)</label>
                                        </td>
                                        <td class="ticketCostDisp">($<output for="support" name="supportTicket">  </output>/person)</td>
                                    </tr>
                                </table>
                                <!-- _______________________________ --> 
                            </td></tr>
                            <!-- ------------------------------- --> 
                            <tr>
                                <th><label for="theatre">Theatre:</label> </th>
                                <td>
                                    <select id="theatre" name="theatre" onchange="calculateTotal()">  <!-- put on recipt - no actual cost-->
                                    <option value="invalid" display="noSeatsOrMovieNotShownAtABCD()">No Theatres Available</option>  <!-- call a function to change display -->
                                    <option value="none" display="not(noSeatsOrMovieNotShownAtABCD())">Select a Theatre Location</option>
                                    
                                    <optgroup label="Oshawa" >    <!-- need proper function - Connect to database -->
                                        <option value="a" disabled="noSeatsOrMovieNotShownAtA()">theatre a  | <output for="a" value="proximityToA()">---</output>km</option>
                                        <option value="b" disabled="noSeatsOrMovieNotShownAtB()">theatre b  | <output for="b" value="proximityToB()">---</output>km</option>
                                        <option value="c" disabled="noSeatsOrMovieNotShownAtC()">theatre c  | <output for="c" value="proximityToC()">---</output>km</option>
                                        <option value="d" disabled="noSeatsOrMovieNotShownAtD()">theatre d  | <output for="d" value="proximityToD()">---</output>km</option>
                                    </optgroup>
                                    </select>
                                </td>
                                <td style="text-align:right">Distance: <output for="theatre" name="proximity" value="proximityToTheatre()"> --- </output></td>
                            </tr>
                            <!-- ------------------------------- --> <!-- need function to set value=getUserEmail()-if user has an account-->
                            <tr>
                                <th><label for="email">E-mail for Receipt: </label></th>
                                <td><input type="email" id="email" name="email" placeholder="movies@gmail.com"></td>
                                <td style="text-align:right"><output for="email" name="email" display="isInvalidEmail">Invalid</output></td>
                            </tr>
                            <!-- ------------------------------- -->  
                            <tr>	
                                <th><label for='radioEx'>Radio Buttons:</label></th>
                                <td colspan=2>
                                    <!-- _______ Nested Table 2 ________ --> 
                                    <table class="nestedTable">
                                        <tr>
                                            <td>
                                                <input type="radio" id="radio1" name="radioEx" value="radio1" onchange="calculateTotal()"> 
                                                <label for="radio1">radio3</label>
                                            </td>
                                            <td>
                                                <input type="radio" id="radio2" name="radioEx" value="radio2" onchange="calculateTotal()"> 
                                                <label for="radio2">radio3</label>
                                            </td>
                                            <td>
                                                <input type="radio" id="radio3" name="radioEx" value="radio3" onchange="calculateTotal()"> 
                                                <label for="radio3">radio3</label>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- _______________________________ --> 
                                </td>
                            </tr>
                        </table>
                        <!-- ------------------------------- -->
                        <p align="center"><input type="submit" id='submit' name="submit" value='Submit' onclick="validation()"></p>
                        <!-- ------------------------------- -->
                    </fieldset>
                </div>
                </div>    
            </section>
            <!-- __________ ~ Ticket Reservation ~ (End) ____________-->
            
            <!-- _______________ ~ Seats ~ (Start) __________________-->
            <section>
                <div class="outerRim">
                <div class="innerBlock" >       <!-- NEED New ID-->
                    <fieldset  class="nestedTable" align="center">
                        <legend><h1 class="innerBlockTitle">~ Seats ~</h1></legend>
                        <table class="formTable" align="center">
                            <caption> Seats Available:</caption>
                                <!-- number of seats available-->
                                <tr>
                                    <th><label for="availableSeats"><strong>Number of Seats Available: </strong></label></th>  
                                    <td><output type="number" id="availableSeats" name="availableSeats" value="getRemainingSeats()">-----</output></td>
                                </tr>
                                <tr>
                                    <th><label for="availableAcessibleSeats"><strong>Number of Wheelchair Accessible Seats Available: </strong></label></th>
                                    <td><output type="number" id="availableAccessibleSeats" name="availableAccessibleSeats" value="getRemainingAcbessibleSeats()">-----</output></td>
                                </tr>
                                <!-- ------------------------------- -->
                                <!-- list of titles (this filters the titles as you type) or you can use it as a dropdown-->
                                <tr>
                                    <th><span><strong>Movie Title: </strong></span></th>
                                    <td><input type="text" name="movies" list="movieTitles" placeholder="Enter movie title"/></td>
                                    <datalist id="movieTitles">                         
                                        <option>movie title first</option>
                                        <option>movie title second</option>
                                    </datalist>
                                </tr>
                                <!-- ------------------------------- -->
                                <!-- Date and time - check if local?-->
                                <tr>
                                    <th><span><strong>Date/time: </strong></span><span style="color: rgb(185, 32, 109)"><br>(at a later date: will cleanup / provide clear options for when the movie is shown)<br><br>
                                    </span></th>
                                    <td>
                                        <input type="date" /> 
                                        <input type="time" /> 
                                        <input type="datetime-local" /> <!-- NOTE: don't let them do both time and date at once, use one to update the other-->
                                        <input type="datetime" />       <!-- ???  -->
                                    </td>
                                </tr>
                                <!-- ------------------------------- -->
                        </table>
                    </fieldset>
                </div>
                </div>    
            </section>
            <!-- ________________ ~ Seats ~ (End) ___________________-->




<!-- _____ Content for Movie Information webpages _____ -->

            <!-- ____________ ~ Information ~ (Start) _______________-->
            <?php include 'php/getMovieInfo.php'; ?>

            <section>
                <div class="outerRim">
                <div id="TicketOrderForm" class="innerBlock" >
                    <fieldset>
                        <legend><h1 class="innerBlockTitle">~ Information ~</h1></legend>
                            <table class="formTable" align="center">
                                <caption>Information:</caption>
                                <tr>
                                    <td rowspan="10"><image src="posters/<?php echo "".$row["movieID"].""?>" height="210px"></image> </td> <!-- get image from database? relative referencing?-->                      
                                    <th>Title:</th>                                             <!-- src="poster.png"  --> 
                                        <td>
                                            <span id="chosenMovie" value="chosenMovie">
                                                <?php echo "".$row["title"].""?>
                                            </span> 
                                        </td><br>
                                </tr>
                                <tr><th>Availablity:</th>       
                                    <td><?php echo "".$availability.""?>      <!-- currently showing (or) coming soon" --> </td></tr>
                                <tr><th>Release date:</th>      
                                    <td><?php echo "".$row["releaseDate"].""?>      <!-- ....................... --> </td></tr>
                                <tr><th>Rating:</th>            
                                    <td><?php echo "".$row["rating"].""?>      <!-- ....................... --> </td></tr>
                                <tr><th>Genre:</th>             
                                    <td><?php echo "".$row["genre"].""?>      <!-- ....................... --> </td></tr>
                                <tr><th>Description:</th>       
                                    <td><?php echo "".$row["description"].""?>      <!-- ....................... --> </td></tr>
                                <tr><th>3D:</th>                
                                    <td><?php echo "".$threeD.""?>      <!-- ....................... --> </td></tr><!-- yes/no-->
                                <tr><th>Closed Captioning:</th> 
                                    <td><?php echo "".$cc.""?>      <!-- ....................... --> </td></tr>
                                <tr><th>Duration: </th>         
                                    <td><?php echo "".$duration.""?>      <!-- ....................... --> </td></tr>

                                <!-- possibly link theater contact info here-->
                            </table>
                        </fieldset>
                    </div>
                    </div>
                </section>
                <!-- _____________ ~ Information ~ (End) ________________-->
                
                <!-- _______________ ~ Stats ~ (Start) __________________-->
                <!-- ------------------------------- -->
                <section>
                    <div class="outerRim">
                    <div class="innerBlock" >       <!-- Need New Id-->
                        <fieldset>
                            <legend><h1 class="innerBlockTitle">~ Stats ~</h1></legend>
                                <!-- ------------------------------- -->
                                <table class="formTable" align="center">
                                    <caption>Score:</caption>
                                    <tr>
                                        <th><label>Rate this movie:</label></th>
                                        <td><input type="number" min="1" max="5" name="rating" id="rating" placeholder="1"/></td>
                                    </tr>
                                    <tr>
                                        <th>Stars:<input type="range" min="0" max="5" step="1" name="happiness"></th>
                                        <td>Your Rating is: <span>---</span> stars</td>
                                    </tr>
                                </table>
                                <br>
                                <!-- ------------------------------- -->
                                <label for="seatSelection"><strong>Seat selection: </strong></label>
                                (Note: component will be added at a later date)<br><br>
                                <!-- ------------------------------- -->
                                some additional information for reciept (which user is not asked)...<br><br>
                                
                                <label for="theatre"><strong>Theatre: </strong></label>  
                                <output type="number" id="theatre" name="theatre" value="theatre()">-----</output>
                                <br>
                                <label for="theatreLocation"><strong>Theatre Location: </strong></label>  
                                <output type="number" id="theatreLocation" name="theatreLocation" value="theatreLocation()">-----</output>
                                <br>
                                <label for="theatreNumber"><strong>Theatre Number: </strong></label>  
                                <output type="number" id="theatreNumber" name="theatreNumber" value="getTheatreNumber()">-----</output>

                                <br>
                        </fieldset>
                        </table>
                    </fieldset>
                </div>
                </div>
            </section>
            <!-- ________________ ~ Stats ~ (End) ___________________-->
            <br>
            </div>
        </div>


        </section>
        </div>
    </div>
</form>

<!--______________________________________________________________________________________________-->	
    <footer  class="navBar">
        <nav>                   <!-- Horizontal Navigation Links -->
            <ul>
                <li>Back to Top</li>
                <li>Site Map</li>
                <li>Contact</li>
                <li>About</li>
            </ul>
        </nav>
    </footer>
<!--______________________________________________________________________________________________-->
</body>
</html>



