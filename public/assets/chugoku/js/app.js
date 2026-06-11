(function(){
  const toggle = document.querySelector('.mobile-toggle');
  const nav = document.querySelector('.nav');
  const menu = document.querySelector('.nav-menu');

  function closeMenu(){
    if(!nav || !toggle) return;
    nav.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('menu-open');
  }

  if(toggle && nav){
    toggle.addEventListener('click',()=>{
      const open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.classList.toggle('menu-open', open);
    });
  }

  if(menu){
    menu.querySelectorAll('a[href^="#"]').forEach(link => link.addEventListener('click', closeMenu));
  }

  window.addEventListener('resize', () => {
    if(window.innerWidth > 992) closeMenu();
  });

  const io = new IntersectionObserver(entries=>{
    entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('show'); });
  }, {threshold:.12});
  document.querySelectorAll('.fade-up').forEach(el=>io.observe(el));

  const forms = document.querySelectorAll('form[data-demo-form]');
  forms.forEach(form=>form.addEventListener('submit', e=>{
    e.preventDefault();
    alert('Thank you. Your inquiry has been received.');
    form.reset();
  }));
})();
