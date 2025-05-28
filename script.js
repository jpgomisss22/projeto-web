function showSection(id) {
    document.querySelectorAll('.section').forEach(sec => sec.classList.add('hidden'));
    document.getElementById(id).classList.remove('hidden');
  }

  function scrollLeft(id) {
    const el = document.getElementById(id);
    el.scrollLeft -= 200;
  }

  function scrollRight(id) {
    const el = document.getElementById(id);
    el.scrollLeft += 200;
  }