function SeeMoreComment(id, idComment) {
  var AddComment = document.getElementById(idComment);
  var SeeMoreComment = document.getElementById(id);
  SeeMoreComment.classList.toggle("active");
  AddComment.classList.toggle("active");
}

var IdHeaders = [
  {
    idpop: "PopupMenu",
    idbutton: "button-noti",
    idimg: "notification-active",
  },
  {
    idpop: "PopupAcces",
    idbutton: "button-access",
    idimg: "notification-lock",
  },
];

IdHeaders.forEach(function (IdHeader) {
  var buttonPop = document.getElementById(IdHeader.idbutton);

  if (buttonPop) {
    buttonPop.addEventListener("click", (event) => {
      var Notif = document.getElementById(IdHeader.idpop);
      Notif.classList.toggle("active");

      var icone = document.getElementById(IdHeader.idimg);
      icone.classList.toggle("none");
    });
  }
});
