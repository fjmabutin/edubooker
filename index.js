const track = document.getElementById('slideTrack');
 
function slideTo(panelIndex) {
    track.style.transform = `translateX(-${panelIndex * 100}%)`;
}
 
/* See How It Works button */
document.getElementById('worksBtn').addEventListener('click', function (e) {
    e.preventDefault();
    slideTo(1);
});
 
/* LEARN MORE ABOUT US link */
document.getElementById('aboutBtn').addEventListener('click', function (e) {
    e.preventDefault();
    slideTo(2);
});
 
/* Back on How It Works panel btn*/
document.getElementById('backFromWorks').addEventListener('click', function () {
    slideTo(0);
});
 
/* Back on About panel → btn*/
document.getElementById('backFromAbout').addEventListener('click', function () {
    slideTo(0);
});
 