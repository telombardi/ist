<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Information Systems and Technology at The University of the Virgin Islands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald" />
        <link rel="stylesheet" type="text/css" href="./css/ist.css" />
    </head>
    <body>
         <?php require("header_include.html"); ?> 
        <div class="w3-row"> 
        <div class="w3-container w3-white w3-col w3-mobile l6">
                  <h3 class="w3-myfont">The Information Systems and Technology department teaches students to place
                  technology in the service of humanity. In virtually every field of human endeavor, professionals 
                  adapt information systems and technologies to the pressing problems of our time. The IST approach
                  focuses on computing as a tool for addressing the problems of the real world.</h3>
         </div>
         <div class="w3-container w3-white w3-col w3-mobile l6">
                  <button onclick="myFunction('design')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Design for Diversity</button>
                 <div id="design" class="w3-container w3-hide">
                            <p>Design.</p>
                 </div>
                 <button onclick="myFunction('data')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Data for Decision-Making</button>
                 <div id="data" class="w3-container w3-hide">
                            <p>Data.</p>
                 </div>
                 <button onclick="myFunction('information')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Information for Inspiration</button>
                 <div id="information" class="w3-container w3-hide">
                            <p>Information.</p>
                 </div>
                 <button onclick="myFunction('technology')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Technology for Teamwork</button>
                 <div id="technology" class="w3-container w3-hide">
                            <p>Teamwork.</p>
                 </div>
                 <button onclick="myFunction('software')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Software for Sharing</button>
                 <div id="software" class="w3-container w3-hide">
                            <p>Sharing.</p>
                 </div>
                 <button onclick="myFunction('computation')" class="w3-button w3-block w3-left-align w3-indigo w3-hover-sand w3-myfont w3-xlarge">
                             Computation for Communication</button>
                 <div id="computation" class="w3-container w3-hide">
                            <p>Of course students will learn how to connect computers, 
                                but more importantly students will learn how to use 
                                computers to connect to people.</p>
                 </div>

<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
         </div>
         

                          
        </div>
         <?php require("footer_include.html"); ?>     
    </body>
 </html>
