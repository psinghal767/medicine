<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search Patients</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Antic'>

      <link rel="stylesheet" href="css/searchStyle.css">




  
</head>

<body>
  <div align="center">
  <br>
  <br>
  <br>
  <div class="text">Search Patients</div>
  <br>
  <br>
  <br>
  <input class="button" id="myInput" onkeyup="myFunction()" placeholder="Search..." />
  <script src='http://use.edgefonts.net/amaranth.js'></script>
<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
    
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>


<ul id="myUL">
  <li><a href="#" class="header">A</a></li>
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#" class="header">B</a></li>
  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#" class="header">C</a></li>
  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul>

  
</body>
</html>
