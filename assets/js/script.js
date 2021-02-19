/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  if (window.matchMedia("(max-width:768px)").matches) {
    document.getElementById("sidebar").style.right = "-16.5%";
    document.getElementById("sidebar").style.zIndex = 999;
  }

  if (window.matchMedia("(max-width:425px)").matches) {
    document.getElementById("sidebar").style.right = "-19.5%";
    document.getElementById("sidebar").style.zIndex = 999;
  }
  //   document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  if (window.matchMedia("(max-width:768px)").matches) {
    document.getElementById("sidebar").style.right = "-76.5%";
  }
  if (window.matchMedia("(max-width:425px)").matches) {
    document.getElementById("sidebar").style.right = "-80.5%";
  }
  //   if (window.matchMedia("(min-width:1024px)").matches) {
  //     document.getElementById("sidebar").style.width = "100%";
  //     document.getElementById("sidebar").style.marginRight = "50em";
  //   }
  //   document.getElementById("main").style.marginLeft = "0";
}

// if (window.matchMedia("(min-width:1024px)").matches) {
//   // it matches
//   document.getElementById("sidebar").style.marginRight = "7.5em";
// }
