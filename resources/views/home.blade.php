<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Track Tech Solution | Next-Gen Garment Manufacturing Software</title>
  <meta name="description"
    content="Track materials, orders, production and quality in one clear view, from the first roll of fabric to the final shipment.">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/track-tech-logo.png') }}">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Space Grotesk', 'sans-serif'],
          },
          colors: {
            brand: {
              orange: '#ea580c',
              red: '#dc2626',
              amber: '#d97706',
              light: '#faf7f4',
              card: 'rgba(255, 255, 255, 0.80)',
            }
          }
        }
      }
    }
  </script>

  <!-- Custom Cyber-Glass Styling -->
  <style>
    :root {
      color-scheme: light;
    }

    body {
      background: linear-gradient(135deg, #fdf8f3 0%, #faf4ee 40%, #fef9f5 100%);
      color: #1c1917;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      margin: 0;
    }

    h1, h2, h3, h4, h5, h6, .font-heading {
      font-family: 'Space Grotesk', sans-serif;
    }

    /* Ambient Glow Backgrounds */
    .cyber-bg-glow {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 0;
      background: 
        radial-gradient(circle at 15% 20%, rgba(251, 113, 33, 0.10) 0%, transparent 45%),
        radial-gradient(circle at 85% 65%, rgba(239, 68, 68, 0.07) 0%, transparent 50%),
        radial-gradient(circle at 50% 90%, rgba(249, 115, 22, 0.06) 0%, transparent 40%);
    }

    /* Continuous 3D Apparel Background Video */
    .ambient-video-canvas {
      position: fixed;
      inset: 0;
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      opacity: 0.10;
      pointer-events: none;
      z-index: 0;
      filter: contrast(1.15) saturate(1.2);
    }

    /* Glassmorphic Cards */
    .glass-card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 1.5rem;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-card:hover {
      border-color: rgba(234, 88, 12, 0.50);
      box-shadow: 0 20px 40px -15px rgba(234, 88, 12, 0.18);
      transform: translateY(-3px);
    }

    /* Floating Pill Navbar */
    .floating-nav {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      border: 1px solid rgba(0, 0, 0, 0.10);
      box-shadow: 0 8px 32px -8px rgba(0, 0, 0, 0.15), 0 0 20px rgba(234, 88, 12, 0.08);
    }

    /* Custom Cursor Follower Glow */
    .cursor-glow {
      position: fixed;
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(234, 88, 12, 0.10), transparent 70%);
      border-radius: 50%;
      pointer-events: none;
      transform: translate(-50%, -50%);
      z-index: 1;
      transition: transform 0.12s ease-out;
    }

    /* Marquee Animation */
    @keyframes marquee {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-50%); }
    }

    .marquee-track {
      display: flex;
      width: max-content;
      animation: marquee 32s linear infinite;
    }

    .marquee-track:hover {
      animation-play-state: paused;
    }

    /* Scanline effect for Hero Showcase */
    .cyber-frame {
      position: relative;
      border: 1px solid rgba(234, 88, 12, 0.30);
      box-shadow: 0 0 35px rgba(234, 88, 12, 0.12), inset 0 0 30px rgba(234, 88, 12, 0.04);
    }

    /* Smooth Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #f5f0eb;
    }
    ::-webkit-scrollbar-thumb {
      background: #d4c4b0;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #f97316;
    }
  </style>

  <!-- Exact website-tts.vercel.app Product Experience Styling -->
  <style>
@media(max-width:720px){.leadership-grid{grid-template-columns:1fr;gap:14px;}.leader-profile{padding:22px;}.leader-bio{min-height:0;}}
.product-experience{display:block;}
.product-detail{display:grid;grid-template-columns:minmax(230px,0.82fr) minmax(290px,1.18fr);min-width:0;overflow:hidden;border:1px solid rgba(204,226,235,0.28);border-radius:8px;background:rgba(10,30,43,0.74);backdrop-filter:blur(8px);}
.product-detail.is-switching .product-copy>*{animation:product-copy-in .42s ease both;}
.product-copy{display:flex;flex-direction:column;align-items:flex-start;padding:clamp(22px,3vw,36px);}
.product-kicker{margin:0 0 14px;color:var(--cyan);font-size:0.72rem;font-weight:700;}
.product-kicker span{padding:0 5px;color:#829BA4;}
.product-copy h3{margin:0 0 14px;color:#FFFFFF;font-size:clamp(1.55rem,2.4vw,2rem);line-height:1.12;}
.product-description{margin:0;color:#C3D4D8;font-size:0.94rem;line-height:1.65;}
.product-stages{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));width:100%;margin:28px 0 26px;padding:16px 0 0;border-top:1px solid rgba(204,226,235,0.2);list-style:none;}
.product-stages li{display:flex;flex-direction:column;gap:4px;min-width:0;}
.product-stages li span{color:#77E0CC;font-size:0.68rem;font-weight:700;}
.product-stages li strong{color:#E7F0F2;font-size:0.75rem;font-weight:600;}
.product-cta{margin-top:auto;padding:11px 18px;font-size:0.88rem;}
.product-visual{display:grid;grid-template-columns:1fr 1fr;min-height:390px;overflow:hidden;background:#102635;isolation:isolate;}
.product-visual[data-product="fabric-inventory"],.product-visual[data-product="cutting-digitalization"],.product-visual[data-product="tracking"],.product-visual[data-product="quality"],.product-visual[data-product="laundry"],.product-visual[data-product="jig"],.product-visual[data-product="planwel"],.product-visual[data-product="mtrak"],.product-visual[data-product="shrinkage"],.product-visual[data-product="sewiot"],.product-visual[data-product="sewlot"]{grid-template-columns:1fr;background:transparent;}
.product-visual[data-product="fabric-inventory"] .product-photo,.product-visual[data-product="cutting-digitalization"] .product-photo,.product-visual[data-product="tracking"] .product-photo,.product-visual[data-product="quality"] .product-photo,.product-visual[data-product="laundry"] .product-photo,.product-visual[data-product="jig"] .product-photo,.product-visual[data-product="planwel"] .product-photo,.product-visual[data-product="mtrak"] .product-photo,.product-visual[data-product="shrinkage"] .product-photo,.product-visual[data-product="sewiot"] .product-photo,.product-visual[data-product="sewlot"] .product-photo{min-height:390px;background:transparent;}
.product-visual[data-product="fabric-inventory"] .product-animation-stage,.product-visual[data-product="cutting-digitalization"] .product-animation-stage,.product-visual[data-product="tracking"] .product-animation-stage,.product-visual[data-product="quality"] .product-animation-stage,.product-visual[data-product="laundry"] .product-animation-stage,.product-visual[data-product="jig"] .product-animation-stage,.product-visual[data-product="planwel"] .product-animation-stage,.product-visual[data-product="mtrak"] .product-animation-stage,.product-visual[data-product="shrinkage"] .product-animation-stage,.product-visual[data-product="sewiot"] .product-animation-stage,.product-visual[data-product="sewlot"] .product-animation-stage{display:none;}
.product-photo{position:relative;min-width:0;min-height:390px;overflow:hidden;background:#DCE7E8;}
.product-photo>img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;animation:product-image-in .7s ease both;}
.product-visual[data-product="tracking"] .product-photo>img,.product-visual[data-product="quality"] .product-photo>img,.product-visual[data-product="laundry"] .product-photo>img,.product-visual[data-product="planwel"] .product-photo>img,.product-visual[data-product="mtrak"] .product-photo>img,.product-visual[data-product="sewiot"] .product-photo>img,.product-visual[data-product="sewlot"] .product-photo>img{object-fit:cover;object-position:center top;}
.product-visual[data-product="jig"] .product-photo>img,.product-visual[data-product="shrinkage"] .product-photo>img{object-fit:contain;object-position:center center;}
@media(min-width:721px){
  .product-detail[data-product="jig"],.product-detail[data-product="shrinkage"],.product-detail:has(.product-visual[data-product="jig"]),.product-detail:has(.product-visual[data-product="shrinkage"]){grid-template-columns:minmax(0,1.35fr) minmax(300px,390px);}
  .product-detail[data-product="jig"] .product-copy,.product-detail[data-product="shrinkage"] .product-copy{width:100%;max-width:100%;}
  .product-detail[data-product="jig"] .product-description,.product-detail[data-product="shrinkage"] .product-description{width:100%;max-width:100%;}
}
.product-animation-stage{position:relative;min-width:0;min-height:390px;overflow:hidden;background:radial-gradient(ellipse at 50% 28%,rgba(47,232,200,0.13),transparent 48%),linear-gradient(145deg,#183B4C,#0A1E2B);}
.visual-widget{position:absolute;inset:0;z-index:2;display:none;}
.product-visual[data-product="quality"] .visual-widget--quality,.product-visual[data-product="tracking"] .visual-widget--tracking,.product-visual[data-product="maintenance"] .visual-widget--maintenance,.product-visual[data-product="fabric"] .visual-widget--fabric,.product-visual[data-product="planning"] .visual-widget--planning,.product-visual[data-product="warehouse"] .visual-widget--warehouse,.product-visual[data-product="trakwel"] .visual-widget--trakwel{display:block;}
.quality-frame{position:absolute;top:19%;left:16%;width:68%;height:47%;border:1px solid rgba(126,255,226,0.75);box-shadow:0 0 0 999px rgba(8,35,38,0.08);}
.quality-frame i{position:absolute;width:14px;height:14px;border-color:#78F2D5;border-style:solid;}
.quality-frame i:nth-child(1){top:-2px;left:-2px;border-width:2px 0 0 2px;}
.quality-frame i:nth-child(2){top:-2px;right:-2px;border-width:2px 2px 0 0;}
.quality-frame i:nth-child(3){bottom:-2px;left:-2px;border-width:0 0 2px 2px;}
.quality-frame i:nth-child(4){right:-2px;bottom:-2px;border-width:0 2px 2px 0;}
.quality-target{position:absolute;width:24px;height:24px;border:1px solid #7DF4D8;border-radius:50%;box-shadow:0 0 0 5px rgba(47,232,200,0.14);animation:target-pulse 1.8s ease-in-out infinite;}
.quality-target--one{top:27%;left:32%;}
.quality-target--two{right:24%;bottom:20%;animation-delay:.7s;}
.quality-scan-line{position:absolute;top:0;left:0;width:100%;height:2px;background:#8DFFE6;box-shadow:0 0 15px 3px rgba(47,232,200,0.7);animation:scan-sweep 3s ease-in-out infinite;}
.quality-callout{position:absolute;padding:7px 9px;border:1px solid rgba(141,255,230,0.6);border-radius:3px;background:rgba(7,27,34,0.82);color:#E8FFFA;font-size:0.68rem;}
.quality-callout b{margin-left:6px;color:#84F3D9;font-size:0.62rem;}
.quality-callout--one{top:31%;left:7%;}
.quality-callout--two{right:7%;bottom:28%;}
.tracking-route{position:absolute;top:48%;left:12%;display:flex;width:76%;align-items:center;justify-content:space-between;}
.route-line{position:absolute;left:0;right:0;height:2px;background:rgba(255,255,255,0.48);}
.tracking-route i{z-index:1;display:grid;place-items:center;width:28px;height:28px;border:1px solid #8DFFE6;border-radius:50%;background:#153B4A;color:#FFFFFF;font-size:0.62rem;font-style:normal;}
.route-runner{position:absolute;z-index:2;left:0;width:9px;height:9px;border-radius:50%;background:#8DFFE6;box-shadow:0 0 14px #8DFFE6;animation:route-travel 3s ease-in-out infinite;}
.tracking-labels{position:absolute;top:57%;left:12%;display:flex;width:76%;justify-content:space-between;color:#FFFFFF;font-size:0.62rem;text-shadow:0 1px 4px #071820;}
.machine-gauge{position:absolute;top:22%;left:50%;display:grid;width:142px;height:142px;place-items:center;transform:translateX(-50%);border-radius:50%;background:rgba(7,26,36,0.72);}
.gauge-ring{position:absolute;inset:10px;border:2px solid rgba(141,255,230,0.35);border-top-color:#8DFFE6;border-right-color:#8DFFE6;border-radius:50%;animation:gauge-rotate 4s linear infinite;}
.gauge-needle{position:absolute;top:28px;left:calc(50% - 1px);width:2px;height:44px;transform-origin:bottom center;transform:rotate(34deg);background:#FFFFFF;box-shadow:0 0 8px #8DFFE6;}
.machine-gauge b{margin-top:42px;color:#8DFFE6;font-size:1.05rem;}
.fabric-marker{position:absolute;top:23%;left:13%;display:flex;width:74%;height:42%;flex-direction:column;justify-content:space-evenly;transform:rotate(-4deg);}
.fabric-marker span{height:13%;border:1px solid rgba(141,255,230,0.8);background:rgba(47,232,200,0.12);animation:marker-shift 3s ease-in-out infinite alternate;}
.fabric-marker span:nth-child(2){width:78%;margin-left:10%;animation-delay:.25s;}
.fabric-marker span:nth-child(3){width:90%;margin-left:4%;animation-delay:.5s;}
.fabric-marker span:nth-child(4){width:67%;margin-left:17%;animation-delay:.75s;}
.fabric-marker span:nth-child(5){width:82%;margin-left:8%;animation-delay:1s;}
.fabric-roll{position:absolute;right:12%;bottom:25%;display:flex;gap:7px;}
.fabric-roll i{width:24px;height:24px;border:2px solid #C5F8ED;border-radius:50%;background:rgba(7,28,37,0.7);box-shadow:inset 0 0 0 5px rgba(47,232,200,0.16);}
.planning-board{position:absolute;top:23%;left:13%;display:grid;width:74%;gap:13px;}
.planning-board span{height:20px;overflow:hidden;border:1px solid rgba(255,255,255,0.42);border-radius:2px;background:rgba(9,28,38,0.66);}
.planning-board i{display:block;width:var(--plan-width);height:100%;transform:scaleX(0);transform-origin:left;background:linear-gradient(90deg,#1BA894,#8DFFE6);animation:plan-fill .9s ease forwards;}
.planning-board span:nth-child(1){--plan-width:78%;}.planning-board span:nth-child(2){--plan-width:55%;}.planning-board span:nth-child(3){--plan-width:88%;}.planning-board span:nth-child(4){--plan-width:64%;}
.planning-board span:nth-child(2) i{animation-delay:.12s;}.planning-board span:nth-child(3) i{animation-delay:.24s;}.planning-board span:nth-child(4) i{animation-delay:.36s;}
.warehouse-rack{position:absolute;top:22%;left:20%;display:grid;width:60%;height:45%;grid-template-columns:repeat(3,1fr);grid-template-rows:repeat(3,1fr);gap:7px;padding:9px;border:2px solid rgba(255,255,255,0.6);background:rgba(8,28,39,0.62);}
.warehouse-rack i{border:1px solid rgba(141,255,230,0.74);background:linear-gradient(135deg,rgba(47,232,200,0.36),rgba(15,49,65,0.76));animation:stock-pulse 2.8s ease-in-out infinite;}
.warehouse-rack i:nth-child(3n){animation-delay:.4s;}.warehouse-rack i:nth-child(3n + 1){animation-delay:.8s;}
.warehouse-beacon{position:absolute;top:33%;left:34%;width:18%;height:17%;border:2px solid #8DFFE6;box-shadow:0 0 18px rgba(47,232,200,0.7);animation:beacon-scan 3s ease-in-out infinite alternate;}
.mes-header,.sewlot-header{position:absolute;top:15%;left:10%;display:flex;width:80%;justify-content:space-between;color:#B9CED4;font-size:0.62rem;font-weight:700;letter-spacing:.08em;}
.mes-header b,.sewlot-header b{color:#8DFFE6;font-size:0.58rem;}
.mes-metrics{position:absolute;top:28%;left:10%;display:grid;width:80%;grid-template-columns:1fr 1fr;gap:10px;}
.mes-metrics>div{display:flex;min-height:94px;flex-direction:column;justify-content:center;padding:10px;border:1px solid rgba(141,255,230,0.3);background:rgba(7,26,36,0.62);}
.mes-metrics span,.mes-order>span{color:#AFC4CA;font-size:0.55rem;font-weight:700;letter-spacing:.06em;}
.mes-metrics strong{margin:4px 0;color:#E8FFFA;font-size:1.32rem;line-height:1;}
.mes-metrics small{color:#8DFFE6;font-size:0.57rem;}
.mes-order{position:absolute;top:62%;left:10%;display:grid;width:80%;grid-template-columns:1fr auto;gap:8px;align-items:center;}
.mes-order strong{color:#8DFFE6;font-size:0.66rem;}
.mes-order i{grid-column:1 / -1;height:6px;overflow:hidden;background:rgba(255,255,255,0.18);}
.mes-order i::before{display:block;width:78%;height:100%;background:#43DCC1;content:"";}
.sewlot-header{top:19%;}
.sewlot-stations{position:absolute;top:37%;left:9%;display:grid;width:82%;grid-template-columns:repeat(3,minmax(0,1fr));}
.sewlot-stations::before{position:absolute;top:17px;left:13%;width:74%;height:1px;background:rgba(141,255,230,0.65);content:"";}
.sewlot-stations>div{z-index:1;display:flex;min-width:0;flex-direction:column;align-items:center;gap:7px;}
.sewlot-stations i{display:grid;width:34px;height:34px;place-items:center;border:1px solid #8DFFE6;border-radius:50%;background:#123744;color:#FFFFFF;font-size:0.64rem;font-style:normal;}
.sewlot-stations b{color:#FFFFFF;font-size:0.5rem;letter-spacing:.04em;}
.sewlot-stations span{color:#8DFFE6;font-size:0.48rem;font-weight:700;}
.sewlot-metrics{position:absolute;top:63%;left:10%;display:grid;width:80%;grid-template-columns:1fr 1fr;gap:8px;}
.sewlot-metrics span{padding:10px 6px;border:1px solid rgba(141,255,230,0.28);background:rgba(7,26,36,0.62);color:#B9CED4;text-align:center;font-size:0.58rem;}
.sewlot-metrics b{display:block;margin-bottom:3px;color:#8DFFE6;font-size:0.95rem;}
.visual-status{position:absolute;right:16px;bottom:16px;z-index:3;display:flex;align-items:center;gap:9px;max-width:calc(100% - 32px);padding:10px 12px;border:1px solid rgba(255,255,255,0.3);border-radius:4px;background:rgba(7,24,34,0.84);backdrop-filter:blur(6px);}
.visual-status span{color:#C3D4D8;font-size:0.68rem;}
.visual-status strong{color:#8DFFE6;font-size:0.68rem;white-space:nowrap;}
@keyframes product-copy-in{from{opacity:0;transform:translateY(10px);}to{opacity:1;transform:translateY(0);}}
@keyframes product-image-in{from{opacity:.45;transform:scale(1.04);}to{opacity:1;transform:scale(1);}}
@keyframes scan-sweep{0%,100%{top:0;opacity:.5;}50%{top:100%;opacity:1;}}
@keyframes target-pulse{0%,100%{box-shadow:0 0 0 3px rgba(47,232,200,0.12);}50%{box-shadow:0 0 0 9px rgba(47,232,200,0.2);}}
@keyframes route-travel{0%{transform:translateX(0);}100%{transform:translateX(calc(100% - 9px));}}
@keyframes gauge-rotate{to{transform:rotate(360deg);}}
@keyframes marker-shift{to{transform:translateX(8px);}}
@keyframes plan-fill{to{transform:scaleX(1);}}
@keyframes stock-pulse{50%{background:linear-gradient(135deg,rgba(47,232,200,0.7),rgba(15,49,65,0.8));}}
@keyframes beacon-scan{to{transform:translate(125%,85%);}}
@media(max-width:720px){.product-detail{grid-template-columns:1fr;}.product-visual{grid-template-columns:1fr;}.product-photo{min-height:280px;}.product-animation-stage{min-height:330px;}.product-copy{padding:24px;}}
@media(max-width:420px){.product-photo{min-height:230px;}.product-animation-stage{min-height:280px;}.quality-callout{font-size:0.58rem;padding:5px 6px;}}
@media(prefers-reduced-motion:reduce){.product-detail.is-switching .product-copy>*,.product-photo>img,.quality-target,.quality-scan-line,.route-runner,.gauge-ring,.fabric-marker span,.planning-board i,.warehouse-rack i,.warehouse-beacon{animation:none;}}

/* CLIENTS */
.clients-section{position:relative;overflow:hidden;background:var(--navy);color:var(--white);}
.clients-section>.wrap{position:relative;z-index:2;}
.clients-intro{max-width:760px;margin-bottom:30px;}


