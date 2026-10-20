<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Track Tech Solution | Software for Garment Factories</title>
  <meta name="description"
    content="Track materials, orders, production and quality in one clear view, from the first roll of fabric to the final shipment.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/track-tech-logo.png') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
:root{
  --navy:#0A1E2B;
  --navy-2:#0F2A3B;
  --cyan:#2FE8C8;
  --cyan-dim:#1BA894;
  --paper:#F4F7F6;
  --ink:#10222C;
  --ink-soft:#111111;
  --line:#DCE5E3;
  --white:#FFFFFF;
}
*{box-sizing:border-box;}
button{font:inherit;}
html{font-size:17px;scroll-behavior:smooth;}
body{
  margin:0; background:var(--paper); color:var(--ink);
  font-family:'Space Grotesk',sans-serif; line-height:1.5;
  -webkit-font-smoothing:antialiased;
}
h1,h2,h3,.wordmark{font-family:'Space Grotesk',system-ui,sans-serif;}
a{color:inherit;}
img{max-width:100%;display:block;}
.wrap{max-width:1160px;margin:0 auto;padding:0 28px;}
section{padding:88px 0;}
section{margin-bottom:20px;}
.hero{margin-bottom:20px;}
@media(max-width:720px){section{padding:56px 0;}}
@media(max-width:720px){section{margin-bottom:12px;}.hero{margin-bottom:12px;}}

/* Cursor glow — desktop only, follows pointer with slight lag */
.cursor-glow{
  position:fixed; width:340px; height:340px; border-radius:50%; pointer-events:none;
  background:radial-gradient(circle,rgba(47,232,200,0.10) 0%,rgba(47,232,200,0) 70%);
  transform:translate(-50%,-50%); z-index:5; left:-500px; top:-500px;
  transition:left .12s linear, top .12s linear;
}
@media(max-width:900px){.cursor-glow{display:none;}}

