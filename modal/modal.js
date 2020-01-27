//this script to stop video when modal close
// made by andysaktia
/*

$("#thestory").on('hidden.bs.modal', function (e) {
    var urls = $("#thestory video").attr("src");
    $("#thestory video").attr("src", "");
    $("#thestory video").attr("src",urls);
});

$("#thestory").on('hidden.bs.modal', function (e) {
    $("#thestory video").attr("src", $("#thestory video").attr("src"));
});

*/

var modals = ["#thestory", //name modal target
              "#theprophecy",
              "#theannouncement",
              "#theincarnation",
              "#promo_kka",
              "#promo_kingstone",
              "#kingstone_intro",
              "#kingstone_digital",
             ];

modals.forEach(myFunction);

function myFunction(item) {
   //berjalan ketika modal close agar video di reload dan tidak play ketika close
   $(item).on('hidden.bs.modal', function (e) {
    $(item + " video").attr("src", $(item + " video").attr("src"));
   });

   //berjalan ketika modal open, agar play automatis
   $(item).on("shown.bs.modal", function (e) {
    $(item + " video")[0].play();
   })
}


