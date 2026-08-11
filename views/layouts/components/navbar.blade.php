<style>
  /* Inner-page navbar — matches the homepage navbar: fixed translucent dark bar,
     logo 36/40px, links 14px / weight 500 / stone-300 -> white. On desktop the two
     links and the CTA sit inline; on mobile (<=640px) they collapse into a hamburger
     dropdown, exactly like the homepage. */
  .imp-nav a { text-decoration: none !important; }
  .imp-nav {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 50;
    background: rgba(12, 10, 9, 0.6);
    -webkit-backdrop-filter: blur(64px); backdrop-filter: blur(64px);
  }
  .imp-nav__inner {
    display: flex; align-items: center; gap: 40px;
    max-width: 1280px; margin: 0 auto; padding: 16px 32px;
  }
  .imp-nav__logo { display: flex; align-items: center; margin-top: 4px; }
  .imp-nav__logo img { height: 40px; width: auto; display: block; cursor: pointer; }
  .imp-nav__links {
    display: flex; align-items: center; gap: 24px;
    list-style: none; margin: 0; padding: 0;
  }
  .imp-nav__links li { margin: 0; padding: 0; }
  .imp-nav__links a {
    color: #d6d3d1; font-size: 14px; font-weight: 500; line-height: 1;
    font-family: 'Satoshi', sans-serif; transition: color .2s ease; white-space: nowrap;
  }
  .imp-nav__links a:hover { color: #fff; }
  /* Primary CTA — replicates the homepage "Talk to an Expert" button. */
  .imp-nav__cta {
    margin-left: auto;
    display: inline-flex; align-items: center; justify-content: center;
    background: linear-gradient(180deg, #ff8555, #ff5215);
    border: 1px solid rgba(251, 146, 60, 0.5);
    box-shadow: inset 0 1px 1px rgba(255,255,255,0.6), 0 8px 18px -6px rgba(255,107,53,0.6);
    color: #fff !important; font-weight: 700; font-size: 14px; line-height: 20px;
    font-family: 'Satoshi', sans-serif; white-space: nowrap;
    padding: 8px 16px; border-radius: 4px;
    transition: filter .3s ease, box-shadow .3s ease;
  }
  .imp-nav__cta:hover {
    filter: brightness(1.1);
    box-shadow: inset 0 1px 2px rgba(255,255,255,0.8), 0 12px 24px -6px rgba(255,107,53,0.8);
  }

  /* Hamburger button + mobile dropdown — hidden on desktop. */
  .imp-nav__burger { display: none; }
  .imp-nav__mobile { display: none; }

  @media (max-width: 640px) {
    /* collapse inline nav into the dropdown */
    .imp-nav__links, .imp-nav__cta { display: none; }
    .imp-nav__inner { padding: 12px 16px; gap: 12px; }
    .imp-nav__logo img { height: 34px; }

    .imp-nav__burger {
      display: inline-flex; align-items: center; justify-content: center;
      margin-left: auto;
      width: 42px; height: 42px; padding: 0;
      background: transparent; border: 1px solid rgba(255,255,255,0.15);
      border-radius: 8px; color: #e7e5e4; cursor: pointer;
      transition: background-color .2s ease, color .2s ease;
    }
    .imp-nav__burger:hover { background: rgba(255,255,255,0.08); color: #fff; }
    .imp-nav__burger .ic-close { display: none; }
    .imp-nav__burger.is-open .ic-menu { display: none; }
    .imp-nav__burger.is-open .ic-close { display: block; }

    .imp-nav__mobile.is-open {
      display: flex; flex-direction: column;
      width: 100%;
      border-top: 1px solid rgba(255,255,255,0.1);
      padding: 8px 16px 16px;
    }
    .imp-nav__mobile a {
      color: #d6d3d1; font-family: 'Satoshi', sans-serif;
      font-size: 16px; font-weight: 500; line-height: 1;
      padding: 15px 6px; border-bottom: 1px solid rgba(255,255,255,0.06);
      transition: color .2s ease;
    }
    .imp-nav__mobile a:hover { color: #fff; }
    .imp-nav__mobile .imp-nav__cta-mobile {
      margin-top: 14px; border-bottom: none;
      display: flex; align-items: center; justify-content: center;
      background: linear-gradient(180deg, #ff8555, #ff5215);
      border: 1px solid rgba(251, 146, 60, 0.5);
      box-shadow: inset 0 1px 1px rgba(255,255,255,0.55);
      color: #fff !important; font-weight: 700; font-size: 15px; line-height: 20px;
      padding: 13px 16px; border-radius: 4px;
    }
  }
</style>

<header class="imp-nav">
  <div class="imp-nav__inner">
    <a class="imp-nav__logo" href="{{ url('') }}">
      <img src="{{ asset('image/imperium-logo-orange-new.png') }}" alt="Imperium Software Technologies" />
    </a>
    <ul class="imp-nav__links">
      <li><a href="{{ url('industry-influence') }}">Verticals</a></li>
      <li><a href="{{ url('casestudy') }}">Case Studies</a></li>
    </ul>
    <a class="imp-nav__cta" href="{{ url('contact') }}">Talk to an Expert</a>
    <button class="imp-nav__burger" id="impNavBurger" type="button"
            aria-label="Toggle navigation menu" aria-controls="impNavMenu" aria-expanded="false">
      <svg class="ic-menu" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <path d="M4 7h16M4 12h16M4 17h16" />
      </svg>
      <svg class="ic-close" width="24" height="24" viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <path d="M6 6l12 12M18 6L6 18" />
      </svg>
    </button>
  </div>
  <div class="imp-nav__mobile" id="impNavMenu">
    <a href="{{ url('industry-influence') }}">Verticals</a>
    <a href="{{ url('casestudy') }}">Case Studies</a>
    <a class="imp-nav__cta-mobile" href="{{ url('contact') }}">Talk to an Expert</a>
  </div>
</header>

<script>
  (function () {
    var burger = document.getElementById('impNavBurger');
    var menu = document.getElementById('impNavMenu');
    if (!burger || !menu) return;
    function setOpen(open) {
      menu.classList.toggle('is-open', open);
      burger.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    }
    burger.addEventListener('click', function () {
      setOpen(!menu.classList.contains('is-open'));
    });
    // close after tapping any menu link
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setOpen(false); });
    });
    // close if resized up to desktop so it can't get stuck open
    window.matchMedia('(min-width: 641px)').addEventListener('change', function (e) {
      if (e.matches) setOpen(false);
    });
  })();
</script>
