<!DOCTYPE html>
<html lang="en">
<head>
  <link rel= "icon" href="images/page-icon.ico" type="image/x-icon">
  <title>IBITS | Camera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
#container {
   /* margin-top: 50px ;
    margin: 0px auto; */
    width: 500px;
    height: 375px;
   /*border: 10px #333 solid;*/
    background-image: url(snapshots/download.jpg);
    
}
#videoElement {
    width: 500px;
    height: 375px;
  
}
.no-padding
{
  padding-left: 0;
  padding-right: 0;

}

#f_style
{
    width: 100%;
    height: 70%;  
    margin-right: 10px;
  
}

body{
  background: #FEB800;
  font-family: Tokyo;
}



</style>

</head>
<body>

<canvas id="CANVAS" name="CANVAS" width="400" height="350">Your browser does not support Canvas.</canvas>
  
    
    <div id="container"  name='cont' class="container-fluid no-padding ">
       <video autoplay="true" id="videoElement" name='vid'>
     
       </video>
    </div>

 <a id="download" download="ProfilePicture.jpg"></form>
<button onclick="myFunction(); download();" align="center" style="margin: 20px 250px auto " class="btn btn-primary dropdown-toggle" type="button" >Capture</button></a>

<script>

  function download(){
    var download = document.getElementById("download");
    var image = document.getElementById("CANVAS").toDataURL("image/png")
                    .replace("image/jpg", "image/octet-stream");
        download.setAttribute("href", image);
        //download.setAttribute("download","archive.png");
  }





  var video = document.querySelector("#videoElement");
 
if (navigator.mediaDevices.getUserMedia) 
{       
    navigator.mediaDevices.getUserMedia({video: true})
  .then(function(stream) {
    video.srcObject = stream;
  })
  .catch(function(err0r) {
    console.log("Something went wrong!");
  });
var i=0;
function myFunction() {
  var x =  document.getElementById("CANVAS") ;
  var ctx = x.getContext("2d");
  ctx.fillStyle = "#FF0000";
  
  ctx.drawImage(video, 0, 0, 400, 350);

  //ctx.fillRect(20, 20, 150, 100);

  if (i <10)
  {
  document.body.appendChild(x);
  i=i+1;
};


}

}
</script>

    
</body>
</html>