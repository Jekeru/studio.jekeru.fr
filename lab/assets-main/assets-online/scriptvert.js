// Fonction de défilement horizontal
// el est l'élément HTML qui contiendra le contenu défilant
// src est un tableau comprenant le chemin des images à faire défiler
// pas est le pas d'incrémentation du défilement (défaut 1px)
// tps est le temps entre deux incrémentations  (défaut 50ms)

function defilImgVrtRight(el,srcs,pas,tps) {
  if(typeof el=="string") { el = document.getElementById(el); }
  var tps = tps || 13;
  var pas = pas || 1;
  var imgs = [];
  var offset = 0;
  for(var i=0,l=srcs.length;i<l;i++) {
    var img = new Image();
    img.src = srcs[i];
    imgs.push(img);
    img.style.width=el.offsetWidth+"px";
    img.style.position = "absolute";
    img.style.top = offset+"px";
    el.appendChild(img);
    offset += img.offsetHeight;
  }
  var first = 0;
  var last = imgs.length-1;

  (function d() {
    for(var i=0,l=imgs.length;i<l;i++) {
      var top = parseInt(imgs[i].style.top,10);
      imgs[i].style.top = (top-pas)+"px";
      if(i==first && (top-pas+imgs[i].offsetHeight)<0) {
        imgs[i].style.top = (parseInt(imgs[last].style.top,10)+imgs[last].offsetHeight-(i==0?pas:0))+"px";
        last = first++;
        if(first>imgs.length-1) { first = 0; }
      }
    }
    setTimeout(d,tps);
  })();
}

// Fonction de défilement verticale
function defilImgVrt(el,srcs,pas,tps) {
  if(typeof el=="string") { el = document.getElementById(el); }
  var tps = tps || 10;
  var pas = pas || 1;
  var imgs = [];
  var offset = 0;
  for(var i=0,l=srcs.length;i<l;i++) {
    var img = new Image();
    img.src = srcs[i];
    imgs.push(img);
    img.style.width=el.offsetWidth+"px";
    img.style.position = "absolute";
    img.style.top = offset+"px";
    el.appendChild(img);
    offset += img.offsetHeight;
  }
  var first = 0;
  var last = imgs.length-1;

  (function d() {
    for(var i=0,l=imgs.length;i<l;i++) {
      var top = parseInt(imgs[i].style.top,10);
      imgs[i].style.top = (top-pas)+"px";
      if(i==first && (top-pas+imgs[i].offsetHeight)<0) {
        imgs[i].style.top = (parseInt(imgs[last].style.top,10)+imgs[last].offsetHeight-(i==0?pas:0))+"px";
        last = first++;
        if(first>imgs.length-1) { first = 0; }
      }
    }
    setTimeout(d,tps);
  })();
}
// Appel des deux fonctions de défilement au chargement de ma page .
window.onload=function() {
  defilImgVrt('bandeau_vertical',[
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-11-Noface-test-emile-4-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/low2019-08-faux-sang-essais-1_-10.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-03-TorvinPhilouCarlito-13.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/low2019-04-Falaise-du-cul-_-13-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/low2019-03-Carthos-gang-7-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2017-09-ANAS-18-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-12-Concert-Johnny-Jane-PopUpLabel-6-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-11-Noface-test-emile-4-scaled.jpg"
  ]);
  defilImgVrtRight('bandeau_vertical_right',[
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-01-Lean-Chihiro-shoot-manifesto_-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/low2019-12-Torvin-Gitan-22.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-12-Shoot-TOMJKStHilaire.jpg-19-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/low2018-11-No-Face-Beauce-38-scaled.jpg",
    "https://clovis.raremirare.com/assets_clovis/uploads/2020/12/2019-01-Lean-Chihiro-shoot-manifesto_-scaled.jpg"
  ]);
};