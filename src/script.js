document.querySelectorAll('.spoiler-toggle-button').forEach(button => {
  button.addEventListener('click', () => {
    const spoiler = button.closest('.spoiler');
    const spoilerContent = spoiler.querySelector('.spoiler-content');
    
    spoilerContent.classList.toggle('show');
    
    const isOpen = spoilerContent.classList.contains('show');
    button.textContent = isOpen ? '—' : '+';
  });
});

// function scrollToSection() {
//   const element = document.getElementById("target-audience");
//   const offset = 500;

//   window.scrollTo({
//       top: element.getBoundingClientRect().top + window.scrollY + offset,
//       behavior: "smooth"
//   });
// }

document.querySelectorAll('.smooth-goto').forEach(href => {
  const offset = 50;
    window.scrollTo({
      top: href.getBoundingClientRect().top + window.scrollY + offset,
      behavior: "smooth"
  });
}
)

