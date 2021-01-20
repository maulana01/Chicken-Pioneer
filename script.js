/*================================================================================*/
// Ketika di scroll ke bawah sebanyak 20px, maka akan muncul navbar, jika tidak, maka navbar akan di sembunyikan
const scrollFunction = () => {
    document.body.scrollTop > 540 || document.documentElement.scrollTop > 540
    ? document.getElementById("navbar").style.top = "0"
    : document.getElementById("navbar").style.top = "-50px";
}

window.onscroll = () => {scrollFunction()};
/*================================================================================*/

/* Keep track of scroll position */

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    console.log(scroll)
});
