
function firstAccFunc() {
  var x = document.getElementById("firstAcc");

  if (x.className.indexOf("show") == -1) {
    x.className += " show";
    x.previousElementSibling.className += " green";


  } else {
    x.className = x.className.replace(" show", "");
    x.previousElementSibling.className =
    x.previousElementSibling.className.replace(" green", "");

  }
}
function secondAccFunc(){
  var y = document.getElementById("secondAcc");
  if (y.className.indexOf("show") == -1) {
    y.className += " show";
    y.previousElementSibling.className += " green";


  } else {
    y.className = y.className.replace(" show", "");
    y.previousElementSibling.className =
    y.previousElementSibling.className.replace(" green", "");

  }
}
function thirdAccFunc(){
  var z = document.getElementById("thirdAcc");
  if (z.className.indexOf("show") == -1) {
    z.className += " show";
    z.previousElementSibling.className += " green";


  } else {
    z.className = z.className.replace(" show", "");
    z.previousElementSibling.className =
    z.previousElementSibling.className.replace(" green", "");

  }
}
