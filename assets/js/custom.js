
// When the user scrolls down 50px from the top of the document, resize the header's font size
scrollFunction();
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("mainNav").style.backgroundColor = "rgba(192, 255, 192, 0.7)";
  } else {
    document.getElementById("mainNav").style.backgroundColor = "#2fe9a7";
  }
}