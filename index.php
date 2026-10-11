<?php
$url = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
if ($url == 'sec/' || $url == '192.168.1.53/') {
    $host  = 'http://sec';
    $hosts = 'https://sd:443/';
} else {
    $host  = 'http://apps.sitaninfo.com';
    $hosts = 'https://apps.sitaninfo.com:443';
}

$apps = [
    [
        'name'  => 'FLEX RH GTA',
        'desc'  => 'Gestion du personnel',
        'url'   => 'http://192.168.1.53:90/gtp',
        'logo'  => 'portail/icons/flexrh.png',
        'accent' => '#8E1B2E',
    ],
    [
        'name'  => 'GTP',
        'desc'  => 'Gestion du temps',
        'url'   => $host . ':8081/Gtp/',
        'logo'  => 'portail/icons/gtp.png',
        'accent' => '#7B1E2B',
    ],
    [
        'name'  => 'Cantine SEC',
        'desc'  => 'Cantine et paiements',
        'url'   => 'http://192.168.1.132:3000',
        'logo'  => 'portail/icons/cantine.png',
        'accent' => '#A8894E',
    ],
    [
        'name'  => 'GLPI',
        'desc'  => 'Supervision et support',
        'url'   => 'http://backup/glpi/',
        'logo'  => 'portail/icons/glpi.png',
        'accent' => '#5BA81F',
    ],
    [
        'name'  => 'SARALI',
        'desc'  => 'Gestion de la paie',
        'url'   => 'http://cloud.sitaninfo.com:8090/sarali/',
        'logo'  => 'portail/icons/sarali.png',
        'accent' => '#2A50A8',
    ],
    [
        'name'  => 'E-MEETING',
        'desc'  => 'Réunions en ligne',
        'url'   => 'http://cloud.sitaninfo.com:9586/',
        'logo'  => 'portail/icons/emeeting.png',
        'accent' => '#D9453F',
    ],
    [
        'name'  => 'ANNUAIRE SEC',
        'desc'  => 'Annuaire des collaborateurs',
        'url'   => 'annuaire/',
        'glyph' => 'directory',
        'accent' => '#2E8C8C',
    ],
    [
        'name'  => 'SYSCOHADA to DGI',
        'desc'  => 'Conversion comptable',
        'url'   => 'https://syscohada-to-dgi.vercel.app',
        'glyph' => 'convert',
        'accent' => '#C08A3E',
    ],
];

