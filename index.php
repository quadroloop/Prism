<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="./img/prism_logo.png">
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/ps.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/jquery.min.js"></script>
        <script src="./js/axios.min.js"></script>
    
    <script>
    var pages = 0;
    $(window).load(function() {
      paginate(0);
    $(".loader").fadeOut("slow");
})

    </script>

  <title>Prism</title>
  <style>
    h4 {
      font-family: 'Hind', sans-serif;
    }
  </style>
</head>
<body class="w3-white">

<div class="loader">
<center>
<img src="./img/prism_logo.png" class="logo">
<p class="w3-text-blue thin">Loading..</p>
<img src="./img/loader.gif" style="height:10px;width:300px;">
</center>
</div>

<div class="w3-sidebar w3-bar-block w3-card-4 w3-animate-left" style="display:none;overflow:auto;position: relative;" id="sidebar">
  <a class="w3-bar-item w3-large" onclick="close_sidebar();">
    <center>
       <img src="./img/prism.png" style="width:120px;">
       <hr class="w3-card-2">
    </center>
  </a>
   <a id="tool_state" class="dark-border w3-round w3-padding-small w3-text-grey tool_state"><i class="fa fa-map w3-text-grey"></i> MENU</a>
  <a href="./anims/editor/index.html" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-pencil w3-text-blue"></i> Editor</a>
  <a onclick="getRoute();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-sitemap w3-text-green"></i> Get Route Link</a>
  <a onclick="viewroute();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-eye w3-text-amber"></i> View Route</a>
  <a onclick="restart();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-refresh w3-text-pink"></i> Reset Data</a>
  <a onclick="about_app();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-file-text-o w3-text-purple"></i> About</a>
  <a href="https://github.com/quadroloop/Prism" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-github w3-text-black"></i> View on Github!</a>
  <br>
  <br>
   <a id="tool_state" class="dark-border w3-round w3-padding-small w3-text-grey tool_state"><i class="fa fa-cog w3-text-grey"></i> SETTINGS</a>
  <a href="call_editor();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-circle w3-text-amber"></i> Javascript</a>
  <a href="getRoute();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-circle w3-text-orange"></i> JSON</a>
  <a oclick="viewroute();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-circle w3-text-indigo"></i> PHP</a>
  <a href="editor();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-circle w3-text-pink"></i> HTML</a>
  <a href="getRoute();" class="w3-bar-item w3-button w3-hover-pale-green"><i class="fa fa-circle w3-text-purple"></i> CSS</a>
</div>


    <div class="w3-bar w3-white">
      <a onclick="open_sidebar();">
      <h4 class="w3-bar-item w3-padding-small w3-text-teal">    
      <img src="./img/prism.png" style="width:120px;">
      </a>
    </h4>
      <a href="https://github.com/quadroloop/Prism" title="View on Github!"><i class="fa fa-github w3-text-grey fa-3x w3-right w3-bar-item w3-button w3-round"></i></a>
    </div> 
<div id="main">  
  <center>
   <ul class="w3-ul w3-margin" id="samples">


</ul>
<hr class="w3-card-2">
<div class="w3-bar w3-border w3-round" style="width: 200px;">
  <a onclick="pages--;paginate(pages);" class="w3-button w3-hover-blue">&#10094; Previous</a>
  <a onclick="pages++;paginate(pages);" class="w3-button w3-right w3-hover-blue">Next &#10095;</a>
</div>


      <iframe src="" style="width:100vw;height:100vh;display: none;border: 0px;" id="viewer"></iframe>
         <iframe src="" id="editor"></iframe>
        <div id="about">
          <h1>this is what it's about</h1>
        </div>  
      <br>   
      <br>
<!--     <button class="w3-text-white w3-btn w3-round w3-teal" onclick="deploy();"><i class="fa fa-send-o"></i> Create Response !</button>
 -->  </center>
 </div> 





<script type="text/javascript" src="./js/perfect-scrollbar.js"></script>
<script src="./js/main.js"></script>
</body>
</html>

