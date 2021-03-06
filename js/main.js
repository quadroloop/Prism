// main Javascript file for Octolroute App
// Author Bryce C. Mercines 2018

//init sidebar-scroll

var userToken;

var ps = new PerfectScrollbar('#sidebar');

window.onload = function(){

  var editorscroll = new PerfectScrollbar('.ace_scrollbar');
  var editorscroll_h = new PerfectScrollbar('.ace_scrollbar-h');


  // set user Token
  userToken = generate_token(15);
}

//sidebar UI
function open_sidebar() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("sidebar").style.width = "15%";
  document.getElementById("sidebar").style.display = "block";
}
function close_sidebar() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("sidebar").style.display = "none";
}


// init editor

 var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");
        editor.setAutoScrollEditorIntoView(true);



// functions


   function deploy() {
   	  if(editor.getValue() != [ ]){
   	  	swal("Success!","you have successfully deployed","success");
   	  }
   }


   // editor mode..
    function call_editor() {
    	var img = document.getElementById('logo').style.display = "none";
    	var coder = document.getElementById('editor');
    	coder.style = "border-radius:10px;width:850px;height:450px;";
    	coder.class = "w3-animate-opacity";
        editor.setTheme("ace/theme/ambiance");
    editor.session.setMode("ace/mode/HTML");
    }

   //about

   function about_app() {
   	  document.getElementById("editor").style.display = "none";
   	  document.getElementById("about").style.display = "block";
   }
//generate userToken
 function generate_token(length){
    //edit the token allowed characters
    var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
    var b = [];  
    for (var i=0; i<length; i++) {
        var j = (Math.random() * (a.length-1)).toFixed(0);
        b[i] = a[j];
    }
    return b.join("");
}

function view(url) {
  var x = document.getElementById('viewer');
  var y = document.getElementById('samples');
  y.style.display = 'none';
  x.style.display = 'block';
  x.src = url;
}

function openEditor() {
  var x = document.getElementById('samples');
    var y = document.getElementById('editor');
    x.style.display = 'none';
    y.src = './Three.js/editor/index.html';
    y.style.display = 'block';

}


function paginate(page) {
   axios.get(location.href+'/pager.php?page='+page)
  .then(function (response) {
    var panels = response.data;
    document.getElementById('samples').innerHTML = '';
    for(var i=0;i<panels.length;i++) {
  document.getElementById('samples').innerHTML += '<li class="w3-bar w3-hover-pale-blue" style="cursor:pointer" title="'+panels[i]+'" onclick="view(this.title)">'+
        '<i  class="w3-bar-item fa fa-circle w3-text-light-green w3-margin w3-white w3-xlarge w3-right"></i>'+
         '<i class="w3-bar-item fa fa-bars w3-margin w3-text-purple w3-white w3-xlarge w3-right"></i>'+
          '<iframe src="'+panels[i]+'" class="w3-bar-item w3-hide-small w3-card-2" style="width:450px;height:250px;border-radius:10px;"></iframe>'+
          '<div class="w3-bar-item">'+
            '<span class="w3-large w3-text-indigo">'+panels[i]+'</span><br>'+
            '<span class="w3-text-grey">Three.js Animation File</span>'+
          '</div>'+
        '</li>';
}

  })
  .catch(function (error) {
    console.log(error);
  });
} 

