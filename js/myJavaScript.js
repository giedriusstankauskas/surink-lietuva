$(document).ready(function(){
  $('.parallax').parallax();
});
$(document).ready(function(){
  $('.sidenav').sidenav();
});


$(function () {
  $('[data-toggle="popover"]').popover({ trigger: "hover" })
})


var d = new Date;
  document.getElementById('copyrYear').innerHTML = '&copy; ' +  d.getFullYear();

function showModal(city){
  alert(city);

}
