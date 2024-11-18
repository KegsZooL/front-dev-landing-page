document.querySelectorAll('.spoiler-toggle-button').forEach(button => {
  button.addEventListener('click', () => {
    const spoiler = button.closest('.spoiler');
    const spoilerContent = spoiler.querySelector('.spoiler-content');
    
    spoilerContent.classList.toggle('show');
    
    const isOpen = spoilerContent.classList.contains('show');
    button.textContent = isOpen ? '—' : '+';
  });
});

function scrollToSection(event) {
  event.preventDefault();

  const targetId = event.target.getAttribute("href").substring(1);
  const element = document.getElementById(targetId);
  
  const offset = -100;

  window.scrollTo({
    top: element.getBoundingClientRect().top + window.scrollY + offset,
    behavior: "smooth"
  });
}       

const smoothLinks = document.querySelectorAll('.smooth-goto');
smoothLinks.forEach(link => {
  link.addEventListener('click', scrollToSection);
});

function toggleMenu() {
  const menu = document.querySelector('.hamburger-menu');
  const buttonMenu = document.querySelector('.button-menu');
  menu.classList.toggle('show');
  buttonMenu.classList.toggle('open');
}