$glyphs = [
    'directory' => '<path d="M7 3h11a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7V3Z"/>'
                 . '<path d="M4 7h3M4 12h3M4 17h3"/>'
                 . '<circle cx="13" cy="10" r="2.2"/>'
                 . '<path d="M9.8 16c.5-1.6 1.7-2.5 3.2-2.5s2.7.9 3.2 2.5"/>',
    'convert'   => '<path d="M4 8h12l-3-3M20 16H8l3 3"/>'
                 . '<path d="M4 8v8M20 16V8"/>',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portail applicatif SEC Diarra — Société d'Expertise Comptable">
<title>Portail SEC DIARRA</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
<style>
:root{
  --maroon:#6B1B04;            /* the "Diarra" script in the logo */
  --maroon-deep:#4E1403;
  --maroon-soft:#8F3A1C;
  --maroon-tint:rgba(107,27,4,.07);
  --ink:#1C1A18;
  --muted:#6E6A66;
  --line:#E7E2DD;
  --surface:#FFFFFF;
  --surface-2:#F7F5F3;
  --radius:16px;
}
*{box-sizing:border-box}
html,body{height:100%}
body{
  margin:0;
  font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;
  color:var(--ink);
  background:var(--surface);
  -webkit-font-smoothing:antialiased;
  overflow:hidden;
}

/* ---------- background ---------- */
.backdrop{position:fixed;inset:0;z-index:0;overflow:hidden;background:#17120F}
/* full width; the small horizontal overscan hides the soft edge the blur
   would otherwise leave against the frame */
.backdrop img{
  position:absolute;left:-10px;top:50%;translate:0 -50%;
  width:calc(100% + 20px);height:auto;
  filter:blur(2px);
}
/* dark veil, heaviest on the left so the text side stays readable */
.backdrop::after{
  content:"";position:absolute;inset:0;
  background:linear-gradient(100deg,
    rgba(10,7,5,.78) 0%,
    rgba(10,7,5,.64) 28%,
    rgba(10,7,5,.38) 58%,
    rgba(10,7,5,.20) 100%);
}

/* ---------- shell ---------- */
.shell{position:relative;z-index:1;display:flex;height:100vh}

/* ---------- sidebar ---------- */
.sidebar{
  width:286px;flex:0 0 286px;
  display:flex;flex-direction:column;
  background:rgba(255,255,255,.94);
  -webkit-backdrop-filter:blur(26px);backdrop-filter:blur(26px);
  border-right:1px solid var(--line);
}
.brand{
  padding:18px 18px 14px;
  border-bottom:1px solid var(--line);
}
.brand-plate{display:block;width:100%;max-width:186px}
.brand-plate img{display:block;width:100%;height:auto}
.brand span{
  display:block;margin-top:9px;
  font-size:9px;letter-spacing:.2em;text-transform:uppercase;
  color:var(--maroon);
}

.nav{
  flex:1;min-height:0;overflow-y:auto;
  padding:10px 10px 6px;
  display:flex;flex-direction:column;gap:2px;
  scrollbar-width:thin;scrollbar-color:rgba(107,27,4,.25) transparent;
}
.nav::-webkit-scrollbar{width:6px}
.nav::-webkit-scrollbar-thumb{background:rgba(107,27,4,.22);border-radius:3px}

.app{
  --accent:var(--maroon);
  position:relative;
  display:flex;align-items:center;gap:10px;
  padding:6px 10px 6px 8px;
  border-radius:11px;
  text-decoration:none;color:inherit;
  border:1px solid transparent;
  transition:background .18s ease, border-color .18s ease, transform .18s ease;
}
.app::before{
  content:"";position:absolute;left:0;top:50%;translate:0 -50%;
  width:3px;height:0;border-radius:0 3px 3px 0;
  background:var(--accent);
  transition:height .22s ease;
}
.app:hover,.app:focus-visible{
  background:var(--maroon-tint);
  border-color:rgba(107,27,4,.12);
  outline:none;
}
.app:hover::before,.app:focus-visible::before{height:26px}
.app:focus-visible{box-shadow:0 0 0 2px rgba(107,27,4,.4)}
.app:hover .app-name{color:var(--maroon)}

.plate{
  flex:0 0 58px;width:58px;height:37px;
  border-radius:9px;
  background:var(--surface-2);
  border:1px solid var(--line);
  display:flex;align-items:center;justify-content:center;
  padding:4px 5px;
  transition:border-color .2s ease, background .2s ease;
}
.app:hover .plate{background:#fff;border-color:rgba(107,27,4,.3)}
.plate img{max-width:100%;max-height:100%;object-fit:contain;display:block}
.plate svg{width:20px;height:20px;fill:none;stroke:var(--accent);stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round}

.app-txt{min-width:0;flex:1}
.app-name{
  display:block;font-size:12px;font-weight:600;letter-spacing:.012em;
  white-space:nowrap;overflow:hidden;text-overflow:ellipsis;
}
.app-desc{
  display:block;margin-top:1px;font-size:10px;color:var(--muted);
  white-space:nowrap;overflow:hidden;text-overflow:ellipsis;
}
.chev{
  flex:0 0 auto;width:14px;height:14px;opacity:.35;color:var(--muted);
  fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;
  transition:opacity .18s ease, translate .18s ease, color .18s ease;
}
.app:hover .chev{opacity:1;translate:3px 0;color:var(--maroon)}

.no-result{
  display:none;padding:22px 14px;text-align:center;
  font-size:12.5px;color:var(--muted);
}

.side-foot{
  padding:12px 18px 15px;border-top:1px solid var(--line);
  display:flex;align-items:center;gap:9px;
  font-size:10px;line-height:1.45;color:var(--muted);
}
.side-foot svg{
  flex:0 0 auto;width:15px;height:15px;
  fill:none;stroke:var(--maroon);stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round;
}

/* ---------- content ---------- */
.content{flex:1;min-width:0;display:flex;flex-direction:column}

.topbar{
  display:flex;align-items:center;gap:14px;
  padding:12px 24px;
  background:rgba(255,255,255,.9);
  -webkit-backdrop-filter:blur(16px);backdrop-filter:blur(16px);
  border-bottom:1px solid var(--line);
}
.search{
  position:relative;flex:1;max-width:400px;
}
.search svg{
  position:absolute;left:13px;top:50%;translate:0 -50%;
  width:15px;height:15px;opacity:.5;
  fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;
}
.search input{
  width:100%;height:36px;
  padding:0 14px 0 37px;
  font:inherit;font-size:12px;color:var(--ink);
  background:var(--surface-2);
  border:1px solid var(--line);
  border-radius:10px;
  transition:border-color .18s ease, background .18s ease;
}
.search input::placeholder{color:var(--muted)}
.search input:focus{
  outline:none;background:#fff;
  border-color:var(--maroon);
  box-shadow:0 0 0 3px rgba(107,27,4,.1);
}
.topbar-right{margin-left:auto;display:flex;align-items:center;gap:14px}
.user{display:flex;align-items:center;gap:9px}
.avatar{
  width:31px;height:31px;border-radius:50%;
  display:grid;place-items:center;
  font-size:10.5px;font-weight:700;letter-spacing:.05em;color:#fff;
  background:linear-gradient(145deg,var(--maroon-soft),var(--maroon-deep));
}
.user b{display:block;font-size:11px;font-weight:600}
.user small{display:block;font-size:9.5px;color:var(--muted)}

/* ---------- hero ---------- */
.hero{
  flex:1;min-height:0;
  display:flex;flex-direction:column;justify-content:center;
  align-items:flex-start;
  padding:0 24px 6vh 36px;
}
.hero-inner{max-width:560px}
.script{
  font-family:'Playfair Display',Georgia,serif;
  font-style:italic;font-weight:500;
  font-size:clamp(16px,1.7vw,21px);
  color:#E4BCA4;
  margin:0 0 5px;
}
.rule{width:48px;height:2px;background:#B4552F;margin:0 0 16px;border:0}
.hero h1{
  margin:0;
  font-size:clamp(23px,2.9vw,36px);
  line-height:1.14;
  font-weight:700;
  letter-spacing:-.018em;
  color:#FFFFFF;
}
.author{margin:12px 0 0;font-size:12px;color:rgba(255,255,255,.72)}

.pills{display:flex;flex-wrap:wrap;gap:20px;margin-top:76px}
.pill{display:flex;align-items:center;gap:10px}
.pill-ico{
  width:32px;height:32px;border-radius:50%;
  display:grid;place-items:center;flex:0 0 auto;
  background:rgba(255,255,255,.93);
}
.pill-ico svg{
  width:16px;height:16px;fill:none;stroke:var(--maroon);stroke-width:1.8;
  stroke-linecap:round;stroke-linejoin:round;
}
.pill p{margin:0;font-size:11px;line-height:1.4;color:rgba(255,255,255,.9)}

/* ---------- responsive ---------- */
@media (max-width:980px){
  body{overflow:auto}
  .shell{flex-direction:column;height:auto;min-height:100vh}
  .sidebar{width:100%;flex:none;border-right:0;border-bottom:1px solid var(--line)}
  /* a 16:9 photo at full width would be a thin strip on a portrait screen */
  .backdrop img{height:100%;object-fit:cover}
  .nav{overflow:visible;display:grid;grid-template-columns:repeat(auto-fill,minmax(258px,1fr));gap:4px}
  .hero{padding:28px 20px 36px;max-width:none}
  .topbar{padding:12px 20px;flex-wrap:wrap}
  .search{max-width:none;order:2;flex-basis:100%}
  .topbar-right{margin-left:auto}
  .pills{gap:18px;margin-top:28px}
}
@media (max-width:520px){
  .user-meta{display:none}
  .pill{flex:1 1 100%}
}
@media (prefers-reduced-motion:reduce){
  *{transition:none!important}
}
</style>
</head>
<body>

<div class="backdrop"><img src="portail/bg-sec.jpg" alt=""></div>

<div class="shell">

  <aside class="sidebar">
    <div class="brand">
      <span class="brand-plate">
        <img src="portail/icons/sec-wordmark.png" alt="SEC Diarra — Société d'Expertise Comptable">
      </span>
      <span>Portail applicatif</span>
    </div>

    <nav class="nav" id="nav">
      <?php foreach ($apps as $a): ?>
      <a class="app" href="<?= htmlspecialchars($a['url'], ENT_QUOTES) ?>" target="_blank" rel="noopener"
         style="--accent:<?= htmlspecialchars($a['accent'], ENT_QUOTES) ?>"
         data-search="<?= htmlspecialchars($a['name'] . ' ' . $a['desc'], ENT_QUOTES) ?>">
        <span class="plate">
          <?php if (isset($a['logo'])): ?>
            <img src="<?= htmlspecialchars($a['logo'], ENT_QUOTES) ?>" alt="">
          <?php else: ?>
            <svg viewBox="0 0 24 24" aria-hidden="true"><?= $glyphs[$a['glyph']] ?></svg>
          <?php endif; ?>
        </span>
        <span class="app-txt">
          <span class="app-name"><?= htmlspecialchars($a['name']) ?></span>
          <span class="app-desc"><?= htmlspecialchars($a['desc']) ?></span>
        </span>
        <svg class="chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
      </a>
      <?php endforeach; ?>
      <p class="no-result" id="noResult">Aucune application ne correspond.</p>
    </nav>

    <div class="side-foot">
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 17 10 11l4 4 6-7"/><path d="M20 8v5M20 8h-5"/></svg>
      <span>Ensemble pour une gestion<br>plus simple et plus efficace</span>
    </div>
  </aside>

  <div class="content">

    <header class="topbar">
      <div class="search">
        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.4-3.4"/></svg>
        <input type="search" id="q" placeholder="Rechercher une application…" aria-label="Rechercher une application" autocomplete="off">
      </div>
      <div class="topbar-right">
        <div class="user">
          <span class="avatar">SD</span>
          <span class="user-meta">
            <b>SEC DIARRA</b>
            <small>Bienvenue</small>
          </span>
        </div>
      </div>
    </header>

    <main class="hero">
      <div class="hero-inner">
        <p class="script">Bienvenue sur votre espace</p>
        <hr class="rule">
        <h1>Je ne perds jamais,<br>soit je gagne, soit j’apprends.</h1>
        <p class="author">Nelson Mandela</p>
      </div>

      <div class="pills">
        <div class="pill">
          <span class="pill-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l7 3v5c0 4.3-2.9 8.2-7 9.4C7.9 19.2 5 15.3 5 11V6l7-3Z"/><path d="m9.2 11.8 2 2 3.6-3.8"/></svg></span>
          <p>Des outils fiables<br>et sécurisés</p>
        </div>
        <div class="pill">
          <span class="pill-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2 4.5 13H11l-1 9 8.5-11H12l1-9Z"/></svg></span>
          <p>Une gestion plus<br>performante</p>
        </div>
        <div class="pill">
          <span class="pill-ico"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8" r="3.2"/><path d="M3 19c.6-3.3 3-5.2 6-5.2s5.4 1.9 6 5.2"/><path d="M16.5 5.4a3.2 3.2 0 0 1 0 5.9M18.2 13.9c2 .8 3.4 2.6 3.8 5.1"/></svg></span>
          <p>Une équipe<br>plus connectée</p>
        </div>
      </div>
    </main>

  </div>
</div>

<script>
(function () {
  var q = document.getElementById('q');
  var items = Array.prototype.slice.call(document.querySelectorAll('.app'));
  var empty = document.getElementById('noResult');

  function norm(s) {
    return s.toLowerCase().normalize('NFD').replace(/[̀-ͯ]/g, '');
  }

  q.addEventListener('input', function () {
    var term = norm(q.value.trim());
    var shown = 0;
    items.forEach(function (el) {
      var hit = !term || norm(el.dataset.search).indexOf(term) !== -1;
      el.style.display = hit ? '' : 'none';
      if (hit) shown++;
    });
    empty.style.display = shown ? 'none' : 'block';
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === '/' && document.activeElement !== q) {
      e.preventDefault();
      q.focus();
    }
  });
})();
</script>
</body>
</html>
