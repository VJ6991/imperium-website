<style>
  /* Inner-page navbar — matches the homepage navbar: fixed translucent dark bar,
     logo 36/40px, links 14px / weight 500 / stone-300 -> white, 20/24px gap.
     Only two short links, so they stay inline at every width (no hamburger needed). */
  .imp-nav a { text-decoration: none !important; }
  .imp-nav {
    position: fixed; top: 0; left: 0; width: 100%; z-index: 50;
    background: rgba(12, 10, 9, 0.6);
    -webkit-backdrop-filter: blur(64px); backdrop-filter: blur(64px);
  }
  /* Fixed values that replicate the homepage bar exactly (the old theme's viewport
     makes @media breakpoints unreliable here, so no media queries): 40px logo,
     16px top/bottom padding, +4px logo nudge (homepage's mt-1), 40px logo->links
     gap, 24px gap between the two links — so the bar height and the items' distance
     from the top and bottom edges match the homepage. */
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
  </div>
</header>
