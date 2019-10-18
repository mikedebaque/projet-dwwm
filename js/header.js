$("#popoverfav").popover({
    html: true,
    sanitize: false,
    content: function () {
        return $('#favpopover-content').html();
    }
});
$("#popoverprofil").popover({
    html: true,
    sanitize: false,
    content: function () {
        return $('#profilpopover-content').html();
    }
});
/* Ferme popover si un est déjà ouvert */
$('.btn').on('click', function (e) {
    $('.btn').not(this).popover('hide');
});

function openNav() {
    document.getElementById("mySidebar").style.width = "80%";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }