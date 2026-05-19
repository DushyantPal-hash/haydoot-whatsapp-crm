// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  initNavbar();
  initMobileMenu();
  initMobileDropdowns();
  initSmoothScroll();
  initFaq();
});

function initNavbar() {
  const stickyWrapper = document.getElementById("stickyNavWrapper");
  if (stickyWrapper) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 15) {
        stickyWrapper.classList.add("scrolled");
      } else {
        stickyWrapper.classList.remove("scrolled");
      }
    });
  }
}

function initMobileMenu() {
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const mobileMenu = document.getElementById("mobileMenu");
  const menuOverlay = document.getElementById("menuOverlay");
  const menuClose = document.getElementById("menuClose");

  function openMenu() {
    if (mobileMenu) mobileMenu.classList.add("open");
    if (hamburgerBtn) hamburgerBtn.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    if (mobileMenu) mobileMenu.classList.remove("open");
    if (hamburgerBtn) hamburgerBtn.classList.remove("active");
    document.body.style.overflow = "";

    // Close all dropdowns when closing menu
    closeAllMobileDropdowns();
  }

  if (hamburgerBtn) {
    hamburgerBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      if (mobileMenu && mobileMenu.classList.contains("open")) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  if (menuClose) menuClose.addEventListener("click", closeMenu);
  if (menuOverlay) menuOverlay.addEventListener("click", closeMenu);

  // Close menu on mobile nav link click (only for regular links, not dropdown triggers)
  document
    .querySelectorAll(".mobile-nav-link:not(.mobile-dropdown-trigger)")
    .forEach(function (link) {
      link.addEventListener("click", function () {
        closeMenu();
      });
    });
}

// Mobile dropdown functionality
function initMobileDropdowns() {
  const dropdownTriggers = document.querySelectorAll(
    ".mobile-dropdown-trigger",
  );

  dropdownTriggers.forEach((trigger) => {
    // Remove any existing event listeners to avoid duplicates
    trigger.removeEventListener("click", trigger._dropdownHandler);

    // Create and store the handler function
    const handler = function (e) {
      e.preventDefault();
      e.stopPropagation();

      const dropdownId = this.getAttribute("data-dropdown");
      const dropdownMenu = document.getElementById(dropdownId);

      if (dropdownMenu) {
        // Check if this dropdown is already active
        const isActive = dropdownMenu.classList.contains("active");

        // If this dropdown is active, just close it
        if (isActive) {
          dropdownMenu.classList.remove("active");
          dropdownMenu.style.maxHeight = null;
          this.classList.remove("active");
          return;
        }

        // Close all other dropdowns first
        closeAllMobileDropdowns();

        // Open this dropdown
        dropdownMenu.classList.add("active");
        this.classList.add("active");

        // Get the actual height of the dropdown menu for smooth animation
        const actualHeight = dropdownMenu.scrollHeight;
        dropdownMenu.style.maxHeight = actualHeight + "px";
      }
    };

    trigger._dropdownHandler = handler;
    trigger.addEventListener("click", handler);
  });

  // Close dropdown when clicking outside (within mobile menu panel)
  const mobilePanel = document.querySelector(".mobile-menu-panel");
  if (mobilePanel) {
    mobilePanel.addEventListener("click", function (e) {
      // If click is not on a dropdown trigger or inside dropdown menu, close all
      if (
        !e.target.closest(".mobile-dropdown-trigger") &&
        !e.target.closest(".mobile-dropdown-menu")
      ) {
        closeAllMobileDropdowns();
      }
    });
  }

  // Also handle clicks on the overlay/close to ensure dropdowns close properly
  const menuOverlay = document.getElementById("menuOverlay");
  const menuClose = document.getElementById("menuClose");

  if (menuOverlay) {
    menuOverlay.addEventListener("click", function () {
      closeAllMobileDropdowns();
    });
  }

  if (menuClose) {
    menuClose.addEventListener("click", function () {
      closeAllMobileDropdowns();
    });
  }
}

// Helper function to close all mobile dropdowns
function closeAllMobileDropdowns() {
  const allDropdownMenus = document.querySelectorAll(".mobile-dropdown-menu");
  const allDropdownTriggers = document.querySelectorAll(
    ".mobile-dropdown-trigger",
  );

  allDropdownMenus.forEach((menu) => {
    menu.classList.remove("active");
    menu.style.maxHeight = null; // Reset max-height
  });

  allDropdownTriggers.forEach((trigger) => {
    trigger.classList.remove("active");
  });
}

function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    // Skip dropdown triggers
    if (link.classList.contains("mobile-dropdown-trigger")) return;

    link.addEventListener("click", function (e) {
      var targetId = this.getAttribute("href");
      if (!targetId || targetId === "#") return;
      var target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        var stickyWrapper = document.getElementById("stickyNavWrapper");
        var offset = (stickyWrapper && stickyWrapper.offsetHeight) || 70;
        var top =
          target.getBoundingClientRect().top + window.scrollY - offset - 12;
        window.scrollTo({ top: top, behavior: "smooth" });

        // Close mobile menu if open after clicking
        const mobileMenu = document.getElementById("mobileMenu");
        if (mobileMenu && mobileMenu.classList.contains("open")) {
          const hamburgerBtn = document.getElementById("hamburgerBtn");
          if (hamburgerBtn) hamburgerBtn.classList.remove("active");
          mobileMenu.classList.remove("open");
          document.body.style.overflow = "";
          closeAllMobileDropdowns();
        }
      }
    });
  });
}

function initFaq() {
  document.querySelectorAll(".faq-item").forEach(function (faq) {
    faq.removeEventListener("click", faq._clickHandler);
    var handler = function (e) {
      faq.classList.toggle("active");
    };
    faq._clickHandler = handler;
    faq.addEventListener("click", handler);
  });
}
