<?php
/*
Template Name: AI Test Landing Page
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NexusAI — The Future of Intelligent Automation</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  :root {
    --brand-primary: #6C63FF;
    --brand-secondary: #00D9C0;
    --brand-dark: #0A0E1A;
    --brand-surface: #111827;
    --brand-card: #1A2235;
    --brand-muted: #8892B0;
    --brand-border: rgba(108,99,255,0.2);
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    background-color: var(--brand-dark);
    color: #E2E8F0;
    font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
    overflow-x: hidden;
  }

  /* ── Scrollbar ── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--brand-dark); }
  ::-webkit-scrollbar-thumb { background: var(--brand-primary); border-radius: 3px; }

  /* ── Nav ── */
  .nav-glass {
    background: rgba(10,14,26,0.75);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--brand-border);
  }

  /* ── Gradient text ── */
  .gradient-text {
    background: linear-gradient(135deg, #fff 0%, var(--brand-primary) 50%, var(--brand-secondary) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* ── Glow orbs ── */
  .orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.18;
    pointer-events: none;
  }
  .orb-purple { background: var(--brand-primary); }
  .orb-teal   { background: var(--brand-secondary); }

  /* ── Buttons ── */
  .btn-primary {
    background: linear-gradient(135deg, var(--brand-primary), #8B5CF6);
    color: #fff;
    border: none;
    padding: 14px 32px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: transform .2s, box-shadow .2s;
    box-shadow: 0 0 32px rgba(108,99,255,0.4);
    text-decoration: none;
    display: inline-block;
  }
  .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 48px rgba(108,99,255,0.6);
  }

  .btn-outline {
    background: transparent;
    color: #E2E8F0;
    border: 1.5px solid rgba(108,99,255,0.6);
    padding: 13px 32px;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: border-color .2s, background .2s, transform .2s;
    text-decoration: none;
    display: inline-block;
  }
  .btn-outline:hover {
    border-color: var(--brand-primary);
    background: rgba(108,99,255,0.08);
    transform: translateY(-2px);
  }

  /* ── Hero ── */
  .hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 120px 24px 80px;
  }

  .badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(108,99,255,0.12);
    border: 1px solid rgba(108,99,255,0.35);
    color: #A78BFA;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 6px 16px;
    border-radius: 100px;
    margin-bottom: 28px;
  }
  .badge-pill .dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--brand-secondary);
    box-shadow: 0 0 8px var(--brand-secondary);
    animation: pulse 2s infinite;
  }
  @keyframes pulse {
    0%,100% { opacity:1; transform: scale(1); }
    50%      { opacity:.5; transform: scale(1.4); }
  }

  /* ── Grid lines bg ── */
  .grid-bg {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(108,99,255,0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(108,99,255,0.04) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
  }

  /* ── Feature Cards ── */
  .feature-card {
    background: var(--brand-card);
    border: 1px solid var(--brand-border);
    border-radius: 20px;
    padding: 36px 30px;
    transition: border-color .3s, transform .3s, box-shadow .3s;
    position: relative;
    overflow: hidden;
  }
  .feature-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(108,99,255,0.05) 0%, transparent 60%);
    opacity: 0;
    transition: opacity .3s;
  }
  .feature-card:hover {
    border-color: rgba(108,99,255,0.5);
    transform: translateY(-6px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(108,99,255,0.15);
  }
  .feature-card:hover::before { opacity: 1; }

  .icon-wrap {
    width: 56px; height: 56px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
    font-size: 1.5rem;
  }

  /* ── Section Label ── */
  .section-label {
    display: inline-block;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--brand-secondary);
    margin-bottom: 12px;
  }

  /* ── Pricing ── */
  .pricing-card {
    background: var(--brand-card);
    border: 1px solid var(--brand-border);
    border-radius: 24px;
    padding: 40px 36px;
    position: relative;
    transition: transform .3s, box-shadow .3s;
  }
  .pricing-card.popular {
    border-color: var(--brand-primary);
    box-shadow: 0 0 0 1px var(--brand-primary), 0 32px 80px rgba(108,99,255,0.25);
    transform: scale(1.04);
  }
  .pricing-card:not(.popular):hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
  }

  .popular-badge {
    position: absolute;
    top: -14px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, var(--brand-primary), #8B5CF6);
    color: #fff;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 5px 18px;
    border-radius: 100px;
    white-space: nowrap;
  }

  .price-amount {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1;
  }

  .feature-check {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #CBD5E1;
    font-size: 0.9rem;
    padding: 6px 0;
  }
  .check-icon {
    width: 20px; height: 20px;
    border-radius: 50%;
    background: rgba(0,217,192,0.12);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    color: var(--brand-secondary);
    font-size: 0.65rem;
  }

  /* ── Toggle ── */
  .toggle-wrap {
    display: inline-flex;
    align-items: center;
    background: var(--brand-card);
    border: 1px solid var(--brand-border);
    border-radius: 100px;
    padding: 4px;
    gap: 4px;
  }
  .toggle-btn {
    padding: 8px 22px;
    border-radius: 100px;
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: background .2s, color .2s;
    background: transparent;
    color: var(--brand-muted);
  }
  .toggle-btn.active {
    background: var(--brand-primary);
    color: #fff;
  }

  /* ── Stats strip ── */
  .stat-item {
    text-align: center;
    padding: 20px;
  }

  /* ── Divider ── */
  .divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--brand-border), transparent);
    margin: 0 auto;
    max-width: 900px;
  }

  /* ── Footer ── */
  footer {
    background: var(--brand-surface);
    border-top: 1px solid var(--brand-border);
  }

  .footer-link {
    color: var(--brand-muted);
    text-decoration: none;
    font-size: 0.875rem;
    transition: color .2s;
  }
  .footer-link:hover { color: #E2E8F0; }

  /* ── Scroll fade-in ── */
  .fade-up {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity .6s ease, transform .6s ease;
  }
  .fade-up.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* ── Responsive tweaks ── */
  @media (max-width: 768px) {
    .pricing-card.popular { transform: scale(1); }
    .price-amount { font-size: 2.2rem; }
  }
</style>
</head>
<body>

<!-- ══════════════════════════════════════════
     NAVIGATION
══════════════════════════════════════════ -->
<nav class="nav-glass fixed top-0 left-0 right-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- Logo -->
    <div class="flex items-center gap-2">
      <div style="width:34px;height:34px;border-radius:10px;background:linear-gradient(135deg,#6C63FF,#00D9C0);display:flex;align-items:center;justify-content:center;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
      </div>
      <span style="font-size:1.15rem;font-weight:800;color:#E2E8F0;letter-spacing:-.02em;">Nexus<span style="color:#6C63FF;">AI</span></span>
    </div>

    <!-- Links -->
    <div class="hidden md:flex items-center gap-8">
      <a href="#features" class="footer-link text-sm font-medium">Features</a>
      <a href="#pricing" class="footer-link text-sm font-medium">Pricing</a>
      <a href="#" class="footer-link text-sm font-medium">Docs</a>
      <a href="#" class="footer-link text-sm font-medium">Blog</a>
    </div>

    <!-- CTA -->
    <div class="flex items-center gap-3">
      <a href="#" class="footer-link text-sm font-semibold hidden md:inline">Sign In</a>
      <a href="#" class="btn-primary" style="padding:10px 22px;font-size:0.875rem;">Get Started Free</a>
    </div>
  </div>
</nav>


<!-- ══════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════ -->
<section class="hero-section" id="hero">

  <!-- Background atmosphere -->
  <div class="grid-bg"></div>
  <div class="orb orb-purple" style="width:600px;height:600px;top:-100px;left:-200px;"></div>
  <div class="orb orb-teal"   style="width:500px;height:500px;bottom:-80px;right:-150px;"></div>

  <div class="max-w-7xl mx-auto w-full relative z-10">
    <div class="grid lg:grid-cols-2 gap-16 items-center">

      <!-- Left: Copy -->
      <div>
        <div class="badge-pill">
          <span class="dot"></span>
          Now in Public Beta
        </div>

        <h1 style="font-size:clamp(2.5rem,5vw,4rem);font-weight:900;line-height:1.1;letter-spacing:-.03em;margin-bottom:24px;">
          Automate Everything.<br/>
          <span class="gradient-text">Scale Effortlessly.</span>
        </h1>

        <p style="font-size:1.125rem;line-height:1.75;color:#94A3B8;max-width:520px;margin-bottom:40px;">
          NexusAI is the AI-powered automation platform built for modern teams. Connect your tools, eliminate busywork, and move at the speed of thought — no code required.
        </p>

        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:52px;">
          <a href="#" class="btn-primary">Start for Free →</a>
          <a href="#" class="btn-outline">
            <span style="display:inline-flex;align-items:center;gap:8px;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
              Watch Demo
            </span>
          </a>
        </div>

        <!-- Social proof -->
        <div style="display:flex;align-items:center;gap:16px;">
          <div style="display:flex;">
            <?php
            $avatars = [
              'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=40&h=40&fit=crop&crop=face',
              'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=40&h=40&fit=crop&crop=face',
              'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=40&h=40&fit=crop&crop=face',
              'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face',
            ];
            foreach ($avatars as $i => $url):
            ?>
            <img src="<?php echo esc_url($url); ?>" alt="User" style="width:36px;height:36px;border-radius:50%;border:2px solid var(--brand-dark);object-fit:cover;<?php echo $i > 0 ? 'margin-left:-10px;' : ''; ?>"/>
            <?php endforeach; ?>
          </div>
          <div>
            <div style="display:flex;gap:2px;color:#FBBF24;font-size:0.8rem;">★★★★★</div>
            <p style="font-size:0.8rem;color:#94A3B8;">Trusted by <strong style="color:#E2E8F0;">12,000+</strong> teams worldwide</p>
          </div>
        </div>
      </div>

      <!-- Right: Dashboard mockup image -->
      <div style="position:relative;">
        <div style="border-radius:24px;overflow:hidden;border:1px solid var(--brand-border);box-shadow:0 40px 100px rgba(0,0,0,0.5),0 0 0 1px rgba(108,99,255,0.1);">
          <img
            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=520&fit=crop"
            alt="NexusAI Dashboard"
            style="width:100%;display:block;"
          />
          <!-- Overlay badge -->
          <div style="position:absolute;bottom:24px;left:24px;background:rgba(10,14,26,0.85);backdrop-filter:blur(12px);border:1px solid var(--brand-border);border-radius:14px;padding:12px 18px;display:flex;align-items:center;gap:10px;">
            <div style="width:10px;height:10px;border-radius:50%;background:#00D9C0;box-shadow:0 0 10px #00D9C0;"></div>
            <span style="font-size:0.82rem;font-weight:600;color:#E2E8F0;">2,847 automations ran today</span>
          </div>
        </div>
        <!-- Floating stat card -->
        <div style="position:absolute;top:-20px;right:-20px;background:var(--brand-card);border:1px solid var(--brand-border);border-radius:16px;padding:16px 20px;box-shadow:0 20px 40px rgba(0,0,0,0.4);">
          <p style="font-size:0.72rem;color:#94A3B8;font-weight:600;text-transform:uppercase;letter-spacing:.08em;">Time Saved</p>
          <p style="font-size:1.8rem;font-weight:800;background:linear-gradient(135deg,#6C63FF,#00D9C0);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">47 hrs/mo</p>
        </div>
      </div>

    </div>

    <!-- Stats strip -->
    <div style="margin-top:80px;display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:1px;background:var(--brand-border);border-radius:16px;overflow:hidden;border:1px solid var(--brand-border);">
      <?php
      $stats = [
        ['12K+',  'Active Teams'],
        ['99.9%', 'Uptime SLA'],
        ['4.9/5',  'Average Rating'],
        ['2.1B+',  'Tasks Automated'],
      ];
      foreach ($stats as $s):
      ?>
      <div class="stat-item" style="background:var(--brand-card);">
        <p style="font-size:1.9rem;font-weight:800;background:linear-gradient(135deg,#fff,#A78BFA);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo esc_html($s[0]); ?></p>
        <p style="font-size:0.8rem;color:#94A3B8;font-weight:500;margin-top:4px;"><?php echo esc_html($s[1]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════
     FEATURES GRID
══════════════════════════════════════════ -->
<section id="features" style="padding:120px 24px;position:relative;">
  <div class="orb orb-purple" style="width:400px;height:400px;top:50%;left:50%;transform:translate(-50%,-50%);opacity:0.08;"></div>

  <div class="max-w-7xl mx-auto relative z-10">

    <div style="text-align:center;margin-bottom:64px;" class="fade-up">
      <span class="section-label">Why NexusAI</span>
      <h2 style="font-size:clamp(1.9rem,3.5vw,3rem);font-weight:800;letter-spacing:-.03em;margin-bottom:16px;">
        Built for the way<br/><span class="gradient-text">modern teams work</span>
      </h2>
      <p style="color:#94A3B8;font-size:1.05rem;max-width:560px;margin:0 auto;line-height:1.7;">
        Every feature is designed to help you do more with less — from intelligent routing to real-time collaboration.
      </p>
    </div>

    <?php
    $features = [
      [
        'icon'  => '⚡',
        'color' => '#6C63FF',
        'bg'    => 'rgba(108,99,255,0.12)',
        'title' => 'Lightning Automation',
        'desc'  => 'Build multi-step workflows in minutes with our visual drag-and-drop builder. No code, no friction, just results.',
        'img'   => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=220&fit=crop',
      ],
      [
        'icon'  => '🧠',
        'color' => '#00D9C0',
        'bg'    => 'rgba(0,217,192,0.12)',
        'title' => 'AI-Powered Decisions',
        'desc'  => 'Let machine learning route tasks, predict outcomes, and surface insights before you even think to ask.',
        'img'   => 'https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=400&h=220&fit=crop',
      ],
      [
        'icon'  => '🔗',
        'color' => '#F59E0B',
        'bg'    => 'rgba(245,158,11,0.12)',
        'title' => '500+ Integrations',
        'desc'  => 'Connect Slack, Salesforce, Notion, GitHub, and hundreds more out of the box — or build your own via API.',
        'img'   => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=220&fit=crop',
      ],
      [
        'icon'  => '🛡️',
        'color' => '#EC4899',
        'bg'    => 'rgba(236,72,153,0.12)',
        'title' => 'Enterprise Security',
        'desc'  => 'SOC 2 Type II certified. End-to-end encryption, SSO, RBAC, and audit logs built in from day one.',
        'img'   => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=220&fit=crop',
      ],
      [
        'icon'  => '📊',
        'color' => '#3B82F6',
        'bg'    => 'rgba(59,130,246,0.12)',
        'title' => 'Real-Time Analytics',
        'desc'  => 'Track every automation with live dashboards. Drill into performance, identify bottlenecks, and iterate fast.',
        'img'   => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=400&h=220&fit=crop',
      ],
      [
        'icon'  => '🤝',
        'color' => '#10B981',
        'bg'    => 'rgba(16,185,129,0.12)',
        'title' => 'Team Collaboration',
        'desc'  => 'Share workflows, leave comments, and co-edit in real-time. Your entire team, always on the same page.',
        'img'   => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=220&fit=crop',
      ],
    ];
    ?>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;">
      <?php foreach ($features as $f): ?>
      <div class="feature-card fade-up">
        <img
          src="<?php echo esc_url($f['img']); ?>"
          alt="<?php echo esc_attr($f['title']); ?>"
          style="width:100%;height:180px;object-fit:cover;border-radius:12px;margin-bottom:24px;opacity:0.8;"
        />
        <div class="icon-wrap" style="background:<?php echo esc_attr($f['bg']); ?>;color:<?php echo esc_attr($f['color']); ?>;">
          <?php echo $f['icon']; ?>
        </div>
        <h3 style="font-size:1.15rem;font-weight:700;color:#F1F5F9;margin-bottom:10px;"><?php echo esc_html($f['title']); ?></h3>
        <p style="color:#94A3B8;font-size:0.9rem;line-height:1.7;"><?php echo esc_html($f['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<div class="divider"></div>


<!-- ══════════════════════════════════════════
     PRICING TABLE
══════════════════════════════════════════ -->
<section id="pricing" style="padding:120px 24px;position:relative;">
  <div class="orb orb-teal" style="width:500px;height:500px;bottom:-100px;right:-100px;opacity:0.1;"></div>

  <div class="max-w-7xl mx-auto relative z-10">

    <div style="text-align:center;margin-bottom:48px;" class="fade-up">
      <span class="section-label">Pricing</span>
      <h2 style="font-size:clamp(1.9rem,3.5vw,3rem);font-weight:800;letter-spacing:-.03em;margin-bottom:16px;">
        Simple, transparent<br/><span class="gradient-text">pricing for everyone</span>
      </h2>
      <p style="color:#94A3B8;font-size:1.05rem;max-width:480px;margin:0 auto 32px;">
        Start free. Scale as you grow. Cancel anytime with no hidden fees.
      </p>

      <!-- Billing toggle -->
      <div class="toggle-wrap">
        <button class="toggle-btn active" id="monthly-btn" onclick="setBilling('monthly')">Monthly</button>
        <button class="toggle-btn" id="annual-btn" onclick="setBilling('annual')">
          Annual
          <span style="margin-left:6px;background:rgba(0,217,192,0.15);color:#00D9C0;font-size:0.65rem;padding:2px 8px;border-radius:100px;font-weight:700;">SAVE 25%</span>
        </button>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;align-items:start;" class="fade-up">

      <?php
      $plans = [
        [
          'name'    => 'Starter',
          'popular' => false,
          'color'   => '#6C63FF',
          'price_m' => '0',
          'price_a' => '0',
          'period'  => 'Free forever',
          'desc'    => 'Perfect for individuals and small projects.',
          'features'=> [
            '5 active workflows',
            '1,000 tasks / month',
            '10 integrations',
            'Email support',
            'Basic analytics',
          ],
          'cta'     => 'Get Started Free',
          'cta_class' => 'btn-outline',
        ],
        [
          'name'    => 'Pro',
          'popular' => true,
          'color'   => '#6C63FF',
          'price_m' => '49',
          'price_a' => '37',
          'period'  => 'per seat / month',
          'desc'    => 'Best for growing teams that need more power.',
          'features'=> [
            'Unlimited workflows',
            '100K tasks / month',
            '200+ integrations',
            'Priority support',
            'Advanced analytics',
            'Custom webhooks',
            'Team collaboration',
          ],
          'cta'     => 'Start Free Trial',
          'cta_class' => 'btn-primary',
        ],
        [
          'name'    => 'Enterprise',
          'popular' => false,
          'color'   => '#00D9C0',
          'price_m' => '149',
          'price_a' => '112',
          'period'  => 'per seat / month',
          'desc'    => 'For large organizations with mission-critical needs.',
          'features'=> [
            'Unlimited everything',
            'Custom task limits',
            '500+ integrations',
            'Dedicated CSM',
            'SLA guarantee',
            'SSO & RBAC',
            'Audit logs',
            'On-premise option',
          ],
          'cta'     => 'Contact Sales',
          'cta_class' => 'btn-outline',
        ],
      ];
      ?>

      <?php foreach ($plans as $plan): ?>
      <div class="pricing-card <?php echo $plan['popular'] ? 'popular' : ''; ?>">
        <?php if ($plan['popular']): ?>
        <div class="popular-badge">⚡ Most Popular</div>
        <?php endif; ?>

        <p style="font-size:0.8rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:<?php echo esc_attr($plan['color']); ?>;margin-bottom:12px;">
          <?php echo esc_html($plan['name']); ?>
        </p>

        <div style="margin-bottom:8px;display:flex;align-items:flex-end;gap:4px;">
          <span style="font-size:1.4rem;font-weight:700;color:#64748B;align-self:flex-start;margin-top:8px;">$</span>
          <span class="price-amount monthly-price" data-monthly="<?php echo esc_attr($plan['price_m']); ?>" data-annual="<?php echo esc_attr($plan['price_a']); ?>" style="color:#F1F5F9;">
            <?php echo esc_html($plan['price_m']); ?>
          </span>
        </div>
        <p style="font-size:0.82rem;color:#64748B;margin-bottom:8px;"><?php echo esc_html($plan['period']); ?></p>
        <p style="font-size:0.88rem;color:#94A3B8;margin-bottom:28px;line-height:1.5;"><?php echo esc_html($plan['desc']); ?></p>

        <div style="height:1px;background:var(--brand-border);margin-bottom:24px;"></div>

        <div style="margin-bottom:32px;">
          <?php foreach ($plan['features'] as $feat): ?>
          <div class="feature-check">
            <div class="check-icon">✓</div>
            <?php echo esc_html($feat); ?>
          </div>
          <?php endforeach; ?>
        </div>

        <a href="#" class="<?php echo esc_attr($plan['cta_class']); ?>" style="width:100%;text-align:center;display:block;">
          <?php echo esc_html($plan['cta']); ?>
        </a>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Money-back guarantee -->
    <p style="text-align:center;color:#64748B;font-size:0.82rem;margin-top:32px;" class="fade-up">
      🔒 14-day money-back guarantee &nbsp;·&nbsp; No credit card required for free tier &nbsp;·&nbsp; Cancel anytime
    </p>

  </div>
</section>


<div class="divider"></div>


<!-- ══════════════════════════════════════════
     FOOTER
══════════════════════════════════════════ -->
<footer style="padding:64px 24px 32px;">
  <div class="max-w-7xl mx-auto">

    <div style="display:grid;grid-template-columns:2fr repeat(3,1fr);gap:48px;margin-bottom:56px;" class="lg-grid">

      <!-- Brand col -->
      <div>
        <div style="display:flex;align-items:center;gap:8px;margin-bottom:16px;">
          <div style="width:32px;height:32px;border-radius:9px;background:linear-gradient(135deg,#6C63FF,#00D9C0);display:flex;align-items:center;justify-content:center;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <span style="font-size:1.05rem;font-weight:800;color:#E2E8F0;">Nexus<span style="color:#6C63FF;">AI</span></span>
        </div>
        <p style="color:#64748B;font-size:0.875rem;line-height:1.7;max-width:280px;margin-bottom:24px;">
          The AI automation platform that helps teams eliminate busywork and focus on what matters most.
        </p>
        <div style="display:flex;gap:12px;">
          <?php
          $socials = [
            ['Twitter / X',  'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.748l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z'],
            ['GitHub',       'M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.749 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2z'],
            ['LinkedIn',     'M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z M4 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'],
          ];
          foreach ($socials as $social):
          ?>
          <a href="#" style="width:36px;height:36px;border-radius:8px;background:var(--brand-card);border:1px solid var(--brand-border);display:flex;align-items:center;justify-content:center;transition:border-color .2s;" title="<?php echo esc_attr($social[0]); ?>">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#94A3B8"><path d="<?php echo esc_attr($social[1]); ?>"/></svg>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <?php
      $footer_links = [
        'Product'  => ['Features', 'Integrations', 'Changelog', 'Roadmap', 'API Docs'],
        'Company'  => ['About', 'Blog', 'Careers', 'Press', 'Contact'],
        'Legal'    => ['Privacy Policy', 'Terms of Service', 'Security', 'GDPR', 'Cookie Policy'],
      ];
      foreach ($footer_links as $col => $links):
      ?>
      <div>
        <p style="font-size:0.8rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:#E2E8F0;margin-bottom:16px;"><?php echo esc_html($col); ?></p>
        <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;">
          <?php foreach ($links as $link): ?>
          <li><a href="#" class="footer-link"><?php echo esc_html($link); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Bottom bar -->
    <div style="padding-top:32px;border-top:1px solid var(--brand-border);display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:16px;">
      <p style="font-size:0.8rem;color:#475569;">
        &copy; <?php echo date('Y'); ?> NexusAI, Inc. All rights reserved.
      </p>
      <div style="display:flex;align-items:center;gap:6px;">
        <div style="width:8px;height:8px;border-radius:50%;background:#10B981;box-shadow:0 0 8px #10B981;"></div>
        <span style="font-size:0.8rem;color:#64748B;">All systems operational</span>
      </div>
    </div>

  </div>
</footer>


<!-- ══════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════ -->
<script>
  /* ── Billing toggle ── */
  function setBilling(mode) {
    const monthlyBtn = document.getElementById('monthly-btn');
    const annualBtn  = document.getElementById('annual-btn');
    const prices     = document.querySelectorAll('.monthly-price');

    if (mode === 'annual') {
      annualBtn.classList.add('active');
      monthlyBtn.classList.remove('active');
      prices.forEach(el => {
        const val = el.dataset.annual;
        el.textContent = val;
      });
    } else {
      monthlyBtn.classList.add('active');
      annualBtn.classList.remove('active');
      prices.forEach(el => {
        const val = el.dataset.monthly;
        el.textContent = val;
      });
    }
  }

  /* ── Scroll fade-in ── */
  const observer = new IntersectionObserver(
    entries => entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    }),
    { threshold: 0.12 }
  );
  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

  /* ── Smooth scroll for nav links ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>

</body>
</html>
<?php get_footer(); ?>
