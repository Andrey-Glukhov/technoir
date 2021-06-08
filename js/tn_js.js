
document.addEventListener("DOMContentLoaded", function (event) {
  const startVideo = document.querySelector("#top_video video");
  if (startVideo) {
    startVideo.addEventListener("click", () => {
      if (startVideo.paused) {
        startVideo.play();
      } else {
        startVideo.pause();
      }
    });
  }
  const vidCollection = document.querySelectorAll("#videos video");
  vidCollection.forEach((itemVideo) => {
    itemVideo.addEventListener("mouseover", (e) => {
      e.target.play();
    });
    itemVideo.addEventListener("mouseout", (e) => {
      e.target.pause();
    });
  });

});
