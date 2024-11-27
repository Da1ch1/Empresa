document.addEventListener('DOMContentLoaded', () => {
  const filterItems = document.querySelectorAll('.filter-item');
  const topicCards = document.querySelectorAll('.topic-card');

  filterItems.forEach(item => {
    item.addEventListener('click', () => {
      const category = item.getAttribute('data-category');

      // Elimina la clase activa de todos los elementos
      filterItems.forEach(filter => filter.classList.remove('active'));

      // Añade la clase activa al elemento clicado
      item.classList.add('active');

      // Muestra/oculta tarjetas basadas en la categoría
      topicCards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
          card.classList.remove('hidden');
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });
});
