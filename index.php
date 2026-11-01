<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>summercontrol — Nevada Summer Garden Maintenance Guide</title>
<meta name="description" content="A complete garden maintenance guide for Nevada summers: watering, soil, mulch, plants, pests and a seasonal checklist." />
<style>
  :root {
    --sand: #f4efe6;
    --clay: #c9895b;
    --terracotta: #b85c3a;
    --sage: #6b8e5a;
    --deep: #2b3a2e;
    --sky: #dfeaf3;
    --text: #2a241d;
    --muted: #6b6257;
  }
  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  body {
    margin: 0;
    font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
    color: var(--text);
    background: var(--sand);
    line-height: 1.6;
  }
  a { color: var(--terracotta); text-decoration: none; }
  a:hover { text-decoration: underline; }

  header.hero {
    background: linear-gradient(135deg, #e8d9c4 0%, #f4efe6 60%, #dfeaf3 100%);
    padding: 4rem 1.5rem 3rem;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  header.hero::before {
    content: "🌵";
    position: absolute;
    font-size: 12rem;
    opacity: 0.08;
    right: -2rem;
    top: -2rem;
  }
  .brand {
    font-size: 1.1rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--sage);
    font-weight: 700;
  }
  h1 {
    font-size: clamp(2rem, 5vw, 3.4rem);
    margin: 0.5rem 0 1rem;
    color: var(--deep);
    line-height: 1.15;
  }
  .tagline {
    max-width: 720px;
    margin: 0 auto 1.5rem;
    color: var(--muted);
    font-size: 1.1rem;
  }
  .cta {
    display: inline-block;
    background: var(--terracotta);
    color: #fff;
    padding: 0.75rem 1.6rem;
    border-radius: 999px;
    font-weight: 600;
    box-shadow: 0 6px 18px rgba(184,92,58,0.3);
  }
  .cta:hover { background: #9e4a2b; text-decoration: none; }

  nav {
    position: sticky;
    top: 0;
    background: rgba(244,239,230,0.92);
    backdrop-filter: blur(8px);
    border-bottom: 1px solid #e3d9c9;
    z-index: 10;
  }
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0.6rem 1rem;
    display: flex;
    flex-wrap: wrap;
    gap: 0.4rem 1.2rem;
    justify-content: center;
  }
  nav a { color: var(--deep); font-weight: 500; font-size: 0.95rem; }

  main { max-width: 1080px; margin: 0 auto; padding: 2rem 1.5rem 4rem; }
  section { margin: 3rem 0; }
  h2 {
    font-size: 1.7rem;
    color: var(--deep);
    border-left: 5px solid var(--clay);
    padding-left: 0.75rem;
    margin-bottom: 1rem;
  }
  h3 { color: var(--terracotta); margin-top: 1.4rem; }
  p { margin: 0.6rem 0; }
  ul, ol { padding-left: 1.4rem; }
  li { margin: 0.35rem 0; }

  .guide-image {
    width: 100%;
    max-width: 900px;
    height: auto;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    margin: 1.5rem auto 0.75rem;
    display: block;
    background-color: #e8d9c4;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .guide-image:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.16);
  }
  .image-caption {
    text-align: center;
    font-size: 0.9rem;
    color: var(--muted);
    margin-top: 0;
    margin-bottom: 1.5rem;
    font-style: italic;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.2rem;
    margin-top: 1rem;
  }
  .card {
    background: #fff;
    border-radius: 14px;
    padding: 1.3rem 1.4rem;
    box-shadow: 0 4px 14px rgba(0,0,0,0.06);
    border-top: 4px solid var(--sage);
  }
  .card h3 { margin-top: 0; }
  .tip {
    background: #fff7e6;
    border-left: 4px solid var(--clay);
    padding: 0.8rem 1rem;
    border-radius: 8px;
    margin: 1rem 0;
  }
  .warn {
    background: #fdecea;
    border-left: 4px solid var(--terracotta);
    padding: 0.8rem 1rem;
    border-radius: 8px;
    margin: 1rem 0;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 14px rgba(0,0,0,0.06);
  }
  th, td { padding: 0.7rem 0.9rem; text-align: left; border-bottom: 1px solid #eee; }
  th { background: var(--deep); color: #fff; }
  tr:last-child td { border-bottom: none; }

  footer {
    background: var(--deep);
    color: #e8e2d6;
    text-align: center;
    padding: 2rem 1rem;
    font-size: 0.9rem;
  }
  footer .brand { color: var(--clay); }
  .kbd { font-family: monospace; background: #eee; padding: 0.1rem 0.4rem; border-radius: 4px; }
</style>
</head>
<body>

<header class="hero">
  <div class="brand">summercontrol</div>
  <h1>Nevada Summer Garden<br/>Maintenance Guide</h1>
  <p class="tagline">Keep your desert garden thriving through 100°F+ days. Practical watering, soil, mulch, plant and pest guidance tailored to Nevada's arid summers.</p>
  <figure style="margin: 0 auto; max-width: 900px;">
    <img class="guide-image" src="images/hero-desert-garden.jpg" alt="Nevada desert xeriscape garden with succulents, agave, cacti, and gravel mulch in summer sunlight" width="900" height="506" />
    <figcaption class="image-caption">Nevada desert garden — xeriscape design &amp; drought-resilient landscaping</figcaption>
  </figure>
  <a class="cta" href="#watering">Start the guide</a>
</header>

<nav>
  <ul>
    <li><a href="#watering">Watering</a></li>
    <li><a href="#soil">Soil</a></li>
    <li><a href="#mulch">Mulch</a></li>
    <li><a href="#plants">Plants</a></li>
    <li><a href="#timing">Timing</a></li>
    <li><a href="#pests">Pests</a></li>
    <li><a href="#checklist">Checklist</a></li>
    <li><a href="#privacy">Privacy</a></li>
    <li><a href="#terms">Terms</a></li>
  </ul>
</nav>

<main>

<section id="intro">
  <h2>Why Nevada Summers Are Different</h2>
  <p>Nevada gardens face extreme heat, low humidity, intense UV, alkaline soil and rapid evaporation. Success comes from conserving water, protecting roots and choosing heat-tolerant plants. This guide focuses on sustainable, low-water practices for Las Vegas, Reno and the surrounding desert.</p>
  <div class="tip"><strong>Golden rule:</strong> Water deeply and less often, never shallow and daily. Deep roots survive heat; shallow roots cook.</div>
</section>

<section id="watering">
  <h2>Watering Schedule</h2>
  <p>Water early morning (5–7 AM) to reduce evaporation. Avoid midday watering. Use drip irrigation for efficiency.</p>
  <figure style="margin: 0 auto; max-width: 900px;">
    <img class="guide-image" src="images/drip-irrigation.jpg" alt="Garden drip irrigation system delivering deep hydration to plant root zones in morning light" width="900" height="506" loading="lazy" />
    <figcaption class="image-caption">Drip irrigation — deep, efficient watering directly at root level</figcaption>
  </figure>
  <table>
    <tr><th>Plant type</th><th>Frequency (peak summer)</th><th>Depth</th></tr>
    <tr><td>Lawns (bermuda/fescue)</td><td>2–3x per week</td><td>6 in</td></tr>
    <tr><td>Trees &amp; shrubs</td><td>1–2x per week</td><td>18–24 in</td></tr>
    <tr><td>Vegetables</td><td>Daily to every other day</td><td>8–10 in</td></tr>
    <tr><td>Container plants</td><td>1–2x daily</td><td>Full pot</td></tr>
    <tr><td>Succulents/cacti</td><td>Every 2–3 weeks</td><td>Soak &amp; dry</td></tr>
  </table>
  <div class="warn"><strong>Watch for:</strong> Yellowing leaves, soggy soil and fungal growth = overwatering. Wilting that doesn't recover by evening = underwatering.</div>
</section>

<section id="soil">
  <h2>Soil &amp; Amendments</h2>
  <p>Nevada soils are typically alkaline, salty and low in organic matter. Improve with compost and gypsum.</p>
  <ul>
    <li>Test pH (aim 6.5–7.5); add sulfur to lower alkalinity.</li>
    <li>Mix 2–3 in of compost into beds annually.</li>
    <li>Use gypsum to break up clay and improve drainage.</li>
    <li>Flush salts with deep watering every 4–6 weeks.</li>
    <li>Avoid over-fertilizing in heat; use slow-release formulas.</li>
  </ul>
</section>

<section id="mulch">
  <h2>Mulch: Your Best Friend</h2>
  <p>Mulch reduces soil temperature by up to 10°F and cuts evaporation by 50%+.</p>
  <figure style="margin: 0 auto; max-width: 900px;">
    <img class="guide-image" src="images/mulch-soil.jpg" alt="Layered natural organic mulch chips and warm desert gravel mulch protecting root systems" width="900" height="506" loading="lazy" />
    <figcaption class="image-caption">Layered organic wood mulch and desert rock mulch for soil cooling and water retention</figcaption>
  </figure>
  <div class="grid">
    <div class="card">
      <h3>Organic mulch</h3>
      <p>Bark, wood chips, straw. Apply 3–4 in. Keep 2 in away from trunks.</p>
    </div>
    <div class="card">
      <h3>Inorganic mulch</h3>
      <p>Gravel/rock for desert landscapes. Reflects heat—use light colors near plants.</p>
    </div>
    <div class="card">
      <h3>Compost top-dress</h3>
      <p>Thin layer under mulch feeds soil biology and retains moisture.</p>
    </div>
  </div>
</section>

<section id="plants">
  <h2>Heat-Tolerant Plant Picks</h2>
  <p>Select desert-adapted native and drought-hardy plants that bloom and stay vibrant in triple-digit heat.</p>
  <figure style="margin: 0 auto; max-width: 900px;">
    <img class="guide-image" src="images/heat-tolerant-plants.jpg" alt="Heat-tolerant blooms including desert marigolds, lantana, red yucca stalks, and blooming sage" width="900" height="506" loading="lazy" />
    <figcaption class="image-caption">Heat-tolerant blooms — lantana, desert marigold, red yucca, and purple sage</figcaption>
  </figure>
  <div class="grid">
    <div class="card">
      <h3>Vegetables</h3>
      <p>Okra, peppers, eggplant, sweet potatoes, Armenian cucumber, heat-tolerant tomatoes (Solar Fire, Heatmaster).</p>
    </div>
    <div class="card">
      <h3>Herbs</h3>
      <p>Rosemary, thyme, oregano, basil (afternoon shade), mint (containers).</p>
    </div>
    <div class="card">
      <h3>Flowers</h3>
      <p>Lantana, vinca, portulaca, zinnia, salvia, desert marigold.</p>
    </div>
    <div class="card">
      <h3>Trees &amp; shrubs</h3>
      <p>Palo verde, mesquite, Texas sage, red yucca, desert willow, olive.</p>
    </div>
  </div>
</section>

<section id="timing">
  <h2>Daily Timing &amp; Shade</h2>
  <p>Protect vulnerable plants with physical shade cloth barriers when intense UV and solar exposure peak between 12 PM and 5 PM.</p>
  <figure style="margin: 0 auto; max-width: 900px;">
    <img class="guide-image" src="images/shade-protection.jpg" alt="Desert vegetable garden with UV shade cloth canopy protecting thriving raised beds from summer sun" width="900" height="506" loading="lazy" />
    <figcaption class="image-caption">UV shade cloth canopy shielding garden beds during peak afternoon heat</figcaption>
  </figure>
  <ul>
    <li><strong>Plant</strong> in early spring or fall; avoid midsummer planting.</li>
    <li><strong>Shade cloth</strong> (30–50%) over veggies during peak afternoon (12–5 PM).</li>
    <li><strong>Harvest</strong> early morning when produce is crisp and cool.</li>
    <li><strong>Prune</strong> lightly; heavy pruning stresses plants in heat.</li>
    <li><strong>Fertilize</strong> in cooler months; pause high-nitrogen feeds in July–August.</li>
  </ul>
</section>

<section id="pests">
  <h2>Pest &amp; Disease Watch</h2>
  <ul>
    <li><strong>Spider mites:</strong> fine webbing; rinse leaves, increase humidity.</li>
    <li><strong>Aphids:</strong> hose off; introduce ladybugs.</li>
    <li><strong>Whiteflies:</strong> yellow sticky traps, neem oil.</li>
    <li><strong>Blossom end rot:</strong> calcium + consistent watering.</li>
    <li><strong>Sunscald:</strong> shade fruit; don't over-prune canopy.</li>
  </ul>
  <div class="tip">Prefer IPM (integrated pest management): monitor, identify, then least-toxic control.</div>
</section>

<section id="checklist">
  <h2>Weekly Summer Checklist</h2>
  <ol>
    <li>Check soil moisture 2–3 in deep before watering.</li>
    <li>Inspect for pests and disease (undersides of leaves).</li>
    <li>Top up mulch where thin.</li>
    <li>Harvest ripe produce promptly.</li>
    <li>Adjust irrigation timers for heat waves.</li>
    <li>Flush salts monthly.</li>
    <li>Remove dead/diseased foliage.</li>
  </ol>
</section>

<section id="privacy">
  <h2>Privacy Policy</h2>
  <p>summercontrol respects your privacy. This site is an informational garden maintenance guide and does not collect personal data by default.</p>
  <ul>
    <li><strong>No accounts:</strong> We do not require registration or login.</li>
    <li><strong>Analytics:</strong> We may use anonymous, aggregated analytics to understand page usage. No personally identifiable information is stored.</li>
    <li><strong>Cookies:</strong> Only essential cookies (if any) are used for basic site functionality. No advertising or tracking cookies.</li>
    <li><strong>Third parties:</strong> We do not sell or share your data with third parties.</li>
    <li><strong>Contact:</strong> Questions about this policy? Reach out via the site contact.</li>
  </ul>
  <p class="tip">Last updated: November 2026.</p>
</section>

<section id="terms">
  <h2>Terms of Service</h2>
  <p>By using summercontrol, you agree to the following terms.</p>
  <ul>
    <li><strong>Informational only:</strong> Content is provided for general guidance and is not professional horticultural or agricultural advice.</li>
    <li><strong>No warranties:</strong> We make no guarantees about plant survival, yields, or results; garden outcomes depend on many factors.</li>
    <li><strong>Use at your own risk:</strong> You are responsible for how you apply this information in your garden.</li>
    <li><strong>Intellectual property:</strong> All content is © summercontrol. You may share links but not republish without permission.</li>
    <li><strong>Changes:</strong> Terms may be updated; continued use constitutes acceptance.</li>
  </ul>
  <p class="tip">Last updated: November 2026.</p>
</section>

</main>

<footer>
  <div class="brand">summercontrol</div>
  <p>© 2026 summercontrol — Nevada desert gardening, made simple.</p>
  <p><a href="#privacy">Privacy Policy</a> · <a href="#terms">Terms of Service</a></p>
</footer>

</body>
</html>