TweenLite.defaultEase = Linear.easeNone;

var controller = new ScrollMagic.Controller();

var tl = new TimelineMax();

tl.from("section.panel--introduction", 10, {
    xPercent: 100
});



new ScrollMagic.Scene({
        triggerElement: "#pinMasterIntroSlide",
        triggerHook: "onLeave",
        duration: "200%"
    })
    .setPin("#pinMasterIntroSlide")
    .setTween(tl)
    // .addIndicators({
    //     name: 'goesleft',
    //     colorTrigger: "blue",
    //     colorStart: "blue",
    //     colorEnd: "pink",
    //     indent: 800,
    // }) //ceci est le trigger en haut
    .addTo(controller);




//////////////////////////////////////////




TweenLite.defaultEase = Linear.easeNone;

var controller = new ScrollMagic.Controller();

var tl = new TimelineMax();

tl.from("section.panel--show.two", 1, {
    xPercent: -100
});
tl.from("section.panel--show.three", 1, {
    yPercent: 100
});
tl.from("section.panel--show.for", 1, {
    xPercent: 100
});
tl.from("section.panel--show.five", 1, {
    yPercent: 100
});
tl.from("section.panel--show.sixe", 1, {
    xPercent: -100
});
tl.from("section.panel--show.seven", 1, {
    yPercent: 100
});
tl.from("section.panel--show.eight", 1, {
    yPercent: -100
});




new ScrollMagic.Scene({
        triggerElement: "#pinMasterShow",
        triggerHook: "onLeave",
        duration: "400%"
    })
    .setPin("#pinMasterShow")
    .setTween(tl)
    // .addIndicators({
    //     name: 'sliders',
    //     colorTrigger: "green",
    //     colorStart: "green",
    //     colorEnd: "pink",
    //     indent: 400,
    // }) //ceci est le trigger en haut
    .addTo(controller);













