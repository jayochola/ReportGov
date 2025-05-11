<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="#Home.php"><img  class="imagelogo"src="images/logo.png" alt="GOv Insults Image" >
            <h1 class="headingtitle">ReportGOv.</h1>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="#Home"><button>Home</button></a></li>
                    <li><a href="#About"><button>About</button></a></li>
                    <li> <a href="#Insults"><button>Insults</button></a></li>
                    <li> <a href="#Add Entry"><button>Add Entry</button></a></li>
                    <li><a href="#Statistics"><button>Statistics</button></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section id="Home">
        <img  class="backgroundimage"src="images/backgroundimage.webp" alt="background image" >
        
        <br>Holding Kenyan Leaders Accountable for Their Words
        Documenting insults, demeaning language, and inflammatory remarks made by Kenya's public officials towards citizens, protestors, and critics.

    </section>
    <section id="About"></div>
        <div class="about">
            <div class="imageinsults">
                <img class="aboutimage"src="images/aboutimage.jpeg"  alt="aboutimage">
               
            </div>
            <div class="aboutinfo">
                <h1 class="aboutheading">About The Insult Tracker</h1>
                <h4 class="about-p2"> The Insult Tracker is a non-partisan initiative dedicated to documenting and analyzing inappropriate language used by Kenya's public officials. Our mission is to promote accountability and respect in Kenyan political discourse.<br><br>

                <h4> By creating a comprehensive record of insults and demeaning language, we aim to: </h4>
                
                <li>
                    <ul>Provide transparency about how Kenya's elected officials speak to and about their constituents</ul>
                    <ul>Identify patterns of verbal abuse that might otherwise be forgotten in the news cycle</ul>
                    <ul>Encourage higher standards of public discourse</ul>
                    <ul>Empower Kenyan citizens with information to hold their representatives accountable</ul>
                </li>
                
               
                
            </div>

        </div>

       


    
    </section>
    <section id="Insults">
       <h1 class="insultsheadline"> Recently Added </h1>
       <div class="inputsearch">
          <input class ="searchinsults" type="text"  placeholder="Search by official name, date" name="search" id="search">

        </div>
        <div class="navlistleaders">

            <nav class="insultslists">
                <li><button>All</button></li>
                <li><button>President</button></li>
                <li><button>Governors</button></li>
                <li><button>MPs</button></li>
                <li><button>Senators</button></li>
                <li><button> Women Reps</button></li>
                <li><button>Other Leaders</button></li>
                <li><button>Most Critical</button></li>
                
            </nav>

        </div>
       
              

   
        <div class="viewentries">
            <div class="eachview">
                <div class="heading">
                    <h3> Karen Nyamu, Nominated Senator <label> Apr 2, 2025</h3>

                    <div class="bodyview">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Add Entry">
        <div class="submitform">
            <form action="index.php" method="post">
                <h1 class="formsubmit">Submit New Entry</h1>
                <div class="entries">
                    <h3>Who said it?</h3><br>
                    <input type="text" class="whosaid" placeholder="Enter name of the leader here">
                    <h3>Leadership Role?</h3><br>
                    <select name="selectleaderrole" id="selectleaderrole">
                        <option value="" disabled selected>-- Select a role --</option>
                        <option value="President">President</option>
                        <option value="Governor">Governor</option>
                        <option value="Senator">Senator</option>
                        <option value="Member of Parliament">Member of Parliament</option>
                        <option value="Women Rep">Women Rep</option>
                        <option value="Member of county Assembly">Member of county Assembly</option>
                        <option value="Other">Other</option>
                    </select><br>

                    <!-- Exact Quote: -->
                     <h3>Exact Quote</h3><br>
                     <textarea name="exactquote" id="exactquote" placeholder="Please provide the exact words used..."></textarea>
                        <br>

                    
                    <label for="datesaid">Date said</label><br>
                        <input type="date" name="datesaid" id="datesaid"><br>

                    
                    <label for="context">Context</label><br>
                    <textarea name="context" id="context" placeholder="Please describe the context un which the insult was done.  When and where was this said? What was happening?"></textarea>
                    <br>
                    <label for="interpretation">Interpretation</label><br>
                    <textarea name="interpretaion" id="interpretration" placeholder=" Analysis of tone, intention, and impact...
                    Why It Matters:"></textarea><br>
                    <label for="severity">saverity</label><br>
                    <select name="severity" id="severity">
                        <option value="" disabled selected>-- Please Select Here --</option>
                        <option value="Critical">Critical</option>
                        <option value="Medium">Medium</option>
                        <option value="Slip Of the Tongue">Slip Of the Tongue</option>
                    </select><br>
                    <button name="submit" id="submit"> Submit</button>
                   

                </div>

            </form>
        </div>

    </section>
    <section id="Statistics">

    </section>
    <footer>
        <div class="footercontacts">
            <div class="navfooter">
                <ul>
                    <li> <a href="/james_ochola1_/instgram.com">Instgram</a></li>
                    <li> <a href="jamesochola2002@gmail.com">Email</a></li>
                    <li> <a href="/james_ochola1_/instgram.com">Linked In</a></li>
                    <li> <a href="/james_ochola1_/instgram.com">X</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>