<?php
$pageTitle  = 'Local Businesses';
$activePage = 'home';
$extraCss = '<style>
.hero{background:linear-gradient(135deg,#2d1b69 0%,var(--primary) 55%,#3a7c5a 100%);padding:40px 20px 36px}
.hero-inner{max-width:680px;margin:0 auto;text-align:center}
.hero-badge{display:inline-flex;align-items:center;gap:5px;background:rgba(255,255,255,0.15);border-radius:40px;padding:4px 12px;font-size:0.72rem;font-weight:600;color:#fff;margin-bottom:14px}
.hero h1{font-family:"Syne",sans-serif;font-weight:800;font-size:2rem;color:#fff;margin-bottom:10px;line-height:1.2}
.hero h1 em{color:#a78bfa;font-style:normal}
.hero p{color:rgba(255,255,255,0.8);font-size:0.9rem;margin-bottom:22px}
.hero-search{display:flex;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,0.15);max-width:480px;margin:0 auto}
.hero-search input{flex:1;padding:14px 16px;border:none;font-size:0.9rem;font-family:inherit;outline:none}
.hero-search button{padding:14px 20px;background:var(--primary);color:#fff;border:none;font-size:1rem;cursor:pointer}
.main-wrap{max-width:1150px;margin:0 auto;padding:24px 16px}
.main-grid{display:grid;grid-template-columns:1fr 260px;gap:22px}
.section-title{font-family:"Syne",sans-serif;font-weight:700;font-size:1rem;color:var(--text-dark);margin-bottom:14px;display:flex;align-items:center;gap:8px}
.cat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin-bottom:24px}
.cat-card{background:#fff;border-radius:var(--radius);padding:14px 10px;text-align:center;cursor:pointer;transition:var(--transition);box-shadow:var(--shadow);text-decoration:none;display:block;color:inherit}
.cat-card:hover{transform:translateY(-2px);box-shadow:var(--shadow-hover)}
.cat-icon{width:44px;height:44px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin:0 auto 8px}
.ic-purple{background:var(--purple-light);color:var(--purple)}.ic-green{background:var(--green-light);color:var(--green)}
.ic-maroon{background:var(--maroon-light);color:var(--maroon)}.ic-teal{background:var(--teal-light);color:var(--teal)}.ic-amber{background:var(--amber-light);color:var(--amber)}
.cat-card h4{font-family:"Syne",sans-serif;font-weight:700;font-size:0.75rem;color:var(--text-dark);margin-bottom:2px}
.cat-card span{font-size:0.68rem;color:var(--text-muted)}
.ads-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:24px}
.ad-card{background:#fff;border-radius:var(--radius);box-shadow:var(--shadow);overflow:hidden;transition:var(--transition);text-decoration:none;display:block;color:inherit}
.ad-card:hover{transform:translateY(-2px);box-shadow:var(--shadow-hover)}
.ad-card-body{padding:14px}
.ad-card-top{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:6px}
.ad-title{font-family:"Syne",sans-serif;font-weight:700;font-size:0.88rem;color:var(--text-dark);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:140px}
.plan-tag{padding:2px 7px;border-radius:40px;font-size:0.65rem;font-weight:700}
.plan-pro{background:var(--green-light);color:var(--green)}.plan-premium{background:var(--amber-light);color:var(--amber)}.plan-basic{background:var(--teal-light);color:var(--teal)}
.ad-desc{font-size:0.78rem;color:var(--text-muted);display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;margin-bottom:7px}
.ad-meta{font-size:0.72rem;color:var(--text-muted);display:flex;justify-content:space-between;align-items:center}
.banner-wrap{border-radius:var(--radius);overflow:hidden;margin-bottom:22px;position:relative}
.banner-track{display:flex;transition:transform 0.4s ease}
.banner-slide{flex:0 0 100%;padding:20px;display:flex;gap:14px;align-items:center;min-height:130px;text-decoration:none;color:#fff}
.b-maroon{background:linear-gradient(135deg,var(--maroon),#c0392b)}
.b-teal{background:linear-gradient(135deg,var(--teal),#1a6070)}
.b-green{background:linear-gradient(135deg,var(--green),#2d6a4f)}
.banner-arrow{position:absolute;top:50%;transform:translateY(-50%);width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,0.2);color:#fff;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:0.9rem}
.banner-arrow.prev{left:8px}.banner-arrow.next{right:8px}
.free-box{background:#fff;border-radius:var(--radius);box-shadow:var(--shadow);overflow:hidden}
.free-head{padding:12px 14px;border-bottom:1px solid var(--sand-dark);display:flex;align-items:center;justify-content:space-between}
.free-head h4{font-family:"Syne",sans-serif;font-weight:700;font-size:0.85rem;color:var(--text-dark)}
.live-dot{width:7px;height:7px;border-radius:50%;background:var(--green);animation:pulse 1.5s infinite;display:inline-block}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:0.4}}
.free-list{height:300px;overflow-y:auto;scrollbar-width:thin;scrollbar-color:var(--border) transparent}
.free-item{padding:9px 14px;border-bottom:1px solid var(--sand-dark);display:flex;align-items:center;gap:9px}
.free-av{width:32px;height:32px;border-radius:50%;background:var(--purple-light);color:var(--primary);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.78rem;flex-shrink:0}
.free-name{font-size:0.82rem;font-weight:600;color:var(--text-dark)}
.free-prof{font-size:0.72rem;color:var(--text-muted)}
.sidebar-cta{background:linear-gradient(135deg,var(--primary),#2d1b69);border-radius:var(--radius);padding:18px;text-align:center;color:#fff;margin-top:12px}
.sidebar-cta h4{font-family:"Syne",sans-serif;font-weight:800;font-size:0.95rem;margin-bottom:6px}
.sidebar-cta p{font-size:0.76rem;opacity:0.85;margin-bottom:12px;line-height:1.5}
.sidebar-cta a{display:inline-flex;align-items:center;gap:5px;padding:8px 18px;background:#fff;color:var(--primary);border-radius:40px;font-weight:700;font-size:0.8rem}
@media(max-width:768px){.main-grid{grid-template-columns:1fr}.sidebar{display:none}.cat-grid{grid-template-columns:repeat(3,1fr)}.hero h1{font-size:1.5rem}}
@media(max-width:480px){.ads-grid{grid-template-columns:1fr}.cat-grid{grid-template-columns:repeat(3,1fr);gap:8px}}
</style>';
require CITY_DIR . '/views/layout/header.php';
$catIcons = ['Restaurants'=>'bi-shop','Hotels & Stays'=>'bi-building','Shopping'=>'bi-bag-heart','Health & Clinic'=>'bi-heart-pulse','Services'=>'bi-tools','Education'=>'bi-mortarboard','Automobile'=>'bi-car-front','Photography'=>'bi-camera'];
$catColors = ['ic-purple','ic-green','ic-maroon','ic-teal','ic-amber','ic-purple','ic-green','ic-maroon'];
?>
<main>
<section class="hero">
  <div class="hero-inner">
    <div class="hero-badge"><i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars(CITY_NAME) ?></div>
    <h1>Find the Best <em>Local Businesses</em> Near You</h1>
    <p>Discover trusted shops, services & professionals in <?= htmlspecialchars(CITY_NAME) ?></p>
    <div class="hero-search">
      <input type="text" id="hsearch" placeholder="Search businesses..." onkeydown="if(event.key==='Enter')goSearch()">
      <button onclick="goSearch()"><i class="bi bi-search"></i></button>
    </div>
  </div>
</section>
<div class="main-wrap"><div class="main-grid">
<div>
  <h2 class="section-title"><i class="bi bi-grid-fill" style="color:var(--primary)"></i> Categories</h2>
  <div class="cat-grid">
    <?php foreach($categories as $i=>$cat): ?>
    <a href="<?= $cityUrl ?>/search?cat=<?= $cat['id'] ?>" class="cat-card">
      <div class="cat-icon <?= $catColors[$i%count($catColors)] ?>"><i class="bi <?= $catIcons[$cat['name']] ?? 'bi-shop' ?>"></i></div>
      <h4><?= htmlspecialchars($cat['name']) ?></h4>
      <span><?= $cat['listing_count'] ?> listings</span>
    </a>
    <?php endforeach ?>
  </div>
  <?php if(!empty($banners)): ?>
  <h2 class="section-title"><i class="bi bi-star-fill" style="color:var(--amber)"></i> Featured</h2>
  <div class="banner-wrap"><div class="banner-track" id="btrack">
    <?php $bcols=['b-maroon','b-teal','b-green']; foreach($banners as $bi=>$b): ?>
    <a href="<?= $cityUrl ?>/listing/<?= htmlspecialchars($b['slug']) ?>" class="banner-slide <?= $bcols[$bi%3] ?>">
      <div style="font-size:2.5rem;flex-shrink:0">🏢</div>
      <div style="flex:1">
        <div style="font-size:0.68rem;font-weight:600;opacity:0.8;margin-bottom:4px">PRO</div>
        <div style="font-family:'Syne',sans-serif;font-weight:800;font-size:1rem;margin-bottom:4px"><?= htmlspecialchars($b['business_name']) ?></div>
        <div style="font-size:0.78rem;opacity:0.85"><?= htmlspecialchars(substr($b['short_description']??'',0,80)) ?></div>
        <?php if($b['avg_rating']): ?><div style="font-size:0.75rem;margin-top:6px;opacity:0.9">⭐ <?= $b['avg_rating'] ?> (<?= $b['review_count'] ?>)</div><?php endif ?>
      </div>
    </a>
    <?php endforeach ?>
  </div>
  <button class="banner-arrow prev" onclick="slideBanner(-1)"><i class="bi bi-chevron-left"></i></button>
  <button class="banner-arrow next" onclick="slideBanner(1)"><i class="bi bi-chevron-right"></i></button>
  </div>
  <?php endif ?>
  <?php if(!empty($featured)): ?>
  <h2 class="section-title" style="margin-top:4px"><i class="bi bi-lightning-charge-fill" style="color:var(--purple)"></i> Premium Listings</h2>
  <div class="ads-grid">
    <?php foreach($featured as $ad): ?>
    <a href="<?= $cityUrl ?>/listing/<?= htmlspecialchars($ad['slug']) ?>" class="ad-card">
      <div class="ad-card-body">
        <div class="ad-card-top"><div class="ad-title"><?= htmlspecialchars($ad['business_name']) ?></div><span class="plan-tag plan-<?= $ad['plan_level'] ?>"><?= ucfirst($ad['plan_level']) ?></span></div>
        <div class="ad-desc"><?= htmlspecialchars($ad['short_description']??'') ?></div>
        <div class="ad-meta"><span><?= htmlspecialchars($ad['cat_name']??'') ?></span><?php if($ad['avg_rating']): ?><span style="color:#f59e0b">⭐ <?= $ad['avg_rating'] ?></span><?php endif ?></div>
      </div>
    </a>
    <?php endforeach ?>
  </div>
  <?php endif ?>
  <?php if(!empty($basics)): ?>
  <h2 class="section-title"><i class="bi bi-grid" style="color:var(--teal)"></i> More Businesses</h2>
  <div class="ads-grid">
    <?php foreach($basics as $ad): ?>
    <a href="<?= $cityUrl ?>/listing/<?= htmlspecialchars($ad['slug']) ?>" class="ad-card">
      <div class="ad-card-body">
        <div class="ad-card-top"><div class="ad-title"><?= htmlspecialchars($ad['business_name']) ?></div><span class="plan-tag plan-basic">Basic</span></div>
        <div class="ad-desc"><?= htmlspecialchars($ad['short_description']??'') ?></div>
        <div class="ad-meta"><span><?= htmlspecialchars($ad['cat_name']??'') ?></span></div>
      </div>
    </a>
    <?php endforeach ?>
  </div>
  <?php endif ?>
</div>
<div class="sidebar">
  <?php if(!empty($freeUsers)): ?>
  <div class="free-box">
    <div class="free-head"><h4>Free Members</h4><div style="display:flex;align-items:center;gap:5px;font-size:0.7rem;color:var(--green)"><span class="live-dot"></span>Live</div></div>
    <div class="free-list">
      <?php foreach($freeUsers as $fu): ?>
      <div class="free-item">
        <div class="free-av"><?= strtoupper(substr($fu['name'],0,1)) ?></div>
        <div>
          <div class="free-name"><?= htmlspecialchars($fu['name']) ?></div>
          <div class="free-prof"><?= htmlspecialchars($fu['profession']??'') ?></div>
          <?php if(!empty($fu['phone'])): ?><div style="font-size:0.7rem;color:var(--text-muted);margin-top:1px"><i class="bi bi-telephone-fill" style="font-size:0.65rem"></i> <?= htmlspecialchars($fu['phone']) ?></div><?php endif ?>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <?php endif ?>
  <div class="sidebar-cta">
    <h4>List Your Business Free</h4>
    <p>Join hundreds of businesses in <?= htmlspecialchars(CITY_NAME) ?> and get discovered.</p>
    <a href="<?= $cityUrl ?>/post-ad"><i class="bi bi-plus-circle"></i> Post Free Ad</a>
  </div>
</div>
</div></div>
</main>
<script>
function goSearch(){var q=document.getElementById("hsearch").value.trim();if(q)window.location.href="<?= $cityUrl ?>/search?q="+encodeURIComponent(q);}
var bIdx=0,bSlides=document.querySelectorAll(".banner-slide");
function slideBanner(d){if(!bSlides.length)return;bIdx=(bIdx+d+bSlides.length)%bSlides.length;document.getElementById("btrack").style.transform="translateX(-"+bIdx*100+"%)";}
if(bSlides.length>1)setInterval(function(){slideBanner(1);},4000);
</script>
