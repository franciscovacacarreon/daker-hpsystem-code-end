const navItems = document.querySelectorAll(".nav-item-header");
const path = window.location.pathname;
const segments = path.split("/");
const lastSegment = segments.pop() || segments.pop();

function activeItem() {
  navItems.forEach((element) => {
    const dataHeader = element.getAttribute("data-header");
    element.classList.remove("active");
    if (
      dataHeader == lastSegment ||
      (lastSegment == "public" && dataHeader == "index")
    ) {
      element.classList.add("active");
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  activeItem();
});
