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
  document
    .querySelectorAll(".mobile-nav-link:not(.mobile-dropdown-trigger)")
    .forEach(function (link) {
      link.addEventListener("click", function () {
        closeMenu();
      });
    });
}
function initMobileDropdowns() {
  const dropdownTriggers = document.querySelectorAll(
    ".mobile-dropdown-trigger",
  );
  dropdownTriggers.forEach((trigger) => {
    trigger.removeEventListener("click", trigger._dropdownHandler);
    const handler = function (e) {
      e.preventDefault();
      e.stopPropagation();
      const dropdownId = this.getAttribute("data-dropdown");
      const dropdownMenu = document.getElementById(dropdownId);
      if (dropdownMenu) {
        const isActive = dropdownMenu.classList.contains("active");
        if (isActive) {
          dropdownMenu.classList.remove("active");
          dropdownMenu.style.maxHeight = null;
          this.classList.remove("active");
          return;
        }
        closeAllMobileDropdowns();
        dropdownMenu.classList.add("active");
        this.classList.add("active");
        const actualHeight = dropdownMenu.scrollHeight;
        dropdownMenu.style.maxHeight = actualHeight + "px";
      }
    };
    trigger._dropdownHandler = handler;
    trigger.addEventListener("click", handler);
  });
  const mobilePanel = document.querySelector(".mobile-menu-panel");
  if (mobilePanel) {
    mobilePanel.addEventListener("click", function (e) {
      if (
        !e.target.closest(".mobile-dropdown-trigger") &&
        !e.target.closest(".mobile-dropdown-menu")
      ) {
        closeAllMobileDropdowns();
      }
    });
  }
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
function closeAllMobileDropdowns() {
  const allDropdownMenus = document.querySelectorAll(".mobile-dropdown-menu");
  const allDropdownTriggers = document.querySelectorAll(
    ".mobile-dropdown-trigger",
  );
  allDropdownMenus.forEach((menu) => {
    menu.classList.remove("active");
    menu.style.maxHeight = null;
  });
  allDropdownTriggers.forEach((trigger) => {
    trigger.classList.remove("active");
  });
}
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
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
    if (faq._clickHandler) {
      faq.removeEventListener("click", faq._clickHandler);
    }
    const answer = faq.querySelector(".faq-answer");
    if (!faq.classList.contains("active")) {
      answer.style.maxHeight = "0";
      answer.style.opacity = "0";
    } else {
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.style.opacity = "1";
    }
    var handler = function (e) {
      if (e.target.closest("a, button, input")) return;
      const isActive = faq.classList.contains("active");
      if (isActive) {
        faq.classList.remove("active");
        answer.style.maxHeight = "0";
        answer.style.opacity = "0";
        answer.style.padding = "0 0px";
        answer.style.borderTopWidth = "0";
      } else {
        faq.classList.add("active");
        answer.style.display = "block";
        answer.style.maxHeight = answer.scrollHeight + "px";
        answer.style.opacity = "1";
        answer.style.padding = "10px 0px 20px";
        answer.style.borderTopWidth = "1px";
        document.querySelectorAll(".faq-item").forEach(function (otherFaq) {
          if (otherFaq !== faq && otherFaq.classList.contains("active")) {
            otherFaq.classList.remove("active");
            const otherAnswer = otherFaq.querySelector(".faq-answer");
            otherAnswer.style.maxHeight = "0";
            otherAnswer.style.opacity = "0";
            otherAnswer.style.padding = "0 0px";
            otherAnswer.style.borderTopWidth = "0";
          }
        });
      }
    };
    faq._clickHandler = handler;
    faq.addEventListener("click", handler);
  });
}
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initFaq);
} else {
  initFaq();
}
