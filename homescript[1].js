function drop(){
  document.getElementById("down").classList.toggle("show");
}
window.onclick=function(event){
  if(!event.target.matches(".btn")){
    var d=document.getElementsByClassName("dropbtn-content");
    var i=0;
    for(i=0;i<d.length;i++){
      console.log("in loop")
      if(d[i].classList.contains("show"))
        d[i].classList.remove("show");
    }
  }
}
function opennav(){
  document.getElementById("mySidenav").style.width="250px";
}
function closenav(){
  document.getElementById("mySidenav").style.width="0px";
}
function open(){
  window.location.href='#';
}

ind=0;

function carousel(){
  var i;
  var x=document.querySelectorAll("mySlides");
  document.writeln(x);
  for(i=0;i<x.length;i++){
    x[i].style.display="none";
  }
  ind++;
  if(ind>x.length)
    {ind=1;}
  x[ind-1].style.display="block";
  setTimeout(carousel,50000);
}
