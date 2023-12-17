// ACCORDION

document.querySelectorAll('.accordion-title').forEach(title => {
    title.addEventListener('click', () => {
      const item = title.parentNode;
      const isActive = item.classList.contains('active');
      
      document.querySelectorAll('.accordion-item').forEach(acc => {
        acc.classList.remove('active');
        acc.querySelector('.accordion-content').style.maxHeight = '0';
        acc.querySelector('.accordion-content').removeAttribute('data-active-classes'); // Remover o atributo data-active-classes
      });
  
      if (!isActive) {
        item.classList.add('active');
        const content = item.querySelector('.accordion-content');
        content.style.maxHeight = content.scrollHeight + 'px';
        content.setAttribute('data-active-classes', ''); // Adicionar o atributo data-active-classes
      }
    });
});