/* Product Quick Selector Tabs */
.no-scrollbar::-webkit-scrollbar { display: none; }
.no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
.product-choice-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 16px;
  border-radius: 9999px;
  font-size: 0.82rem;
  font-weight: 600;
  white-space: nowrap;
  background: rgba(255, 255, 255, 0.85);
  border: 1px solid rgba(0, 0, 0, 0.08);
  color: #44403c;
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 1px 3px rgba(0,0,0,0.04);
}
.product-choice-btn:hover {
  background: #fff7ed;
  color: #ea580c;
  border-color: #fdba74;
}
.product-choice-btn.is-selected {
  background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
  color: #ffffff;
  border-color: transparent;
  box-shadow: 0 4px 15px rgba(234, 88, 12, 0.3);
}

/* Product Detail Responsive adjustments */
.product-detail {
  background: rgba(10, 30, 43, 0.88);
  border-radius: 1.5rem;
  box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.25);
  border: 1px solid rgba(255, 255, 255, 0.1);
}
@media (max-width: 860px) {
  .product-detail {
    grid-template-columns: 1fr;
  }
}
.btn-primary.product-cta {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 24px;
  border-radius: 9999px;
  background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
  color: #ffffff;
  font-weight: 700;
  font-size: 0.88rem;
  text-decoration: none;
  box-shadow: 0 4px 15px rgba(234, 88, 12, 0.28);
  transition: all 0.2s ease;
}
.btn-primary.product-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(234, 88, 12, 0.4);
}

  </style>

