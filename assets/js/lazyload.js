const images = document.querySelectorAll("[data-src]");

// custom function that copies the path to the img
// from data-src to src
function preloadImage(imgInView) {
    console.log(imgInView);
    // console.log(imgInView.getAttribute("data-src"));
    let dataSrc = imgInView.getAttribute("data-src");
    console.log(dataSrc);

    imgInView.setAttribute("src", dataSrc);
}

// preloadImage()
// console.log(images.length);
const config = { 
    rootMargin: "0px 0px 50px 0px",
    threshold: 0
 };

let observer = new IntersectionObserver(function (entries, self) {
  entries.forEach(entry => {
      if (entry.isIntersecting) { 
        preloadImage(entry.target);
        // the image is now in place, stop watching
        self.unobserve(entry.target);
       }
  });
}, config);

images.forEach(image => { observer.observe(image); });
