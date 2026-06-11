(function(){
  const body = document.body;
  const langButtons = document.querySelectorAll('[data-set-lang]');
  langButtons.forEach(btn=>btn.addEventListener('click',()=>{
    const lang = btn.getAttribute('data-set-lang');
    body.setAttribute('data-lang', lang);
    langButtons.forEach(b=>b.classList.toggle('active', b.getAttribute('data-set-lang')===lang));
    localStorage.setItem('chugoku_lang', lang);
  }));
  const saved = localStorage.getItem('chugoku_lang') || 'en';
  body.setAttribute('data-lang', saved);
  langButtons.forEach(b=>b.classList.toggle('active', b.getAttribute('data-set-lang')===saved));

  const toggle = document.querySelector('.mobile-toggle');
  const nav = document.querySelector('.nav');
  if(toggle && nav){ toggle.addEventListener('click',()=>nav.classList.toggle('open')); }

  const io = new IntersectionObserver(entries=>{
    entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('show'); });
  }, {threshold:.12});
  document.querySelectorAll('.fade-up').forEach(el=>io.observe(el));

  const forms = document.querySelectorAll('form[data-demo-form]');
  forms.forEach(form=>form.addEventListener('submit', e=>{
    e.preventDefault();
    alert('Demo inquiry submitted. In CI4 version, this will be stored in CMS database and visible in Inquiry Inbox.');
    form.reset();
  }));
})();