</head>

<body class="relative min-h-screen">

  <!-- Interactive Cursor Glow -->
  <div class="cursor-glow hidden md:block" id="cursorGlow"></div>

  <!-- Ambient Video Background -->
  <video class="ambient-video-canvas" autoplay muted loop playsinline poster="{{ asset('assets/img/factory-aerial.jpg') }}">
    <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
    <source src="{{ asset('videos/apparel-3d-loop.mp4') }}" type="video/mp4">
  </video>

  <!-- Ambient Glow Gradients -->
  <div class="cyber-bg-glow"></div>

  <!-- ═══════════════════════════════════════════════════════════════════
       1. FLOATING PILL NAVBAR (Modern 2026 SaaS Aesthetic)
  ═══════════════════════════════════════════════════════════════════ -->
  <div class="fixed top-5 left-0 right-0 z-50 flex justify-center px-4">
    <nav class="floating-nav w-full max-w-6xl rounded-full px-4 sm:px-6 py-3 flex items-center justify-between">
      
      <!-- Brand Logo -->
      <a href="#about" class="flex items-center gap-2.5 group py-0.5">
        <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Track Tech Solution Logo" class="h-9 sm:h-10 w-auto object-contain transition-transform group-hover:scale-105">
        <span class="font-heading font-extrabold text-xl sm:text-2xl tracking-tight text-stone-900 group-hover:opacity-90 transition">
          Track Tech <span class="text-orange-500">Solution</span>
        </span>
      </a>

      <!-- Desktop Nav Items -->
      <div class="hidden md:flex items-center gap-1 xl:gap-3 text-sm md:text-[15px] font-semibold text-stone-700">
        <a href="#about" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">About</a>
        <a href="#products" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Products</a>
        <a href="#leadership" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Leadership</a>
        <a href="#contact" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Contact</a>
      </div>

      <!-- Action Button -->
      <div class="flex items-center gap-2">
        <a href="#contact"
          class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-400 hover:to-red-500 text-white text-sm sm:text-[15px] font-bold px-6 py-2.5 sm:py-3 rounded-full shadow-lg shadow-orange-500/25 hover:shadow-orange-400/40 hover:scale-105 transition-all">
          Experience Live Demo
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobileNavBtn" class="md:hidden p-2 text-stone-600 hover:text-stone-900" aria-label="Toggle Navigation">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </nav>
  </div>

  <!-- Mobile Dropdown Drawer -->
  <div id="mobileDrawer" class="fixed inset-x-4 top-20 z-40 hidden md:hidden glass-card p-6 border border-stone-200 shadow-2xl space-y-3">
    <a href="#about" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">About</a>
    <a href="#products" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Products Studio</a>
    <a href="#leadership" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Leadership Team</a>
    <a href="#contact" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600">Contact Us</a>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════════
       2. HERO SECTION (High-Tech 3D Apparel Centerpiece)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="about" class="relative pt-36 pb-20 lg:pt-44 lg:pb-28 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-12">
      
      <!-- Headline & Introduction -->
      <div class="text-center space-y-6 max-w-4xl mx-auto">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-orange-50 border border-orange-400/50 text-orange-600 backdrop-blur-md shadow-lg shadow-orange-500/10">
          <span class="w-2 h-2 rounded-full bg-orange-400 animate-ping"></span>
          Next-Gen Garment Manufacturing Intelligence
        </div>

        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-stone-900 font-heading">
          A Clearer Way To <br class="hidden sm:inline" />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-red-400 to-amber-500">Run Your Garment Factory</span>
        </h1>

        <p class="text-base sm:text-xl text-stone-600 leading-relaxed max-w-2xl mx-auto">
          From the first roll of fabric to the final shipment, Track Tech helps your team see what is happening in real time, fix bottlenecks sooner and keep every order moving.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-3">
          <a href="#contact"
            class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-orange-500 via-red-500 to-amber-600 hover:from-orange-400 hover:to-red-500 text-white font-bold text-sm shadow-xl shadow-orange-500/30 hover:scale-105 transition-all text-center">
            Schedule Factory Walkthrough
          </a>
          <a href="#products"
            class="w-full sm:w-auto px-7 py-4 rounded-full bg-white/80 hover:bg-orange-50 text-stone-700 hover:text-stone-900 font-semibold text-sm border border-stone-200 hover:border-orange-500 transition-all text-center flex items-center justify-center gap-2">
            <span>Explore Product Studio</span>
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </a>
        </div>
      </div>

      <!-- 3D Apparel Video Showcase Screen -->
      <div class="cyber-frame rounded-3xl overflow-hidden bg-white/90 backdrop-blur-2xl shadow-2xl relative group">
        <!-- Top Tech Bar -->
        <div class="bg-white/90 px-5 py-3 border-b border-stone-200 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
            <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
            <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
            <span class="ml-2 font-mono text-[11px] text-stone-500">track-tech-os.live/telemetry/3d-apparel-simulation</span>
          </div>
          <div class="flex items-center gap-2 text-orange-400 font-mono text-[11px]">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span>FEED ONLINE • 53.2s DYNAMIC LOOP</span>
          </div>
        </div>

        <!-- Video Viewport -->
        <div class="relative aspect-[16/9] sm:aspect-[21/9] max-h-[480px] overflow-hidden bg-orange-50">
          <video autoplay loop muted playsinline class="w-full h-full object-cover filter contrast-110 saturate-110">
            <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/apparel-3d-loop.mp4') }}" type="video/mp4">
          </video>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-slate-950/20 pointer-events-none"></div>

          <!-- Floating Live Telemetry Cards on Video -->
          <div class="absolute top-4 left-4 p-3 rounded-xl bg-white/85 backdrop-blur-md border border-stone-200 text-xs text-stone-600 space-y-1 hidden sm:block">
            <div class="text-[10px] font-mono text-orange-400 font-bold uppercase">Workstation Speed</div>
            <div class="font-bold text-stone-900 text-sm">4,280 Stitches / Min</div>
            <div class="text-[10px] text-emerald-400">Zero skipped stitches detected</div>
          </div>

          <div class="absolute bottom-4 right-4 p-3 rounded-xl bg-white/85 backdrop-blur-md border border-stone-200 text-xs text-stone-600 space-y-1 text-right hidden sm:block">
            <div class="text-[10px] font-mono text-amber-400 font-bold uppercase">AQL 1.5 Compliance</div>
            <div class="font-bold text-stone-900 text-sm">99.1% First-Pass Pass</div>
            <div class="text-[10px] text-orange-600">Active lines: 18 / 20 Operational</div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       4. COMPANY PROFILE SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="company-profile" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-8 sm:p-12 lg:p-16 border border-stone-200">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-orange-400">
            <span>Track Tech Solutions</span>
            <span class="text-slate-500">/</span>
            <span class="text-stone-500">EST. 2019</span>
          </div>

          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-stone-900 leading-tight">
            Digital clarity for the people who make apparel
          </h2>

          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            Track Tech Solutions builds practical digital tools engineered specifically for apparel manufacturing. The platform connects production, quality, planning, materials, and factory-floor teams—helping people see what is happening and act while there is still time to improve the outcome.
          </p>

          <div class="pt-2 flex items-center gap-6 text-xs font-semibold text-stone-500">
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-orange-400"></span> 2 Global Countries
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 36 Tech Specialists
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-indigo-400"></span> 100% Customer Focused
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">01. Floor MES</div>
            <p class="text-xs text-stone-500 leading-relaxed">Bundle RFID tracking, cutting-to-pack pipelines, and live operator scorecards.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">02. Dynamic Gantt</div>
            <p class="text-xs text-stone-500 leading-relaxed">Fast-react multi-line scheduling, SAM variance management, and milestone forecasting.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">03. Machine IoT</div>
            <p class="text-xs text-stone-500 leading-relaxed">RPM telemetry, vibration sensors, predictive motor alerts, and QR mechanic dispatch.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">04. Quality AI</div>
            <p class="text-xs text-stone-500 leading-relaxed">Inline stitch defect heatmaps, zero-scrap fabric markers, and automated AQL 1.5 audits.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


    <!-- ═══════════════════════════════════════════════════════════════════
       5. THE TOOLS YOUR FACTORY TEAM NEEDS (Exact from website-tts.vercel.app)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="products" class="products-section relative py-20 px-4 sm:px-6 lg:px-8 z-10" data-nav-target="products">
    <div class="max-w-6xl mx-auto space-y-8">
      
      <!-- Section Head -->
      <div class="section-head max-w-3xl space-y-3">
        <p class="text-xs font-bold uppercase tracking-widest text-orange-600 px-3.5 py-1 rounded-full bg-orange-50 border border-orange-200 inline-block font-sans shadow-sm">
          What we help with
        </p>
        <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
          The tools your factory team needs, in one place
        </h2>
        <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
          Use the modules you need today, then connect the rest as your operation grows. Together, they give your team a clear view from fabric receiving to finished goods.
        </p>
      </div>

      <!-- 11-Product Clickable Tabs -->
      <div class="flex items-center gap-2 overflow-x-auto pb-3 pt-1 no-scrollbar">
        <button type="button" class="product-choice-btn is-selected" data-product-choice="trakwel">01 TrakWel</button>
        <button type="button" class="product-choice-btn" data-product-choice="fabric-inventory">02 Fabric Inventory</button>
        <button type="button" class="product-choice-btn" data-product-choice="cutting-digitalization">03 Cutting Room</button>
        <button type="button" class="product-choice-btn" data-product-choice="tracking">04 Production Tracking</button>
        <button type="button" class="product-choice-btn" data-product-choice="quality">05 Quality Control</button>
        <button type="button" class="product-choice-btn" data-product-choice="planwel">06 PlanWel</button>
        <button type="button" class="product-choice-btn" data-product-choice="mtrak">07 mTrak</button>
        <button type="button" class="product-choice-btn" data-product-choice="sewiot">08 SewIoT</button>
        <button type="button" class="product-choice-btn" data-product-choice="laundry">09 Laundry</button>
        <button type="button" class="product-choice-btn" data-product-choice="jig">10 Jig</button>
        <button type="button" class="product-choice-btn" data-product-choice="shrinkage">11 Shrinkage App</button>
      </div>

      <!-- The Exact Interactive Product Experience Card from website-tts.vercel.app -->
      <div class="product-experience" id="product-experience">
        <article class="product-detail" id="product-detail" data-product="trakwel" role="tabpanel" aria-live="polite">
          <div class="product-copy">
            <p class="product-kicker" id="productKicker">PRODUCT 01 <span>/</span> TRAKWEL</p>
            <h3 id="productTitle">TrakWel</h3>
            <p class="product-description" id="productDescription">Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.</p>
            <ol class="product-stages" aria-label="Product workflow">
              <li><span>01</span><strong id="productStageOne">Track</strong></li>
              <li><span>02</span><strong id="productStageTwo">Monitor</strong></li>
              <li><span>03</span><strong id="productStageThree">Improve</strong></li>
            </ol>
            <a class="btn-primary product-cta" href="#contact">Talk to our team</a>
          </div>
          <div class="product-visual" id="productVisual" data-product="trakwel">
            <div class="product-photo">
              <img id="productImage" src="{{ asset('assets/img/production-tracking.jpg') }}" alt="Live production tracking across garment factory lines">
            </div>
            <div class="product-animation-stage">
              <div class="visual-widget visual-widget--quality" aria-hidden="true">
                <div class="quality-frame"><i></i><i></i><i></i><i></i><span class="quality-target quality-target--one"></span><span class="quality-target quality-target--two"></span>
                  <div class="quality-scan-line"></div>
                </div>
                <span class="quality-callout quality-callout--one">Seam check <b>PASS</b></span>
                <span class="quality-callout quality-callout--two">Finish <b>PASS</b></span>
              </div>
              <div class="visual-widget visual-widget--tracking" aria-hidden="true">
                <div class="tracking-route"><span class="route-line"></span><i>01</i><i>02</i><i>03</i><b class="route-runner"></b></div>
                <div class="tracking-labels"><span>Cutting</span><span>Sewing</span><span>Finishing</span></div>
              </div>
              <div class="visual-widget visual-widget--trakwel" aria-hidden="true">
                <div class="mes-metrics">
                  <div><span>OUTPUT</span><strong>842</strong><small>pieces today</small></div>
                  <div><span>EFFICIENCY</span><strong>92%</strong><small>on target</small></div>
                </div>
                <div class="mes-order"><span>ORDER 4821</span><strong>78%</strong><i></i></div>
              </div>
              <div class="visual-widget visual-widget--maintenance" aria-hidden="true">
                <div class="machine-gauge"><span class="gauge-ring"></span><span class="gauge-needle"></span><b>86%</b></div>
              </div>
              <div class="visual-widget visual-widget--fabric" aria-hidden="true">
                <div class="fabric-marker"><span></span><span></span><span></span><span></span><span></span></div>
                <div class="fabric-roll"><i></i><i></i><i></i></div>
              </div>
              <div class="visual-widget visual-widget--planning" aria-hidden="true">
                <div class="planning-board">
                  <span><i></i></span><span><i></i></span><span><i></i></span><span><i></i></span>
                </div>
              </div>
              <div class="visual-widget visual-widget--warehouse" aria-hidden="true">
                <div class="warehouse-rack"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
                <span class="warehouse-beacon"></span>
              </div>
              <div class="visual-status" style="display: none;"><span id="productVisualLabel"></span><strong id="productVisualValue"></strong></div>
            </div>
          </div>
        </article>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       7. LEADERSHIP TEAM (Glass Executive Profiles)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="leadership" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-12">
      
      <div class="text-center space-y-3 max-w-2xl mx-auto">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400 px-3.5 py-1 rounded-full bg-orange-500/10 border border-orange-500/30 inline-block">
          Our Leadership Team
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
          Built around manufacturing, operations & tech
        </h2>
        <p class="text-stone-500 text-sm sm:text-base">
          Three perspectives working together to make factory software practical, dependable and useful on the floor.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Gopinath M. -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-orange-500/20">
              GM
            </div>
            <div>
              <span class="text-[11px] font-mono text-orange-400 font-bold uppercase">CHIEF EXECUTIVE OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Gopinath M. (Muniraj)</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Gopinath's career spans apparel manufacturing and digital solutions, including regional sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track Tech, he leads the company's direction and factory digital transformation.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener" class="text-xs font-bold text-orange-400 hover:text-orange-600 transition flex items-center gap-1.5">
              <span>Professional Profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Lebinesh Balan -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-amber-500/20">
              LB
            </div>
            <div>
              <span class="text-[11px] font-mono text-amber-400 font-bold uppercase">CHIEF OPERATING OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Lebinesh Balan</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Lebinesh focuses on turning strategy into consistent delivery: aligning customer implementation, teams, and day-to-day operations. His work as COO supports smooth adoption of Track Tech across factory environments and keeps customer needs connected to execution.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener" class="text-xs font-bold text-amber-400 hover:text-amber-300 transition flex items-center gap-1.5">
              <span>LinkedIn Profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Deepak Rajkumar -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-600 to-rose-700 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-red-500/20">
              DR
            </div>
            <div>
              <span class="text-[11px] font-mono text-red-400 font-bold uppercase">CHIEF TECHNOLOGY OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Deepak Rajkumar</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Deepak guides the technology behind the platform, with a focus on reliable product engineering, useful integrations, and clear information for factory teams. As CTO, he helps turn complex manufacturing workflows into software people can use with confidence.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <span class="text-xs font-mono text-stone-500">Software Architecture & IoT</span>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       8. CONTACT & FOOTER SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="contact" class="relative py-24 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-8 sm:p-12 lg:p-16 border border-stone-200 space-y-12">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
        
        <div class="lg:col-span-6 space-y-6">
          <span class="text-xs font-bold uppercase tracking-widest text-orange-400">Let's Connect</span>
          <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
            Want a clearer view of your factory?
          </h2>
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            Tell us how your lines work today. We will show you where Track Tech can remove manual follow-up, optimize floor WIP, and keep every shipment on time.
          </p>

          <div class="pt-2 flex flex-col sm:flex-row gap-4">
            <a href="mailto:sales@tracktechsolutions.com"
              class="px-8 py-3.5 rounded-full bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold text-sm shadow-lg shadow-orange-500/25 hover:scale-105 transition text-center">
              Email Sales Team
            </a>
            <a href="tel:+919650613666"
              class="px-7 py-3.5 rounded-full bg-white border border-stone-200 hover:border-orange-500 text-stone-700 hover:text-stone-900 font-bold text-sm transition text-center">
              Call +91 96506 13666
            </a>
          </div>
        </div>

        <div class="lg:col-span-6 space-y-4">
          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Head Office</div>
            <div class="text-sm font-semibold text-stone-900">364, 10/5 Silicon Town, Electronic City Phase 2, Bangalore 560100</div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Direct Mail</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="mailto:Lebinesh@tracktechsolutions.com" class="hover:text-orange-400 transition">Lebinesh@tracktechsolutions.com</a> • 
              <a href="mailto:sales@tracktechsolutions.com" class="hover:text-orange-400 transition">sales@tracktechsolutions.com</a>
            </div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Phone Telephony</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="tel:+919650613666" class="hover:text-orange-400 transition">+91 96506 13666</a> / 
              <a href="tel:+919742060606" class="hover:text-orange-400 transition">+91 97420 60606</a>
            </div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">LinkedIn Company</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="https://www.linkedin.com/company/track-tech-solution/" target="_blank" rel="noopener" class="hover:text-orange-400 transition">linkedin.com/company/track-tech-solution</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom Bar -->
      <div class="pt-8 border-t border-stone-200 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
        <div class="flex items-center gap-3">
          <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Logo" class="w-6 h-6 object-contain opacity-70">
          <span>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved. Made in India.</span>
        </div>
        <div class="flex items-center gap-6">
          <a href="#about" class="hover:text-stone-600 transition">Home</a>
          <a href="#products" class="hover:text-stone-600 transition">Products</a>
          <a href="#leadership" class="hover:text-stone-600 transition">Leadership</a>
          <a href="#contact" class="hover:text-stone-600 transition">Contact</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Floating WhatsApp Quick Button -->
  <a class="fixed bottom-6 right-6 z-50 p-3.5 rounded-full bg-emerald-500 hover:bg-emerald-400 text-stone-900 shadow-xl shadow-emerald-500/30 hover:scale-110 transition-transform flex items-center justify-center"
    href="https://wa.me/919650613666?text=Hello%20Track%20Tech%20Solution%2C%20I%27d%20like%20to%20know%20more%20about%20your%20solutions."
    target="_blank" rel="noopener" aria-label="Chat with Track Tech Solution on WhatsApp">
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M20 4.1A9.9 9.9 0 0 0 12.9 2C7.4 1.5 2.5 5.5 2 11a9.9 9.9 0 0 0 1.4 5.9L2 22l5.2-1.4A10 10 0 1 0 20 4.1Z" />
      <path d="M8.2 7.5c.2-.4.5-.4.8-.4h.6c.2 0 .4.1.5.4l.8 1.8c.1.2.1.4-.1.6l-.6.7c.7 1.3 1.7 2.3 3 3l.7-.6c.2-.2.4-.2.6-.1l1.8.8c.3.1.4.3.4.5v.6c0 .3 0 .6-.4.8-.4.2-1.1.4-1.7.3-1.5-.2-3.1-1-4.5-2.4-1.4-1.4-2.2-3-2.4-4.5-.1-.6.1-1.3.3-1.7Z" fill="#fff" />
    </svg>
  </a>


  <!-- ═══════════════════════════════════════════════════════════════════
       JAVASCRIPT FOR INTERACTIVE STUDIO & MOBILE NAV
  ═══════════════════════════════════════════════════════════════════ -->
  <script>
    
        };
        container.appendChild(btn);
      });
    }

    function updateDisplay() {
      const data = productsData[activeKey];
      if (!data) return;
      document.getElementById('studioProductNumber').innerText = data.number;
      document.getElementById('studioProductTitle').innerText = data.title;
      document.getElementById('studioProductDesc').innerText = data.desc;
      document.getElementById('studioStage1').innerText = data.stage1;
      document.getElementById('studioStage2').innerText = data.stage2;
      document.getElementById('studioStage3').innerText = data.stage3;
      document.getElementById('studioImage').src = data.img;
      document.getElementById('studioUrlMock').innerText = data.url;
    }

    renderTabs();
    updateDisplay();

    // Mobile Drawer Toggle
    const mobileBtn = document.getElementById('mobileNavBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    if (mobileBtn && mobileDrawer) {
      mobileBtn.onclick = () => {
        mobileDrawer.classList.toggle('hidden');
      };
      mobileDrawer.querySelectorAll('a').forEach(a => {
        a.onclick = () => mobileDrawer.classList.add('hidden');
      });
    }

    // Cursor Follower Movement
    const cursor = document.getElementById('cursorGlow');
    if (cursor) {
      window.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
      });
    }
  </script>


  <!-- Exact website-tts.vercel.app Interactive Products Engine -->
  <script>
    const productsData = {
      trakwel: {
        number: '01', name: 'TrakWel',
        description: 'Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.',
        stages: ['Track', 'Monitor', 'Improve'],
        image: "{{ asset('assets/img/production-tracking.jpg') }}",
        alt: 'Live production tracking across garment factory lines',
        label: '', value: '', visual: 'trakwel'
      },
      'fabric-inventory': {
        number: '02', name: 'Fabric Inventory Management',
        description: 'Track fabric receipts, roll locations and issue quantities from one place. Keep stock accurate and make the right material easy to find before a line needs it.',
        stages: ['Receive', 'Locate', 'Issue'],
        image: "{{ asset('assets/img/fabric-inventory-management.png') }}",
        alt: 'Fabric inventory management illustration showing fabric rolls, stock scanning and inventory details',
        label: 'FABRIC STOCK', value: 'ROLLS IN VIEW', visual: 'fabric-inventory', imageOnly: true
      },
      'cutting-digitalization': {
        number: '03', name: 'Cutting Room Digitalization',
        description: 'Digitise cutting-room planning and progress, from marker preparation through bundle handoff. Give teams a clearer view of material use and work in progress.',
        stages: ['Prepare', 'Cut', 'Handoff'],
        image: "{{ asset('assets/img/cutting-room-digitalization.png') }}",
        alt: 'Digital cutting room with marker planning, automated cutting and finished fabric bundles',
        label: 'CUTTING ROOM', value: 'WORK IN VIEW', visual: 'cutting-digitalization', imageOnly: true
      },
      tracking: {
        number: '04', name: 'Production Tracking',
        description: 'Follow each order through cutting, sewing and finishing. Give supervisors a live view of output, bottlenecks and what needs attention next.',
        stages: ['Cutting', 'Sewing', 'Finishing'],
        image: "{{ asset('assets/img/product-tracking.png') }}",
        alt: 'Production tracking dashboard showing order progress across garment factory stages',
        label: 'ORDER 4821 / LINE 03', value: 'IN PROGRESS', visual: 'tracking', imageOnly: true
      },
      quality: {
        number: '05', name: 'Quality Control',
        description: 'Record inspections on the line, spot recurring issues and deal with defects before they reach packing or the warehouse.',
        stages: ['Inspect', 'Flag', 'Resolve'],
        image: "{{ asset('assets/img/quality-control.png') }}",
        alt: 'Garment quality control inspection and defect tracking',
        label: 'QUALITY CHECK', value: 'CHECKING', visual: 'quality', imageOnly: true
      },
      planwel: {
        number: '06', name: 'PlanWel',
        description: 'Advanced planning and scheduling to balance capacity, manage orders and keep delivery commitments on track with dynamic schedules.',
        stages: ['Plan', 'Schedule', 'Deliver'],
        image: "{{ asset('assets/img/planwel.png') }}",
        alt: 'PlanWel production planning and scheduling interface',
        label: 'CAPACITY PLAN', value: 'SCHEDULED', visual: 'planwel', imageOnly: true
      },
      mtrak: {
        number: '07', name: 'mTrak',
        description: 'Machine maintenance management that maximizes machine uptime, reduces downtime and extends equipment life with preventive maintenance.',
        stages: ['Monitor', 'Maintain', 'Optimize'],
        image: "{{ asset('assets/img/mTrak.png') }}",
        alt: 'mTrak machine maintenance management interface',
        label: 'MACHINE HEALTH', value: 'RUNNING WELL', visual: 'mtrak', imageOnly: true
      },
      sewiot: {
        number: '08', name: 'SewIoT',
        description: 'IoT for sewing lines. Connect the sewing floor with technology to monitor, analyze and improve productivity.',
        stages: ['Connect', 'Analyze', 'Improve'],
        image: "{{ asset('assets/img/sew-IoT.png') }}",
        alt: 'SewIoT smart sewing line and connected factory real-time monitoring',
        label: 'SEWING LINE', value: 'CONNECTED', visual: 'sewiot', imageOnly: true
      },
      laundry: {
        number: '09', name: 'Laundry Management',
        description: 'Follow garment lots through washing, treatment and finishing. Track process status and quality checks to keep laundry work aligned with order requirements.',
        stages: ['Receive', 'Process', 'Inspect'],
        image: "{{ asset('assets/img/laundry-management.png') }}",
        alt: 'Laundry management workflow for garment processing and finishing',
        label: 'LAUNDRY FLOW', value: 'LOT IN PROCESS', visual: 'laundry', imageOnly: true
      },
      jig: {
        number: '10', name: 'Jig Management',
        description: 'Organize sewing aids and jigs by style, line and order. Make availability and readiness visible so teams can reduce setup delays and keep production moving.',
        stages: ['Register', 'Assign', 'Verify'],
        image: "{{ asset('assets/img/Jig-management.png') }}",
        alt: 'Jig management illustration showing organized jig storage, tracking and maintenance',
        label: 'JIG READINESS', value: 'AVAILABLE', visual: 'jig', imageOnly: true
      },
      shrinkage: {
        number: '11', name: 'Shrinkage Testing App',
        description: 'Record fabric measurements before and after washing, calculate shrinkage and keep test results linked to the material lot for consistent quality decisions.',
        stages: ['Measure', 'Calculate', 'Review'],
        image: "{{ asset('assets/img/shrinkage-testing-app.png') }}",
        alt: 'Shrinkage testing app for recording fabric measurements and test results',
        label: 'SHRINKAGE TEST', value: 'RESULT RECORDED', visual: 'shrinkage', imageOnly: true
      }
    };

    const productChoices = document.querySelectorAll('[data-product-choice]');
    const productDetail = document.getElementById('product-detail');
    const productKicker = document.getElementById('productKicker');
    const productTitle = document.getElementById('productTitle');
    const productDescription = document.getElementById('productDescription');
    const productImage = document.getElementById('productImage');
    const productVisual = document.getElementById('productVisual');

    function selectProduct(productId) {
      const product = productsData[productId];
      if (!product || !productDetail) return;

      productKicker.innerHTML = `PRODUCT ${product.number} <span>/</span> ${product.name.toUpperCase()}`;
      productTitle.textContent = product.name;
      productDescription.textContent = product.description;
      productImage.src = product.image;
      productImage.alt = product.alt;
      productVisual.dataset.product = product.visual || productId;
      productDetail.dataset.product = product.visual || productId;
      
      const animStage = productVisual.querySelector('.product-animation-stage');
      if (animStage) {
        animStage.hidden = Boolean(product.imageOnly);
      }
      
      document.getElementById('productStageOne').textContent = product.stages[0];
      document.getElementById('productStageTwo').textContent = product.stages[1];
      document.getElementById('productStageThree').textContent = product.stages[2];

      const visualStatus = productVisual.querySelector('.visual-status');
      if (visualStatus) {
        const hasStatus = Boolean(product.label || product.value);
        visualStatus.style.display = hasStatus ? '' : 'none';
        document.getElementById('productVisualLabel').textContent = product.label || '';
        document.getElementById('productVisualValue').textContent = product.value || '';
      }

      productChoices.forEach(choice => {
        choice.classList.toggle('is-selected', choice.dataset.productChoice === productId);
      });

      productDetail.classList.remove('is-switching');
      void productDetail.offsetWidth;
      productDetail.classList.add('is-switching');
      window.setTimeout(() => productDetail.classList.remove('is-switching'), 450);
    }

    productChoices.forEach(choice => {
      choice.addEventListener('click', (e) => {
        selectProduct(choice.dataset.productChoice);
      });
    });
  </script>

</body>

</html>
