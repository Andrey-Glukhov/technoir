// (function ($) {

// $(".barback").hover(
//     (e)=>{ e.target.play(); },
//     (e)=>{ e.target.pause(); }
// );
// })(jQuery);

document.addEventListener("DOMContentLoaded", function (event) {
  const startVideo = document.querySelector("#start_video");
  if (startVideo) {
    startVideo.addEventListener("click", () => {
      if (startVideo.paused) {
        startVideo.play();
      } else {
        startVideo.pause();
      }
    });
  }
  const vidCollection = document.querySelectorAll(".barback");
  vidCollection.forEach((itemVideo) => {
    itemVideo.addEventListener("mouseover", (e) => {
      e.target.play();
    });
    itemVideo.addEventListener("mouseout", (e) => {
      e.target.pause();
    });
  });

  // document.addEventListener('mouseover', '.barback', (e) => {
  //     e.target.play();
  // });
  // document.addEventListener('mouseout', '.barback', (e) => {
  //     e.target.pause();
  // });
});
