function hitungKlik(valueToAdd)
{
  var count = parseInt(document.getElementById("count").innerText);
  var new_count = count + valueToAdd;
  document.getElementById("count").innerText = new_count;
  document.getElementById("counter").value = new_count;
  if(new_count % 2 == 0)
  {
    $("#myNavigasi").css({'background' : 'darkgrey' , 'transition' : '0.5s' , 'opacity' : '0.7'});
    $('.link').css({'color' : "white" , 'transition' : '0.5s'});
    $("#optionStarted").fadeOut(300);
    $('#myCarousel').css({'opacity' : "1"});
    $("#kotakLogin").fadeOut(500);
    $("#kotakDaftar").fadeOut(500);
  }
  else if(new_count % 2 != 0)
  {
    $("#optionStarted").fadeIn(500);
  }
  else
  {
    alert("Harap Refresh Ulang Halaman, Terimakasih.");
  }

  // Button Langsung Sign In

  $(document).ready(function(){ 
    $(".optionSignIn").click(function(){
      $('#myCarousel').css({'opacity' : "0"});
      $("#myNavigasi").css({'background' : 'white' , 'opacity' : '0.7' , 'transition' : '0.5s'});
      $('.link').css({'color' : "black" , 'transition' : '0.5s'});
      $("#kotakLogin").fadeIn(500);
      $("#optionStarted").fadeOut(500);
      document.getElementById("username").value="";
      document.getElementById("password").value="";
    })
  });

  // Button Langsung Sign Up

  $(document).ready(function(){
    $(".optionSignUp").click(function(){
      $('#myCarousel').css({'opacity' : "0"});
      $("#myNavigasi").css({'background' : 'white' , 'opacity' : '0.7' , 'transition' : '0.5s'});
      $('.link').css({'color' : "black" , 'transition' : '0.5s'});
      $("#kotakDaftar").fadeIn(500);
      $("#optionStarted").fadeOut(500);
      document.getElementById("nameCreate").value="";
      document.getElementById("addressCreate").value="";
      document.getElementById("usernameCreate").value="";
      document.getElementById("passwordCreate").value="";
    })
  });

  // Button Move To Sign Up

  $(document).ready(function(){
    $("#createAccount").click(function(){
      $("#kotakLogin").fadeOut(500);
      $("#kotakDaftar").fadeIn(500);
      document.getElementById("nameCreate").value="";
      document.getElementById("addressCreate").value="";
      document.getElementById("usernameCreate").value="";
      document.getElementById("passwordCreate").value="";
    })
  });

  // Button Move To Sign In

  $(document).ready(function(){
    $("#haveAccount").click(function(){
      $("#kotakDaftar").fadeOut(500);
      $("#kotakLogin").fadeIn(500);
      document.getElementById("username").value="";
      document.getElementById("password").value="";
    })
  });

  $(document).ready(function(){
    $("#about").click(function(){
      $("#myNavigasi").css({'background' : 'red' , 'transition' : '0.5s' , 'opacity' : '0.7'});
      $('.link').css({'color' : "white" , 'transition' : '0.5s'});
      $("#optionStarted").fadeOut(300);
      $('#myCarousel').css({'opacity' : "1"});
      $("#kotakLogin").fadeOut(500);
      $("#kotakDaftar").fadeOut(500);
      document.getElementById("count").innerText = 0;
      document.getElementById("counter").value = 0;
    })
  });

   $(document).ready(function(){
    $("#contactDev").click(function(){
      $("#myNavigasi").css({'background' : 'darkgrey' , 'transition' : '0.5s' , 'opacity' : '0.7'});
      $('.link').css({'color' : "white" , 'transition' : '0.5s'});
      $("#optionStarted").fadeOut(300);
      $('#myCarousel').css({'opacity' : "1"});
      $("#kotakLogin").fadeOut(500);
      $("#kotakDaftar").fadeOut(500);
      document.getElementById("count").innerText = 0;
      document.getElementById("counter").value = 0;
    })
  });

}