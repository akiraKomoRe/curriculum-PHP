// $('.click').click(function() {
//   $(this).toggleClass('active');
//   let i = $(this).hasClass('active');

//   function onFunc() {
//     console.log("onの処理を実行するよ");
//     $('.left').animate({width: '0%'}, 2000);
//     $('.right').animate({width: '0%'}, 2000);
//   }
//   function offFunc() {
//     console.log("offの処理を実行するよ");
//     $('.left').animate({width: '50%'}, 2000);
//     $('.right').animate({width: '50%'}, 2000);
//   }

//   if(i == true) {
//     onFunc();
//   } else {
//     offFunc();
//   }

// })

$('.click').click(function() {
  $('.left').toggleClass('action');
  $('.right').toggleClass('action');
  return false;
})