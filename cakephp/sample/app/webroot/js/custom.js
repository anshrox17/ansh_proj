
function myfunction()
{
  alert('Included js function is called :) '); 
}

var city = document.getElementById("city_dd");
city.addEventListener("click",function(){alert('clicked')},false);