/* NAV */
nav{position:sticky; top:0; z-index:50; background:rgba(10,30,43,0.82); backdrop-filter:blur(8px);}
.nav-inner{max-width:1160px;margin:0 auto;padding:12px 28px;display:flex;align-items:center;justify-content:space-between;}
.brand-lockup{display:flex;flex:0 0 auto;align-items:center;gap:12px;text-decoration:none;}
.brand-mark{display:block;width:64px;height:64px;flex:0 0 auto;padding:2px;object-fit:contain;background:#FFFFFF;border:2px solid rgba(20,120,102,0.22);border-radius:50%;box-shadow:0 3px 14px rgba(0,0,0,0.14);transition:transform .2s ease;}
.brand-lockup:hover .brand-mark{transform:scale(1.06);}
.wordmark{color:var(--white);font-size:1.24rem;font-weight:700;letter-spacing:0;}
.wordmark span{color:var(--cyan);}
.nav-links{display:flex;align-items:center;gap:28px;list-style:none;margin:0;padding:0;}
.nav-links a{color:#C9D8DE;font-size:0.92rem;text-decoration:none;}
.nav-links a:hover{color:var(--white);}
.nav-about{position:relative;display:flex;align-items:center;}
.nav-about-toggle{display:flex;align-items:center;gap:8px;padding:0;border:0;background:none;color:#C9D8DE;font:inherit;font-size:0.92rem;line-height:1.5;cursor:pointer;}
.nav-about-toggle:hover,.nav-about.is-open .nav-about-toggle{color:var(--white);}
.nav-about.is-open .nav-chevron{transform:translateY(2px) rotate(225deg);}
.nav-products{position:relative;display:flex;align-items:center;}
.nav-products-toggle{display:flex;align-items:center;gap:8px;padding:0;border:0;background:none;color:#C9D8DE;font:inherit;font-size:0.92rem;line-height:1.5;cursor:pointer;}
.nav-products-toggle:hover,.nav-products.is-open .nav-products-toggle{color:var(--white);}
.nav-chevron{width:7px;height:7px;border-right:1.5px solid currentColor;border-bottom:1.5px solid currentColor;transform:translateY(-2px) rotate(45deg);transition:transform .2s ease;}
.nav-products.is-open .nav-chevron{transform:translateY(2px) rotate(225deg);}
.products-menu{position:absolute;top:calc(100% + 10px);left:-16px;z-index:55;display:flex;max-height:min(75vh,560px);min-width:310px;flex-direction:column;overflow-y:auto;padding:7px 0;background:#FFFFFF;border-top:3px solid #146477;border-radius:0 0 7px 7px;box-shadow:0 20px 46px rgba(5,18,28,0.4);opacity:0;visibility:hidden;transform:translateY(8px);transition:opacity .18s ease,transform .18s ease,visibility .18s ease;}
.nav-products.is-open .products-menu,.nav-about.is-open .products-menu{opacity:1;visibility:visible;transform:translateY(0);}
nav .nav-products .products-menu>a,nav .nav-about .products-menu>a,nav .nav-products .product-menu-items a{display:block;min-height:43px;padding:11px 18px;color:#172B36;font-size:0.9rem;font-weight:600;text-decoration:none;white-space:normal;transition:background .16s ease,color .16s ease;}
.products-menu>a{border-bottom:1px solid #E6EDF0;}
.product-menu-group{border-bottom:1px solid #E6EDF0;}
.product-menu-heading{display:flex;min-height:44px;align-items:stretch;}
.product-menu-parent{flex:1;min-width:0;padding:10px 18px;border:0;background:transparent;color:#172B36;text-align:left;font-size:0.92rem;font-weight:700;cursor:pointer;}
.product-menu-disclosure{display:grid;width:42px;flex:0 0 42px;place-items:center;border:0;background:transparent;color:#425A63;cursor:pointer;}
.product-menu-disclosure .nav-chevron{transform:translateY(-2px) rotate(45deg);}
.product-menu-group.is-open .product-menu-disclosure .nav-chevron{transform:translateY(2px) rotate(225deg);}
.product-menu-items{padding:2px 0 7px 10px;}
.product-menu-items a{border-left:2px solid #D7E5E4;}
.product-menu-items a:not(:last-child){border-bottom:1px solid #EDF1F1;}
.product-menu-items[hidden]{display:none;}
nav .nav-products .products-menu>a:hover,nav .nav-products .products-menu>a:focus-visible,nav .nav-products .products-menu>a.is-selected,nav .nav-products .product-menu-items a:hover,nav .nav-products .product-menu-items a:focus-visible,nav .nav-products .product-menu-items a.is-selected,nav .nav-about .products-menu>a:hover,nav .nav-about .products-menu>a:focus-visible{background:#DDF5F1;color:#064D5C;}
nav .nav-products .product-menu-parent:hover,nav .nav-products .product-menu-parent:focus-visible,nav .nav-products .product-menu-parent.is-selected{background:#DDF5F1;color:#064D5C;}
nav .nav-products .products-menu .is-selected{box-shadow:inset 4px 0 #146477;font-weight:700;}
@media(min-width:801px){.nav-products:hover .products-menu,.nav-products:focus-within .products-menu{opacity:1;visibility:visible;transform:translateY(0);}}
@media(min-width:801px){.nav-about:hover .products-menu,.nav-about:focus-within .products-menu{opacity:1;visibility:visible;transform:translateY(0);}}
.nav-cta{background:var(--cyan);color:var(--navy);padding:9px 18px;border-radius:6px;font-weight:600;font-size:0.9rem;text-decoration:none;white-space:nowrap;}
.nav-toggle{display:none;background:none;border:0;color:var(--white);font-size:1.4rem;cursor:pointer;}
@media(max-width:800px){
  .nav-links{
    display:flex; flex-direction:column; gap:0; position:absolute; top:100%; left:0; right:0;
    background:var(--navy-2); max-height:0; overflow:hidden; transition:max-height .3s ease;
  }
  .nav-links.open{max-height:calc(100vh - 84px);overflow-y:auto;}
  .nav-links li{border-top:1px solid #1F3B4A;}
  .nav-links a{display:block;padding:14px 28px;}
  .nav-about-toggle{width:100%;padding:14px 28px;}
  .nav-products-toggle{width:100%;padding:14px 28px;}
  .products-menu{position:static;max-height:55vh;min-width:0;margin:0 14px 14px;border-top:1px solid #2F7180;border-radius:0 0 6px 6px;box-shadow:none;opacity:1;visibility:visible;transform:none;display:none;}
  .nav-products.is-open .products-menu,.nav-about.is-open .products-menu{display:flex;}
  nav .nav-products .products-menu>a,nav .nav-about .products-menu>a,nav .nav-products .product-menu-items a{padding:10px 14px;}
  .product-menu-parent{padding:10px 14px;}
  .nav-toggle{display:block;}
}
@media(max-width:480px){.brand-lockup{gap:9px;}.brand-mark{width:52px;height:52px;}.wordmark{font-size:1.08rem;}}

/* HERO */
.hero{
  background:var(--navy); color:var(--white); position:relative; overflow:hidden;
  padding:120px 0 70px; min-height:640px; display:flex; align-items:center;
}
@media(max-width:600px){.hero{min-height:560px;padding:110px 0 60px;}}
.hero-bg-video{position:absolute; inset:0; width:100%; height:100%; object-fit:cover; z-index:0; transform:scale(1.15); transform-origin:20% 25%;}
.hero-overlay{position:absolute; inset:0; z-index:1;
  background:linear-gradient(100deg, rgba(6,17,25,0.76) 0%, rgba(6,17,25,0.62) 32%, rgba(6,17,25,0.2) 60%, rgba(6,17,25,0.35) 100%);}
.hero-watermark-mask{position:absolute;z-index:2;right:2%;bottom:3%;width:140px;height:120px;pointer-events:none;filter:blur(20px);background:rgba(232,239,238,0.95);border-radius:50%;}
.hero-grid{position:relative; z-index:2; display:block; max-width:640px;}
.eyebrow{color:var(--cyan);font-size:0.85rem;font-weight:600;margin:0 0 16px;}
.hero h1{font-size:clamp(2.1rem,4.2vw,3.4rem);line-height:1.08;margin:0 0 22px;letter-spacing:0;}
.hero p{color:#B9CBD2;font-size:1.08rem;max-width:46ch;margin:0 0 30px;}
.hero-ctas{display:flex;gap:14px;flex-wrap:wrap;}
.btn-primary{background:var(--cyan);color:var(--navy);padding:13px 26px;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.95rem;transition:transform .15s ease;}
.btn-primary:hover{transform:translateY(-2px);}
.btn-ghost{border:1px solid #37515F;color:var(--white);padding:13px 26px;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.95rem;}

/* SECTION HEADS */
.section-head{max-width:640px;margin:0 0 44px;}
.section-head .kicker{color:var(--cyan-dim);font-weight:600;font-size:0.85rem;margin:0 0 10px;}
.section-head h2{font-size:clamp(1.6rem,2.6vw,2.2rem);margin:0;color:var(--ink);letter-spacing:0;}
.section-head p{color:var(--ink-soft);margin-top:14px;font-size:1rem;max-width:56ch;}

/* PRODUCTS */
.products-section{position:relative;overflow:hidden;color:var(--white);background:var(--navy);}
.products-section>.section-content{z-index:2;}
.products-section .section-head h2{color:var(--white);}
.products-section .section-head p{color:#C3D4D8;}
.products-section .section-head .kicker{color:var(--cyan);}
.products-section .section-head{margin-bottom:30px;}

/* ABOUT COMPANY */
.company-section,.leadership-section{position:relative;overflow:hidden;}
.company-layout{display:grid;grid-template-columns:minmax(0,1.35fr) minmax(260px,0.65fr);gap:52px;align-items:center;}
.company-copy{max-width:690px;}
.company-copy .kicker,.leadership-section .section-head .kicker{margin:0 0 14px;color:var(--cyan);font-size:0.76rem;font-weight:700;text-transform:uppercase;}
.company-copy .kicker span{color:#111111;font-weight:500;}
.company-copy h2{max-width:18ch;margin:0 0 18px;color:#FFFFFF;font-size:clamp(1.8rem,3vw,2.5rem);line-height:1.12;}
.company-copy>p:not(.kicker){max-width:62ch;color:#D3E0E4;font-size:0.97rem;line-height:1.7;}
.company-link,.leader-profile>a{display:inline-flex;align-items:center;gap:9px;margin-top:12px;color:#77E0CC;font-size:0.9rem;font-weight:700;text-decoration:none;}
.company-link:hover,.leader-profile>a:hover{color:#FFFFFF;}
.company-link span,.leader-profile>a span{font-size:1.1rem;}
.company-facts{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));border-top:1px solid rgba(204,226,235,0.4);border-left:1px solid rgba(204,226,235,0.4);background:rgba(10,30,43,0.62);backdrop-filter:blur(8px);}
.company-facts>div{display:flex;min-height:126px;flex-direction:column;justify-content:center;gap:5px;padding:18px;border-right:1px solid rgba(204,226,235,0.4);border-bottom:1px solid rgba(204,226,235,0.4);}
.company-facts strong{color:#77E0CC;font-size:2rem;line-height:1;font-weight:700;}
.company-facts span{color:#E2ECEF;font-size:0.8rem;}
.leadership-section{background:var(--navy);color:var(--white);}
.leadership-section>.wrap{position:relative;z-index:2;}
.leadership-intro{max-width:740px;margin-bottom:36px;}
.leadership-section .section-head .kicker{color:var(--cyan);}
.leadership-section .section-head h2{max-width:24ch;color:var(--white);}
.leadership-section .section-head p{color:#C3D4D8;}
.leadership-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px;}
.leader-profile{display:flex;min-width:0;flex-direction:column;padding:26px;background:rgba(232,239,238,0.93);border:1px solid #D5E0DE;border-radius:6px;box-shadow:0 12px 28px rgba(3,12,18,0.18);}
.leader-mark{display:grid;width:48px;height:48px;place-items:center;border:1px solid #227F79;color:#12665F;font-size:0.9rem;font-weight:700;}
.leader-role{margin:22px 0 9px;color:#147866;font-size:0.7rem;font-weight:700;}
.leader-profile h3{margin:0 0 15px;color:#122A34;font-size:1.35rem;line-height:1.2;}
.leader-bio{min-height:172px;margin:0;color:#435B64;font-size:0.88rem;line-height:1.7;}
.leader-profile>a{margin-top:auto;padding-top:20px;color:#12665F;font-size:0.82rem;}
@media(max-width:900px){.company-layout{grid-template-columns:1fr;gap:32px;}.company-facts{max-width:600px;}}
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
.clients-section .section-head .kicker{color:var(--cyan);}
.clients-section .section-head h2{max-width:20ch;color:var(--white);}
.clients-section .section-head p{color:#C3D4D8;}
.client-showcase{display:block;}
.client-roster{padding:24px 26px 20px;background:rgba(10,30,43,0.76);border:1px solid rgba(204,226,235,0.34);border-radius:10px;box-shadow:0 12px 28px rgba(3,12,18,0.18);backdrop-filter:blur(8px);}
.client-roster-head{display:flex;align-items:center;justify-content:space-between;gap:12px;padding-bottom:16px;}
.client-roster-head{border-bottom:1px solid rgba(204,226,235,0.28);}
.client-roster-head span{font-size:0.72rem;font-weight:700;text-transform:uppercase;color:#AFC6D0;}
.client-roster-head strong{color:#FFFFFF;}
.client-roster-head strong{font-family:'Space Grotesk';font-size:1rem;}
.client-logos{display:grid;grid-template-columns:repeat(5,minmax(0,1fr));gap:1px;background:#D8E1E2;border:1px solid #D8E1E2;}
.client-mark{display:flex;min-width:0;min-height:96px;align-items:center;justify-content:center;padding:12px;background:#FFFFFF;transition:background .2s ease,transform .2s ease;}
.client-mark:hover{background:#F0F7F7;transform:translateY(-2px);}
.client-logo{display:block;width:100%;height:58px;}
.client-metrics{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));margin-top:20px;padding:8px 0;background:rgba(10,30,43,0.76);border:1px solid rgba(204,226,235,0.34);border-radius:10px;backdrop-filter:blur(8px);}
.client-metric{display:flex;min-width:0;min-height:72px;flex-direction:column;align-items:center;justify-content:center;gap:0;text-align:center;}
.client-metric:not(:last-child){border-right:1px solid rgba(204,226,235,0.28);}
.client-metric strong{font-family:'Space Grotesk';font-size:1.35rem;line-height:1.2;color:#77E0CC;}
.client-metric span{font-size:0.78rem;color:#C3D4D8;}
@media(max-width:820px){.client-logos{grid-template-columns:repeat(3,minmax(0,1fr));}}
@media(max-width:600px){
  .client-roster{padding:20px;}
  .client-logos{grid-template-columns:repeat(2,minmax(0,1fr));}
  .client-metrics{grid-template-columns:repeat(2,minmax(0,1fr));}
  .client-metric:nth-child(2){border-right:0;}
  .client-metric:nth-child(-n+2){border-bottom:1px solid rgba(204,226,235,0.28);}
}

/* CONTACT */
.contact-section{position:relative;overflow:hidden;color:var(--white);background:var(--navy);}
.section-video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;transform:scale(1.15);transform-origin:20% 25%;}
.section-video-overlay{position:absolute;inset:0;background:linear-gradient(100deg,rgba(6,17,25,0.54),rgba(6,17,25,0.36));z-index:1;}
.section-content{position:relative;z-index:2;}
.contact-section h2{color:var(--white);}
.contact-section p{color:#AEC3CA;}
.contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:40px;}
@media(max-width:800px){.contact-grid{grid-template-columns:1fr;}}
.contact-list{list-style:none;padding:0;margin:26px 0 0;}
.contact-list li{padding:14px 0;border-top:1px solid #31515E;font-size:0.98rem;}
.contact-list li b{display:block;font-size:0.8rem;color:#AEC3CA;font-weight:500;margin-bottom:4px;}
.contact-list li a{text-decoration:none;color:var(--white);font-weight:600;}

/* Floating WhatsApp contact action */
.whatsapp-float{
  position:fixed;right:24px;bottom:24px;z-index:60;display:grid;place-items:center;
  width:58px;height:58px;border-radius:50%;background:#25D366;color:#073B20;
  box-shadow:0 8px 24px rgba(7,59,32,0.24);text-decoration:none;
  transition:transform .15s ease,box-shadow .15s ease;
  animation:whatsapp-bounce .8s ease-in-out infinite;
}
.whatsapp-float:hover{transform:translateY(-3px);box-shadow:0 11px 28px rgba(7,59,32,0.3);}
@keyframes whatsapp-bounce{
  0%,100%{translate:0 0;}
  50%{translate:0 -8px;}
}
.whatsapp-float::after{content:"Chat on WhatsApp";position:absolute;right:70px;white-space:nowrap;padding:8px 11px;border-radius:6px;background:#073B20;color:#FFFFFF;font-size:0.78rem;font-weight:600;opacity:0;pointer-events:none;transform:translateX(5px);transition:opacity .15s ease,transform .15s ease;}
.whatsapp-float:hover::after,.whatsapp-float:focus::after{opacity:1;transform:translateX(0);}
.whatsapp-icon{
  display:block;width:34px;height:34px;fill:none;stroke:#073B20;stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round;
}
@media(max-width:600px){
  .whatsapp-float{right:16px;bottom:16px;width:54px;height:54px;}
}

/* FOOTER */
footer{background:var(--navy);color:#9FB4BC;padding:50px 0 30px;font-size:0.88rem;}
.foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:30px;margin-bottom:36px;}
@media(max-width:720px){.foot-grid{grid-template-columns:1fr;}}
footer h4{color:var(--white);font-size:0.85rem;margin:0 0 14px;}
footer ul{list-style:none;padding:0;margin:0;display:grid;gap:9px;}
footer a{text-decoration:none;color:#9FB4BC;}
footer a:hover{color:var(--cyan);}
.foot-bottom{border-top:1px solid #1F3B4A;padding-top:22px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;}

/* LIGHT VISUAL MODE */
nav{background:rgba(244,247,246,0.78);border-bottom:1px solid rgba(16,34,44,0.1);}
.nav-inner .wordmark{color:var(--ink);}
.nav-links a{color:var(--ink-soft);}
.nav-links a:hover{color:var(--ink);}
.nav-toggle{color:var(--ink);}
.hero-overlay{background:linear-gradient(100deg,rgba(6,17,25,0.42) 0%,rgba(6,17,25,0.24) 42%,rgba(6,17,25,0.08) 72%,rgba(6,17,25,0.18) 100%);}
.hero-watermark-mask{background:rgba(244,247,246,0.85);backdrop-filter:blur(16px);border-radius:50%;}
.products-section,.contact-section{color:var(--ink);}
.section-video-overlay{background:rgba(244,247,246,0.46);}
.products-section .section-head h2,.contact-section h2{color:var(--ink);}
.products-section .section-head p,.contact-section p{color:var(--ink-soft);}
.contact-list li{border-color:var(--line);}
.contact-list li b{color:var(--ink-soft);}
.contact-list li a{color:var(--ink);}
footer{background:#E8F1F0;color:var(--ink-soft);}
footer .wordmark{color:var(--ink)!important;}
footer h4{color:var(--ink);}
footer a{color:var(--ink-soft);}
footer a:hover{color:var(--cyan-dim);}
.foot-bottom{border-color:#C8DFDA;}

/* Light, high-contrast content over factory footage */
nav{background:rgba(244,247,246,0.94);border-bottom-color:rgba(16,34,44,0.12);}
.nav-inner .wordmark{color:var(--ink);}
.nav-links a,.nav-about-toggle,.nav-products-toggle{color:var(--ink-soft);}
.nav-links a:hover,.nav-about-toggle:hover,.nav-about.is-open .nav-about-toggle,.nav-products-toggle:hover,.nav-products.is-open .nav-products-toggle{color:var(--ink);}
.nav-toggle{color:var(--ink);}
.nav-links>li[data-nav-section]>a{display:block;padding:8px 10px;border-radius:5px;transition:background .18s ease,color .18s ease,box-shadow .18s ease;}
.nav-links>li[data-nav-section].is-current>a,.nav-about.is-current .nav-about-toggle,.nav-products.is-current .nav-products-toggle{color:var(--ink);background:rgba(20,120,102,0.14);box-shadow:inset 0 -2px #147866;border-radius:5px;}
.nav-about.is-current .nav-about-toggle,.nav-products.is-current .nav-products-toggle{margin:-4px -8px;padding:4px 8px;}
@media(max-width:800px){.nav-links{background:rgba(244,247,246,0.98);}.nav-links li{border-color:#DCE5E3;}}
.hero,.products-section,.company-section,.leadership-section,.clients-section,.contact-section{color:var(--ink);}
.hero-overlay{background:linear-gradient(100deg,rgba(232,239,238,0.72) 0%,rgba(232,239,238,0.64) 44%,rgba(232,239,238,0.52) 100%);}
.section-video-overlay{background:rgba(232,239,238,0.64);}
.hero h1,.products-section .section-head h2,.clients-section .section-head h2,.leadership-section .section-head h2,.contact-section h2{color:var(--ink);}
.hero p,.products-section .section-head p,.clients-section .section-head p,.leadership-section .section-head p,.contact-section p{color:var(--ink-soft);}
.hero .eyebrow,.products-section .section-head .kicker,.clients-section .section-head .kicker,.company-copy .kicker,.leadership-section .section-head .kicker,.contact-section .kicker{color:#147866;}
.btn-ghost{border-color:#536C74;color:var(--ink);}
.company-copy h2,.leader-profile h3{color:var(--ink);}
.company-copy>p:not(.kicker),.leader-bio{color:var(--ink-soft);}
.company-facts{background:rgba(232,239,238,0.84);border-color:#C8D5D5;}
.company-facts>div{border-color:#C8D5D5;}
.company-facts strong,.leader-role,.leader-mark{color:#147866;}
.company-facts span{color:var(--ink-soft);}
.company-link,.leader-profile>a{color:#12665F;}
.company-link:hover,.leader-profile>a:hover{color:var(--ink);}
.product-detail{background:rgba(235,242,241,0.9);border-color:#C8D5D5;}
.product-copy h3{color:var(--ink);}
.product-description,.product-stages li strong{color:var(--ink-soft);}
.product-kicker,.product-stages li span{color:#147866;}
.client-roster{background:rgba(235,242,241,0.88);border-color:#C8D5D5;}
.client-roster-head{border-color:#D8E1E2;}
.client-roster-head span{color:var(--ink-soft);}
.client-roster-head strong{color:var(--ink);}
.client-metrics{background:rgba(235,242,241,0.88);border-color:#C8D5D5;}
.client-metric:not(:last-child){border-color:#D8E1E2;}
.client-metric strong{color:#147866;}
.client-metric span{color:var(--ink-soft);}
.contact-list li{border-color:#C8D5D5;}
.contact-list li b{color:var(--ink-soft);}
.contact-list li a{color:var(--ink);}
.contact-section .contact-action-primary{background:var(--cyan);color:#10222C;}
.contact-section .contact-action-secondary{background:rgba(232,239,238,0.62);border-color:#536C74;color:#10222C;}
.contact-section .contact-action-primary:hover,.contact-section .contact-action-secondary:hover{color:#10222C;}
footer{background:#E8F1F0;color:var(--ink-soft);}
footer .wordmark{color:var(--ink)!important;}
footer h4{color:var(--ink);}
footer a{color:var(--ink-soft);}
footer a:hover{color:#147866;}
.foot-bottom{border-color:#C8DFDA;}

/* Scroll reveal — one quiet fade-up per section, not per card */
.reveal{opacity:0; transform:translateY(18px); transition:opacity .7s ease, transform .7s ease;}
.reveal.in-view{opacity:1; transform:none;}

@media (prefers-reduced-motion: reduce){
  *{animation:none!important; transition:none!important;}
  .reveal{opacity:1; transform:none;}
}

  </style>
</head>

<body>

  <div class="cursor-glow" id="cursorGlow"></div>

  <nav id="siteNav">
    <div class="nav-inner">
      <a class="brand-lockup" href="#about" aria-label="Track Tech Solution home">
        <img class="brand-mark" src="{{ asset('assets/img/track-tech-logo.png') }}" alt="Track Tech Solution Logo">
        <span class="wordmark">Track<span>Tech</span> Solution</span>
      </a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">☰</button>
      <ul class="nav-links" id="navLinks">
        <li class="nav-about" id="navAbout" data-nav-section="about">
          <button class="nav-about-toggle" id="aboutToggle" type="button" aria-expanded="false"
            aria-controls="aboutMenu">About <span class="nav-chevron" aria-hidden="true"></span></button>
          <div class="products-menu" id="aboutMenu" role="menu" aria-label="About Track Tech">
            <a href="#company-profile" role="menuitem">Track Tech Solutions</a>
            <a href="#leadership" role="menuitem">Our Leadership Team</a>
          </div>
        </li>
        <li class="nav-products" id="navProducts" data-nav-section="products">
          <button class="nav-products-toggle" id="productsToggle" type="button" aria-expanded="false"
            aria-controls="productsMenu">Products <span class="nav-chevron" aria-hidden="true"></span></button>
          <div class="products-menu" id="productsMenu" role="menu" aria-label="Products">
            <div class="product-menu-group" data-product-group>
              <div class="product-menu-heading">
                <button class="product-menu-parent is-selected" type="button" role="menuitem"
                  data-product-choice="trakwel">TrakWel</button>
                <button class="product-menu-disclosure" type="button" aria-label="Expand TrakWel products"
                  aria-expanded="false" aria-controls="trakwelMenu"><span class="nav-chevron"
                    aria-hidden="true"></span></button>
              </div>
              <div class="product-menu-items" id="trakwelMenu" role="group" aria-label="TrakWel products" hidden>
                <a href="#product-experience" role="menuitem" data-product-choice="fabric-inventory">Fabric Inventory
                  Management</a>
                <a href="#product-experience" role="menuitem" data-product-choice="cutting-digitalization">Cutting Room
                  Digitalization</a>
                <a href="#product-experience" role="menuitem" data-product-choice="tracking">Production Tracking</a>
                <a href="#product-experience" role="menuitem" data-product-choice="quality">Quality Control</a>
              </div>
            </div>
            <a href="#product-experience" role="menuitem" data-product-choice="planwel">PlanWel</a>
            <a href="#product-experience" role="menuitem" data-product-choice="mtrak">mTrak</a>
            <a href="#product-experience" role="menuitem" data-product-choice="sewiot">SewIoT</a>
            <div class="product-menu-group" data-product-group>
              <div class="product-menu-heading">
                <button class="product-menu-parent" type="button" role="menuitem">Industry Solutions</button>
                <button class="product-menu-disclosure" type="button" aria-label="Expand Industry Solutions"
                  aria-expanded="false" aria-controls="industrySolutionsMenu"><span class="nav-chevron"
                    aria-hidden="true"></span></button>
              </div>
              <div class="product-menu-items" id="industrySolutionsMenu" role="group" aria-label="Industry Solutions"
                hidden>
                <a href="#product-experience" role="menuitem" data-product-choice="laundry">Laundry Management</a>
                <a href="#product-experience" role="menuitem" data-product-choice="jig">Jig Management</a>
                <a href="#product-experience" role="menuitem" data-product-choice="shrinkage">Shrinkage Testing App</a>
              </div>
            </div>
          </div>
        </li>
        <li data-nav-section="clients"><a href="#clients">Clients</a></li>
        <li data-nav-section="contact"><a href="#contact">Contact</a></li>
      </ul>
      <a class="nav-cta" href="#contact">Experience It Live</a>
    </div>
  </nav>

  <header id="about" class="hero" data-nav-target="about">
    <video class="hero-bg-video" id="heroVideo" autoplay muted loop playsinline poster="{{ asset('assets/img/factory-aerial.jpg') }}">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap hero-grid">
      <div>
        <p class="eyebrow">Built for the way garment factories work</p>
        <h1>A clearer way to run your factory</h1>
        <p>From the first roll of fabric to the final shipment, Track Tech helps your team see what is happening, fix
          issues sooner and keep every order moving.</p>
        <div class="hero-ctas">
          <a class="btn-primary" href="#contact">Experience It Live</a>
          <a class="btn-ghost" href="#products">Explore products</a>
        </div>
      </div>
    </div>

  </header>

  <section id="company-profile" class="company-section reveal" data-nav-target="about">
    <video class="hero-bg-video" autoplay muted loop playsinline aria-hidden="true"
      poster="{{ asset('assets/img/factory-aerial.jpg') }}">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap section-content company-layout">
      <div class="company-copy">
        <p class="kicker">Track Tech Solutions <span> / EST. 2019</span></p>
        <h2>Digital clarity for the people who make apparel</h2>
        <p>Track Tech Solutions builds practical digital tools for apparel manufacturing. The platform connects
          production, quality, planning, materials and factory-floor teams, helping people see what is happening and act
          while there is still time to improve the outcome.</p>
        <p>Since 2019, the team has focused on bringing useful technology closer to everyday factory work, supporting
          implementation across more than 74 factories in two countries.</p>
        <a class="company-link" href="https://www.linkedin.com/company/track-tech-solution/about/" target="_blank"
          rel="noopener">Company profile on LinkedIn <span aria-hidden="true">↗</span></a>
      </div>
      <div class="company-facts" aria-label="Track Tech Solutions at a glance">
        <div><strong>2019</strong><span>Established</span></div>
        <div><strong>74+</strong><span>Factories supported</span></div>
        <div><strong>02</strong><span>Countries</span></div>
        <div><strong>36</strong><span>Professionals</span></div>
      </div>
    </div>
  </section>

  <section id="leadership" class="leadership-section reveal" data-nav-target="about">
    <video class="hero-bg-video" autoplay muted loop playsinline aria-hidden="true"
      poster="{{ asset('assets/img/factory-aerial.jpg') }}">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap section-content">
      <div class="section-head leadership-intro">
        <p class="kicker">Our leadership team</p>
        <h2>Built around manufacturing, operations and technology</h2>
        <p>Three perspectives working together to make factory software practical, dependable and useful on the floor.
        </p>
      </div>
      <div class="leadership-grid">
        <article class="leader-profile">
          <div class="leader-mark" aria-hidden="true">GM</div>
          <p class="leader-role">CHIEF EXECUTIVE OFFICER</p>
          <h3>Gopinath M. (Muniraj)</h3>
          <p class="leader-bio">Gopinath's career spans apparel manufacturing and digital solutions, including regional
            sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track
            Tech, he leads the company's direction and its focus on bringing technology into everyday factory
            operations.</p>
          <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener">Professional
            profile <span aria-hidden="true">↗</span></a>
        </article>
        <article class="leader-profile">
          <div class="leader-mark" aria-hidden="true">LB</div>
          <p class="leader-role">CHIEF OPERATING OFFICER</p>
          <h3>Lebinesh Balan</h3>
          <p class="leader-bio">Lebinesh focuses on turning strategy into consistent delivery: aligning customer
            implementation, teams and day-to-day operations. His work as COO supports smooth adoption of Track Tech
            across factory environments and keeps customer needs connected to execution.</p>
          <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener">LinkedIn profile
            <span aria-hidden="true">↗</span></a>
        </article>
        <article class="leader-profile">
          <div class="leader-mark" aria-hidden="true">DR</div>
          <p class="leader-role">CHIEF TECHNOLOGY OFFICER</p>
          <h3>Deepak Rajkumar</h3>
          <p class="leader-bio">Deepak guides the technology behind the platform, with a focus on reliable product
            engineering, useful integrations and clear information for factory teams. As CTO, he helps turn complex
            manufacturing workflows into software people can use with confidence.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="products" class="products-section reveal" data-nav-target="products">
    <video class="hero-bg-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap section-content">
      <div class="section-head">
        <p class="kicker">What we help with</p>
        <h2>The tools your factory team needs, in one place</h2>
        <p>Use the modules you need today, then connect the rest as your operation grows. Together, they give your team
          a clear view from fabric receiving to finished goods.</p>
      </div>
      <div class="product-experience" id="product-experience">
        <article class="product-detail" id="product-detail" data-product="trakwel" role="tabpanel" aria-live="polite">
          <div class="product-copy">
            <p class="product-kicker" id="productKicker">PRODUCT 01 <span>/</span> TRAKWEL</p>
            <h3 id="productTitle">TrakWel</h3>
            <p class="product-description" id="productDescription">Manufacturing Execution System (MES) for real-time
              visibility and control across the shop floor, improving efficiency, quality and performance.</p>
            <ol class="product-stages" aria-label="Product workflow">
              <li><span>01</span><strong id="productStageOne">Track</strong></li>
              <li><span>02</span><strong id="productStageTwo">Monitor</strong></li>
              <li><span>03</span><strong id="productStageThree">Improve</strong></li>
            </ol>
            <a class="btn-primary product-cta" href="#contact">Talk to our team</a>
          </div>
          <div class="product-visual" id="productVisual" data-product="trakwel">
            <div class="product-photo">
              <img id="productImage" src="{{ asset('assets/img/production-tracking.jpg') }}"
                alt="Live production tracking across garment factory lines">
            </div>
            <div class="product-animation-stage">
              <div class="visual-widget visual-widget--quality" aria-hidden="true">
                <div class="quality-frame"><i></i><i></i><i></i><i></i><span
                    class="quality-target quality-target--one"></span><span
                    class="quality-target quality-target--two"></span>
                  <div class="quality-scan-line"></div>
                </div>
                <span class="quality-callout quality-callout--one">Seam check <b>PASS</b></span>
                <span class="quality-callout quality-callout--two">Finish <b>PASS</b></span>
              </div>
              <div class="visual-widget visual-widget--tracking" aria-hidden="true">
                <div class="tracking-route"><span class="route-line"></span><i>01</i><i>02</i><i>03</i><b
                    class="route-runner"></b></div>
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
                <div class="machine-gauge"><span class="gauge-ring"></span><span class="gauge-needle"></span><b>86%</b>
                </div>
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
              <div class="visual-status" style="display: none;"><span id="productVisualLabel"></span><strong
                  id="productVisualValue"></strong></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="clients" class="clients-section reveal" data-nav-target="clients">
    <video class="hero-bg-video" autoplay muted loop playsinline aria-hidden="true"
      poster="{{ asset('assets/img/factory-aerial.jpg') }}">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap">
      <div class="section-head clients-intro">
        <p class="kicker">Key customers</p>
        <h2>Technology trusted by apparel makers</h2>
        <p>From established manufacturing groups to specialist apparel exporters, Track Tech brings production, quality
          and order visibility together for teams on the factory floor.</p>
      </div>
      <div class="client-showcase">
        <div class="client-roster">
          <div class="client-roster-head">
            <span>Customer directory</span>
            <strong>Key customers</strong>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" style="display:none;" aria-hidden="true">
            <symbol id="shahi" viewBox="0 0 200 80">
              <rect x="8" y="16" width="184" height="48" fill="#26345f" />
              <text x="100" y="52" fill="#fff" font-family="Arial,sans-serif" font-size="39" font-weight="800"
                text-anchor="middle">SHAHI</text>
            </symbol>
            <symbol id="arvind" viewBox="0 0 200 80">
              <text x="100" y="45" fill="#a11e3c" font-family="Georgia,serif" font-size="36"
                text-anchor="middle">ARVIND</text>
              <text x="100" y="62" fill="#a11e3c" font-family="Arial,sans-serif" font-size="9" font-weight="700"
                text-anchor="middle">FASHIONING POSSIBILITIES</text>
            </symbol>
            <symbol id="pds" viewBox="0 0 200 80">
              <circle cx="49" cy="40" r="28" fill="none" stroke="#b42b48" stroke-width="3" />
              <path d="M49 12v56M39 14v52M29 20v40M19 29v22M59 14v52M69 20v40M79 29v22" stroke="#b42b48"
                stroke-width="4" />
              <text x="127" y="53" fill="#17191c" font-family="Georgia,serif" font-size="39"
                text-anchor="middle">PDS</text>
            </symbol>
            <symbol id="texport" viewBox="0 0 200 80">
              <text x="100" y="51" fill="#243c70" font-family="Arial,sans-serif" font-size="32" font-weight="800"
                text-anchor="middle">texport</text>
            </symbol>
            <symbol id="modelarna" viewBox="0 0 200 80">
              <ellipse cx="100" cy="31" rx="39" ry="23" fill="none" stroke="#24252a" stroke-width="3" />
              <path d="M66 31h68M100 9v44" stroke="#24252a" stroke-width="2" />
              <path d="M82 17 100 10l18 7v24l-18 12-18-12z" fill="#b32333" stroke="#202126" stroke-width="2" />
              <text x="100" y="72" fill="#17191c" font-family="Arial,sans-serif" font-size="11" font-weight="700"
                text-anchor="middle">MODELARNA EXPORTS</text>
            </symbol>
            <symbol id="armstrong" viewBox="0 0 200 80">
              <path d="M12 16h30L18 64H0z" fill="#c93635" />
              <path d="M38 16h150l-24 48H14z" fill="#66676b" />
              <text x="107" y="42" fill="#fff" font-family="Georgia,serif" font-size="22" font-weight="700"
                text-anchor="middle">Armstrong</text>
              <text x="105" y="55" fill="#fff" font-family="Georgia,serif" font-size="9" font-style="italic"
                text-anchor="middle">The name for Quality</text>
            </symbol>
            <symbol id="penguin" viewBox="0 0 200 80">
              <ellipse cx="36" cy="39" rx="14" ry="25" fill="#fff" stroke="#172331" stroke-width="2.5" />
              <ellipse cx="36" cy="44" rx="8" ry="13" fill="#172331" />
              <circle cx="32" cy="28" r="2" fill="#172331" />
              <circle cx="40" cy="28" r="2" fill="#172331" />
              <path d="m34 32 5 2-5 2z" fill="#d8a344" />
              <path d="M23 57h9M39 57h9" stroke="#d8a344" stroke-width="3" stroke-linecap="round" />
              <text x="119" y="37" fill="#384878" font-family="Arial,sans-serif" font-size="17" font-weight="700"
                text-anchor="middle">Penguin</text>
              <text x="119" y="53" fill="#384878" font-family="Arial,sans-serif" font-size="12"
                text-anchor="middle">Apparels (P) Ltd</text>
            </symbol>
            <symbol id="sahana" viewBox="0 0 200 80">
              <path
                d="M100 37C83 27 87 11 101 5c12 12 10 24-1 32ZM100 37c1-19 17-25 30-16-3 17-14 23-30 16ZM100 37c18-3 28 10 22 25-17 1-24-9-22-25ZM100 37c-3 18-18 24-30 13 4-17 16-22 30-13ZM100 37C81 40 72 27 79 13c17-1 24 9 21 24Z"
                fill="#d9a22d" />
              <text x="100" y="71" fill="#7c735f" font-family="Georgia,serif" font-size="17" letter-spacing="2"
                text-anchor="middle">SAHANA</text>
            </symbol>
            <symbol id="trendyfits" viewBox="0 0 200 80">
              <rect x="8" y="10" width="184" height="60" fill="#153b73" />
              <circle cx="34" cy="39" r="14" fill="#f4ca35" />
              <path d="M27 48V29h13v4h-8v4h7v4h-7v7z" fill="#1d5a9a" />
              <text x="117" y="41" fill="#fff" font-family="Arial,sans-serif" font-size="19" font-weight="800"
                text-anchor="middle">TRENDY FITS</text>
              <text x="117" y="54" fill="#f4ca35" font-family="Arial,sans-serif" font-size="7"
                text-anchor="middle">COMFORT FASHION FIT</text>
            </symbol>
            <symbol id="mehala" viewBox="0 0 200 80">
              <text x="100" y="42" fill="#df3b3d" font-family="Georgia,serif" font-size="36" font-weight="700"
                text-anchor="middle">MEHALA</text>
              <text x="100" y="59" fill="#393238" font-family="Georgia,serif" font-size="10" font-style="italic"
                text-anchor="middle">Committed to Customer Delight</text>
            </symbol>
          </svg>
          <div class="client-logos" aria-label="Key customers">
            <div class="client-mark" role="img" aria-label="Shahi"><svg class="client-logo" viewBox="0 0 200 80"
                aria-hidden="true">
                <use href="#shahi" xlink:href="#shahi"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Arvind, Fashioning Possibilities"><svg class="client-logo"
                viewBox="0 0 200 80" aria-hidden="true">
                <use href="#arvind" xlink:href="#arvind"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="PDS"><svg class="client-logo" viewBox="0 0 200 80"
                aria-hidden="true">
                <use href="#pds" xlink:href="#pds"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Texport"><svg class="client-logo" viewBox="0 0 200 80"
                aria-hidden="true">
                <use href="#texport" xlink:href="#texport"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Penguin Apparels (P) Ltd"><svg class="client-logo"
                viewBox="0 0 200 80" aria-hidden="true">
                <use href="#penguin" xlink:href="#penguin"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Modelarna Exports"><svg class="client-logo"
                viewBox="0 0 200 80" aria-hidden="true">
                <use href="#modelarna" xlink:href="#modelarna"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Armstrong, The name for Quality"><svg class="client-logo"
                viewBox="0 0 200 80" aria-hidden="true">
                <use href="#armstrong" xlink:href="#armstrong"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Sahana"><svg class="client-logo" viewBox="0 0 200 80"
                aria-hidden="true">
                <use href="#sahana" xlink:href="#sahana"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Trendy Fits"><svg class="client-logo" viewBox="0 0 200 80"
                aria-hidden="true">
                <use href="#trendyfits" xlink:href="#trendyfits"></use>
              </svg></div>
            <div class="client-mark" role="img" aria-label="Mehala, Committed to Customer Delight"><svg
                class="client-logo" viewBox="0 0 200 80" aria-hidden="true">
                <use href="#mehala" xlink:href="#mehala"></use>
              </svg></div>
          </div>
        </div>
      </div>
      <div class="client-metrics" aria-label="Track Tech company facts">
        <div class="client-metric"><strong>2</strong><span>Countries</span></div>
        <div class="client-metric"><strong>74+</strong><span>Factories</span></div>
        <div class="client-metric"><strong>36</strong><span>Professionals</span></div>
        <div class="client-metric"><strong>100%</strong><span>Customer focused</span></div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section reveal" data-nav-target="contact">
    <video class="section-video" autoplay muted loop playsinline aria-hidden="true"
      poster="{{ asset('assets/img/factory-aerial.jpg') }}">
      <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
      <source src="{{ asset('assets/video/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="section-video-overlay"></div>
    <div class="hero-watermark-mask" aria-hidden="true"></div>
    <div class="wrap section-content contact-grid">
      <div>
        <p class="kicker">Let's talk</p>
        <h2 style="font-size:clamp(1.6rem,2.6vw,2.2rem);margin:0 0 14px;">Want a clearer view of your factory?</h2>
        <p class="contact-lead">Tell us how your lines work today. We will show you where Track Tech can remove the
          manual follow-up and make the next step easier.</p>
        <div class="hero-ctas" style="margin-top:26px;">
          <a class="btn-primary contact-action-primary" href="mailto:sales@tracktechsolutions.com">Talk to sales</a>
          <a class="btn-ghost contact-action-secondary" href="tel:+919650613666">Call +91 96506 13666</a>
        </div>
      </div>
      <ul class="contact-list">
        <li><b>Head office</b>364, 10/5 Silicon Town, Electronic City Phase 2, Bangalore 560100</li>
        <li><b>Mail To</b><a href="mailto:Lebinesh@tracktechsolutions.com">Lebinesh@tracktechsolutions.com</a></li>
        <li><b>Phone</b><a href="tel:+919650613666">+91 96506 13666</a> , <a href="tel:+919742060606">+91 97420
            60606</a></li>
        <li><b>LinkedIn</b><a href="https://www.linkedin.com/company/track-tech-solution/" target="_blank"
            rel="noopener">linkedin.com/company/track-tech-solution</a></li>
      </ul>
    </div>
  </section>

  <footer>
    <div class="wrap">
      <div class="foot-grid">
        <div>
          <a class="brand-lockup" href="#about" aria-label="Track Tech Solution home" style="margin-bottom:14px;">
            <img class="brand-mark" src="{{ asset('assets/img/track-tech-logo.png') }}" alt="Track Tech Solution Logo">
            <span class="wordmark">Track<span>Tech</span> Solution</span>
          </a>
          <p style="max-width:36ch;">Practical software for the people who plan, make, check and ship garments every
            day.</p>
        </div>
        <div>
          <h4>Products</h4>
          <ul>
            <li><a href="#product-experience" data-product-choice="trakwel">TrakWel</a></li>
            <li><a href="#product-experience" data-product-choice="fabric-inventory">Fabric Inventory Management</a>
            </li>
            <li><a href="#product-experience" data-product-choice="cutting-digitalization">Cutting Room
                Digitalization</a></li>
            <li><a href="#product-experience" data-product-choice="tracking">Production Tracking</a></li>
            <li><a href="#product-experience" data-product-choice="quality">Quality Control</a></li>
            <li><a href="#product-experience" data-product-choice="planwel">PlanWel</a></li>
            <li><a href="#product-experience" data-product-choice="mtrak">mTrak</a></li>
            <li><a href="#product-experience" data-product-choice="sewiot">SewIoT</a></li>
            <li><a href="#product-experience" data-product-choice="laundry">Laundry Management</a></li>
            <li><a href="#product-experience" data-product-choice="jig">Jig Management</a></li>
            <li><a href="#product-experience" data-product-choice="shrinkage">Shrinkage Testing App</a></li>
          </ul>
        </div>
        <div>
          <h4>Company</h4>
          <ul>
            <li><a href="#clients">Key clients</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li><a href="mailto:Lebinesh@tracktechsolutions.com">Lebinesh@tracktechsolutions.com</a></li>
          </ul>
        </div>
      </div>
      <div class="foot-bottom">
        <span>© 2026 Track Tech Solution. All rights reserved.</span>
        <span>Made in India</span>
      </div>
    </div>
  </footer>

  <a class="whatsapp-float"
    href="https://wa.me/919650613666?text=Hello%20Track%20Tech%20Solution%2C%20I%27d%20like%20to%20know%20more%20about%20your%20solutions."
    target="_blank" rel="noopener" aria-label="Chat with Track Tech Solution on WhatsApp">
    <svg class="whatsapp-icon" viewBox="0 0 24 24" aria-hidden="true">
      <path
        d="M20 4.1A9.9 9.9 0 0 0 12.9 2C7.4 1.5 2.5 5.5 2 11a9.9 9.9 0 0 0 1.4 5.9L2 22l5.2-1.4A10 10 0 1 0 20 4.1Z" />
      <path
        d="M8.2 7.5c.2-.4.5-.4.8-.4h.6c.2 0 .4.1.5.4l.8 1.8c.1.2.1.4-.1.6l-.6.7c.7 1.3 1.7 2.3 3 3l.7-.6c.2-.2.4-.2.6-.1l1.8.8c.3.1.4.3.4.5v.6c0 .3 0 .6-.4.8-.4.2-1.1.4-1.7.3-1.5-.2-3.1-1-4.5-2.4-1.4-1.4-2.2-3-2.4-4.5-.1-.6.1-1.3.3-1.7Z" />
    </svg>
  </a>

  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>