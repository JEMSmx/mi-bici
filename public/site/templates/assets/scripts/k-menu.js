(function() {
  var
  navbar = document.getElementsByClassName("k-navbar")[0],
  ctrl_hamburger = document.getElementsByClassName("k-navbar-hamburger")[0],
  ctrl_close     = document.getElementsByClassName("k-navbar-close")[0];

  ctrl_hamburger.addEventListener("click", function() {
    document.body.style.position = "fixed";
    navbar.className += " k-as-overlay";
  });

  ctrl_close.addEventListener("click", function() {
    document.body.style.position = "";
    navbar.className = navbar.className.replace(" k-as-overlay", "");
  });
})();
function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}
function changeLan(path){
  if(document.getElementById("lang").value=='en')
    val='1089';
  else
    val='1087';
  createCookie('language', val, '7');
  location.href="/"+document.getElementById("lang").value+path;
}