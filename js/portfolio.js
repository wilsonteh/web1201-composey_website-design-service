
let body = document.body;
let imgWrappers = body.querySelectorAll('.img-wrapper');


// console.log(images[0].height);

function checkImage(e) {
   let imgWrapper = e.currentTarget;
   let image = imgWrapper.children[0].children[1];
   let scrollForMore = imgWrapper.children[0].children[0];

   if (image.clientHeight < imgWrapper.clientHeight) {
      scrollForMore.style.display = 'none';
   }
}

imgWrappers.forEach(wrapper => {
   wrapper.addEventListener('mouseover', e => checkImage(e));
})





