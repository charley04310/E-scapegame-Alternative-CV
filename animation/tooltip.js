/*var Bouttontooltip = document.getElementsByClassName("bloc-tooltip-nav");
var tooltip = document.getElementsByClassName("tooltiptext-like");



for (var i = 0; i < Bouttontooltip.length; i++) {

      var popperInstance = Popper.createPopper(Bouttontooltip[i], tooltip[i], {
      placement: "top",
      modifiers: [
        {
          name: "offset",
          options: {
            offset: [0, 10],
          },
        },
      ],
    });
  
    function show() {
      // Make the tooltip visible
      tooltip[i].setAttribute("data-show", "");
  
      // Enable the event listeners
      popperInstance.setOptions((options) => ({
        ...options,
        modifiers: [
          ...options.modifiers,
          { name: "eventListeners", enabled: true },
        ],
      }));
  
      // Update its position
      popperInstance.update();
    }
  
    function hide() {
      // Hide the tooltip
      setTimeout(function () {
        tooltip.removeAttribute("data-show");
      }, 500);
  
      // Disable the event listeners
      popperInstance.setOptions((options) => ({
        ...options,
        modifiers: [
          ...options.modifiers,
          { name: "eventListeners", enabled: false },
        ],
      }));
    }
  
    const showEvents = ["mouseenter", "focus"];
    const hideEvents = ["mouseleave", "blur"];
  
    showEvents.forEach((event) => {
      Bouttontooltip[i].addEventListener(event, show);
    });
  
    hideEvents.forEach((event) => {
      Bouttontooltip[i].addEventListener(event, hide);
    });
    
  };*/

let buttons = [
  {
    blocid: "#tooltip-like",
    textid: "#tooltiptext-like",
  },
  {
    blocid: "#tooltip-like-social",
    textid: "#tooltiptext-like-social",
  },
  {
    blocid: "#tooltip-like-2A",
    textid: "#tooltiptext-like-2A",
  },
  {
    blocid: "#tooltip-like-cbd",
    textid: "#tooltiptext-like-cbd",
  },
  {
    blocid: "#tooltip-like-aquastym",
    textid: "#tooltiptext-like-aquastym",
  },
  {
    blocid: "#tooltip-like-pts",
    textid: "#tooltiptext-like-pts",
  },
  {
    blocid: "#tooltip-like-cesiw",
    textid: "#tooltiptext-like-cesiw",
  },
];

buttons.forEach(function (button) {
  var Bouttontooltip = document.querySelector(button.blocid);
  var tooltip = document.querySelector(button.textid);

  var popperInstance = Popper.createPopper(Bouttontooltip, tooltip, {
    placement: "top",
    modifiers: [
      {
        name: "offset",
        options: {
          offset: [0, 10],
        },
      },
    ],
  });

  function show() {
    // Make the tooltip visible
    tooltip.setAttribute("data-show", "");

    // Enable the event listeners
    popperInstance.setOptions((options) => ({
      ...options,
      modifiers: [
        ...options.modifiers,
        { name: "eventListeners", enabled: true },
      ],
    }));

    // Update its position
    popperInstance.update();
  }

  function hide() {
    // Hide the tooltip
    setTimeout(function () {
      tooltip.removeAttribute("data-show");
    }, 500);

    // Disable the event listeners
    popperInstance.setOptions((options) => ({
      ...options,
      modifiers: [
        ...options.modifiers,
        { name: "eventListeners", enabled: false },
      ],
    }));
  }

  const showEvents = ["mouseenter", "focus"];
  const hideEvents = ["mouseleave", "blur"];

  showEvents.forEach((event) => {
    Bouttontooltip.addEventListener(event, show);
  });

  hideEvents.forEach((event) => {
    Bouttontooltip.addEventListener(event, hide);
  });
});
