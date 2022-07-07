export default class locationdropdown {
  constructor() {
    this.init();
  }

  init() {
    this.postRender();
  }

  postRender() {

    function locationClick () {
      var element = document.getElementById("dropdown-locations");
      document.getElementById("locationsBtn").onclick = function(){
        // console.log('d')
        element.classList.toggle("activeLi");
      };
    }

    window.addEventListener('DOMContentLoaded', event => {
        var rsliderLoad = document.getElementsByClassName('locatios-mainblock');
        if (rsliderLoad.length > 0) {
          window.addEventListener("load", function(){

            locationClick()

          });
        }
    });

  }
}