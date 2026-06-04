document.addEventListener("DOMContentLoaded", function () {
// Run the function
hoverText();
stickyScroll();
boxstragger();
rightboxslideup();
animateEnlargeInView();
// initSplitTextAnimation('h1, h2, h3, h4:not(.box h4), p:not(.box p)');
});


// Sticky Header Scroll
function stickyScroll() {
  const header = document.querySelector("header");
  if (!header) {
    console.warn("Header element not found. Sticky scroll disabled.");
    return;
  }

  let lastScrollTop = 50; // Initial value to avoid hiding header on first scroll
  let isHeaderFixed = false;

  window.addEventListener("scroll", () => {
    let currentScroll = window.scrollY || document.documentElement.scrollTop;
    let viewportHeight = window.innerHeight;
    let scrollThreshold = viewportHeight * 0.5; // 50% of viewport height for hiding

    // Hide header when scrolling down past threshold
    if (currentScroll > lastScrollTop) {
      if (
        currentScroll > scrollThreshold &&
        !header.classList.contains("header--hidden")
      ) {
        header.classList.add("header--hidden");
      }
    } else {
      if (header.classList.contains("header--hidden")) {
        header.classList.remove("header--hidden");
      }
    }

    // Add header--fixed class earlier (e.g., after scrolling 10 pixels)
    const fixedThreshold = 10; // Adjust this value to control when header--fixed is applied
    if (currentScroll > fixedThreshold && !isHeaderFixed) {
      header.classList.add("header--fixed");
      isHeaderFixed = true;
    } else if (currentScroll <= fixedThreshold && isHeaderFixed) {
      header.classList.remove("header--fixed");
      isHeaderFixed = false;
    }

    // Ensure header is not hidden when near the top
    if (currentScroll < 50) {
      header.classList.remove("header--hidden");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
}

function hoverText() {
  // Exit early if GSAP is not loaded
  if (typeof gsap === "undefined") {
    console.warn("GSAP library is not loaded. Hover text animations will not work.");
    return;
  }
 
  // Select all staggered items
  const items = document.querySelectorAll(".btn");
  // Exit early if no items are found
  if (!items.length) {
    console.warn("No staggered items (.btn) found on the page.");
    return;
  }
 
  items.forEach((item) => {
    // Find the main span
    const mainSpan = item.querySelector("span");
 
    // Skip item if main span is not found
    if (!mainSpan) {
      console.warn("Main span not found in staggered item:", item);
      return;
    }
 
    // Create default and hover layers
    const defaultLayer = document.createElement("div");
    defaultLayer.classList.add("default-text");
 
    const hoverLayer = document.createElement("div");
    hoverLayer.classList.add("hover-text");
 
    // Process child nodes of mainSpan
    const nodes = Array.from(mainSpan.childNodes);
    mainSpan.innerHTML = ""; // Clear the main span
 
    nodes.forEach((node) => {
      if (node.nodeType === Node.TEXT_NODE) {
        // Handle text nodes by splitting into characters
        const text = node.textContent || "";
        text.split("").forEach((char) => {
          const defaultChar = document.createElement("span");
          defaultChar.classList.add("letter");
          defaultChar.textContent = char === " " ? "\u00A0" : char;
          defaultLayer.appendChild(defaultChar);
 
          const hoverChar = document.createElement("span");
          hoverChar.classList.add("letter");
          hoverChar.textContent = char === " " ? "\u00A0" : char;
          hoverLayer.appendChild(hoverChar);
        });
      } else if (node.nodeType === Node.ELEMENT_NODE) {
        // Handle elements (e.g., <span>) by cloning them
        const defaultElement = node.cloneNode(true);
        defaultElement.classList.add("letter");
        defaultLayer.appendChild(defaultElement);
 
        const hoverElement = node.cloneNode(true);
        hoverElement.classList.add("letter");
        hoverLayer.appendChild(hoverElement);
      }
    });
 
    // Append layers to main span
    mainSpan.appendChild(defaultLayer);
    mainSpan.appendChild(hoverLayer);
 
    // Select letters (including both characters and elements)
    const defaultLetters = defaultLayer.querySelectorAll(".letter");
    const hoverLetters = hoverLayer.querySelectorAll(".letter");
 
    // Verify letters exist
    if (!defaultLetters.length || !hoverLetters.length) {
      console.warn("No letters found in default or hover layers for item:", item);
      return;
    }
 
    // Create GSAP timeline
    const tl = gsap.timeline({ paused: true });
 
    defaultLetters.forEach((letter, i) => {
      // Ensure hoverLetters[i] exists
      if (hoverLetters[i]) {
        tl.to(letter, { y: "-100%", duration: 0.50, ease: "expo.inOut" }, i * 0.00)
          .to(hoverLetters[i], { y: "0%", duration: 0.50, ease: "expo.inOut" }, i * 0.00);
      }
    });
 
    // Add event listeners
    item.addEventListener("mouseenter", () => tl.play());
    item.addEventListener("mouseleave", () => tl.reverse());
  });
}

// Splitex animation
function initSplitTextAnimation(selector) {
gsap.registerPlugin(ScrollTrigger);
  document.querySelectorAll('h1, h2, h3:not(.growthStories__slider h3), h4:not(.box h4, .siteVelocity__sliderdiv h4), p:not(.box p, .growthStories__slider p)')
    .forEach(heading => {
    if (heading.closest('.entry-content')) return;
    const split = new SplitType(heading, { types: 'words, chars' });
    gsap.from(split.chars, {
        opacity: 0,
        duration: 0.4,
        ease: "power1.out",
        stagger: { amount: 0.6 },

        scrollTrigger: {
            trigger: heading,
            start: 'top 100%',
            toggleActions: 'play none none reverse',
            markers: false
        }
    });

});
ScrollTrigger.refresh();
}

// boxstragger animation
function boxstragger() {
  gsap.registerPlugin(ScrollTrigger);
  document.querySelectorAll(".box-strager").forEach(section => {
  gsap.from(section.querySelectorAll(".box"), {
    opacity: 0,
    y: 80,
    duration: 1,
    stagger: 0.07,              // ✅ One by one effect
    ease: "power1.out",
    scrollTrigger: {
      trigger: section,      // ✅ Parent container
      start: "top 50%",
      end: "bottom bottom",
      toggleActions: "play none none reverse",
      markers: false             // remove later
    }
  });
  });
ScrollTrigger.refresh();
}


function rightboxslideup() {
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.matchMedia({
        // ✅ Only run on screens >= 768px
        "(min-width: 768px)": function () {
            document.querySelectorAll('.right-box').forEach(box => {
                gsap.to(box, {
                    maxWidth: "520px",
                    duration: 0.1,
                    scrollTrigger: {
                        trigger: box,
                        start: "top 60%",
                        end: "bottom bottom",
                        scrub: true,
                        markers: false
                    }
                });
            });
        }
        // Mobile → NO animation automatically 👍
    });
}


// Enlarge on View
function animateEnlargeInView() {
  if (window.innerWidth <= 991) return;
  const elements = document.querySelectorAll(".enlarge__inView");
  if (!elements.length || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }
  elements.forEach((el) => {
    gsap.fromTo(
      el,
      { scale: 0.7 },
      {
        scale: 1,
        duration: 0.46,
        ease: "power2.out",
        scrollTrigger: {
          trigger: el,
          start: "top 80%",
          end: "bottom 30%",
          toggleActions: "play none none reverse",
          scrub: false,
        },
      }
    );
  });
}