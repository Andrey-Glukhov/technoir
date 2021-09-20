document.addEventListener("DOMContentLoaded", function (event) {

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
  var input = document.querySelector( '.file_attach .wpcf7-file' );
 
    var label	 = document.querySelector( '.file_string' ),
      labelVal = label.innerHTML;
  
    input.addEventListener( 'change', function( e )
    {
      var fileName = '';
      if( this.files && this.files.length > 1 ) {
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      } else {
        fileName = e.target.value.split( '\\' ).pop()
      }
      if( fileName ) {
        label.innerHTML = labelVal + ' ' + fileName;
      }  
      else
        label.innerHTML = labelVal;
    });
    var iconAttach = document.querySelector('.attach_icon');
    iconAttach.addEventListener('click', function() {
      input.click();
    });
    document.querySelector('.wpcf7-form').addEventListener('submit', function() {
      document.querySelector( '.file_string' ).innerHTML = 'File:'
    });
    setVideoClass();
    window.addEventListener('resize', function(event){
      setVideoClass();      
    });
});

function observerCallback(entries, observer) {
  var flag = false;
  entries.forEach((entry) => {
    //console.log(entry);
    var videoElem = entry.target;
    if (! videoElem) {
      return
    }
    if (entry.isIntersecting) {
      //videoElem.play();
      var thePromise = videoElem.play();

    if (thePromise != undefined) {

        thePromise.then(function(_) {

          flag =true;

        },
        function(error) {
          console.log('video play failed-' + error);
        })
        .catch(function(_)  {
          console.log('video play failed');
        });

    }
    }
    else {
      if (flag) {
          flag =false;
          videoElem.pause();
        }
     }
  });
}

function isVertical() {
  var windowHeight = document.documentElement.clientHeight;
	var windowWidth  = document.documentElement.clientWidth;
	return windowHeight > windowWidth;
}

function setVideoClass() {
  if (isVertical()) {
    console.log('vert');
    document.querySelector('#start_video_vertical').classList.add('show_video');
    document.querySelector('#start_video').classList.remove('show_video');
  } else {
    console.log('hor');
    document.querySelector('#start_video').classList.add('show_video');
    document.querySelector('#start_video_vertical').classList.remove('show_video');
  }
}

