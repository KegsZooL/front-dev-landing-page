document.querySelectorAll('.spoiler-toggle-button').forEach(
  button => {
    button.addEventListener('click', () => {
      const spoiler = button.closest('.spoiler');
      const spoilerContent = spoiler.querySelector('.spoiler-content');
      const isOpen = spoilerContent.style.display === 'flex';
      
      spoilerContent.style.display = isOpen ? 'none' : 'flex';
      button.textContent = isOpen ? '+' : '—';
    })
  }
)
