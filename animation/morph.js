// IE cannot apply CSS transforms on SVG elements. (See https://connect.microsoft.com/IE/feedback/details/811744/ie11-bug-with-implementation-of-css-transforms-in-svg)

var path = anime.path(".circle-cica");

anime({
  targets: ".cica-1",
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: "easeInOutSine",
  duration: 4000,
  opacity: [.5, 1],
  scale:[.92, 1],
  direction: "alternate",
  loop: false,
});

setTimeout(function () {
  anime.timeline({
      loop: false,
    })
    .add({
      targets: ".glitch",
      duration: 100,
      skewX: 70,
      easing: "easeInOutQuad",
    })
    .add({
      targets: ".glitch",
      duration: 30,
      skewX: 0,
      easing: "easeInOutQuad",
    })
    .add({
      targets: ".glitch",
      duration: 30,
      opacity: 0,
      easing: "linear",
    })
    .add({
      targets: ".glitch",
      duration: 30,
      opacity: 1,
      easing: "linear",
    })
    .add({
      targets: ".glitch",
      duration: 30,
      translateX: -60,
      easing: "linear",
    })
    .add({
      targets: ".glitch",
      duration: 30,
      translateX: 60,
      easing: "linear",
    })
    .add({
      targets: ".top",
      duration: 80,
      translateX: -14,
      easing: "easeInOutQuad",
    })
    .add(
      {
        targets: ".bottom",
        duration: 80,
        translateX: 14,
        easing: "easeInOutQuad",
      },
      "-=80"
    )
    .add(
      {
        targets: ".text",
        duration: 1,
        scale: 1.05,
        easing: "linear",
      },
      "-=80"
    )
    .add(
      {
        targets: ".text",
        duration: 1,
        scale: 1,
        easing: "linear",
      },
      "+=20"
    )
    .add({
      targets: ".top",
      duration: 80,
      translateX: 0,
      easing: "easeInOutQuad",
    })
    .add(
      {
        targets: ".bottom",
        duration: 80,
        translateX: 0,
        easing: "easeInOutQuad",
      },
      "-=80"
    )
    .add(
      {
        targets: ".glitch",
        duration: 40,
        scaleY: 1.2,
        easing: "easeInOutQuad",
      },
      "+=800"
    )
    .add({
      targets: ".glitch",
      duration: 20,
      scaleY: 1,
      easing: "easeInOutQuad",
    })
    .add({
      duration: 2000,
    });
}, 3800);
