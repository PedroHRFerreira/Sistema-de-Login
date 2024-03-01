document.addEventListener("DOMContentLoaded", function () {
  const contentTimeline = document.querySelector(".content-timeline");
  const contentModal = document.querySelector(".content_modal");

  contentModal.addEventListener("mouseenter", function () {
    contentTimeline.classList.add("timeline-hover");
  });

  contentModal.addEventListener("mouseleave", function () {
    contentTimeline.classList.remove("timeline-hover");
  });
});
