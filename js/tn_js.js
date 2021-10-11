document.addEventListener("DOMContentLoaded", function (event) {
  var timeout;
  // <<< MENU
  document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
    document.querySelector('.offcanvas-collapse').classList.toggle('open')
  })

  // >>>
  if ($("#top_video").length) {
    var startVideo = document.querySelectorAll("#top_video video");
    startVideo.forEach((vidItem) => {
      vidItem.addEventListener("click", () => {
        if (vidItem.paused) {
          vidItem.play();
        } else {
          vidItem.pause();
        }
      });
    });
    setVideoClass();
    window.addEventListener("resize", function (event) {
      setVideoClass();
    });
  }
  if ($("#videos").length) {
    var observerOptions = {
      rootMargin: "0px",
      threshold: 1.0,
    };
    var observer = new IntersectionObserver(observerCallback, observerOptions);
    var vidCollection;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      vidCollection = document.querySelectorAll("#videos video");
      vidCollection.forEach((elementToObserve) => {
        observer.observe(elementToObserve);
      });
    } else {
      var vidCollectionSmall = document.querySelectorAll("#videos video");
      vidCollectionSmall.forEach((itemVideo) => {
        itemVideo.addEventListener("mouseover", (e) => {
          e.target.play();
        });
        itemVideo.addEventListener("mouseout", (e) => {
          e.target.pause();
        });
      });
    }
    vidCollection = document.querySelectorAll(".map_video,.map_video_vertical");
    vidCollection.forEach((itemVideo) => {
      itemVideo.play();
    });
  }
  
  if ($('.tn_cart_form').length) {
    $('.quantity-arrow-minus').on('click', function(event) {  
      var inElement = $(this).siblings('.quantity').find('input[type=number]');  
      if (+inElement.val() > 1)  {         
        inElement.val(+inElement.val() -1);
        inElement.trigger('change');
      //$('[name="update_cart"]').trigger("click");
    }
    } );
    $('.quantity-arrow-plus').on('click', function(event) {  
      var inElement = $(this).siblings('.quantity').find('input[type=number]');  
      inElement.val(+inElement.val() +1);
      inElement.trigger('change');
      //$('[name="update_cart"]').trigger("click");
    } );

    

    $("body").on("change", '.product-name input[type=number]', function (event ) {
      event.preventDefault();
      //$('[name="update_cart"]').trigger("click");
      if ( timeout !== undefined ) {
        clearTimeout( timeout );
      }
  
      timeout = setTimeout(function() {
        $("[name='update_cart']").trigger("click");
      }, 1000 );
   });
  }
  
 
});

function observerCallback(entries, observer) {
  var flag = false;
  entries.forEach((entry) => {
    //console.log(entry);
    var videoElem = entry.target;
    if (!videoElem) {
      return;
    }
    if (entry.isIntersecting) {
      //videoElem.play();
      var thePromise = videoElem.play();

      if (thePromise != undefined) {
        thePromise
          .then(
            function (_) {
              flag = true;
            },
            function (error) {
              console.log("video play failed-" + error);
            }
          )
          .catch(function (_) {
            console.log("video play failed");
          });
      }
    } else {
      if (flag) {
        flag = false;
        videoElem.pause();
      }
    }
  });
}

function isVertical() {
  var windowHeight = document.documentElement.clientHeight;
  var windowWidth = document.documentElement.clientWidth;
  return windowHeight > windowWidth;
}

function setVideoClass() {
  if (isVertical()) {
    console.log("vert");
    document.querySelector("#start_video_vertical").classList.add("show_video");
    document.querySelector("#start_video").classList.remove("show_video");
  } else {
    console.log("hor");
    document.querySelector("#start_video").classList.add("show_video");
    document
      .querySelector("#start_video_vertical")
      .classList.remove("show_video");
  }
}
