  //by default, the static menu is hidden
  var showStaticMenuBar = false;

  //when scrolling...
  $(window).scroll(function () {

      //if the static menu is not yet visible...
      if (showStaticMenuBar == false) {
          //if I scroll more than 200px, I show it 
          if ($(window).scrollTop() >= 200) {
              //showing the static menu
              $('#demo').addClass('fixed');

              showStaticMenuBar = true;

          }

      }
      //if the static menu is already visible...
      else {
          if ($(window).scrollTop() < 200) {
              $('#demo').removeClass('fixed');

              //I define it as hidden
              showStaticMenuBar = false;
          }
      }
  });