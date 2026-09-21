<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chimtu AI — Smart. Loyal. Intelligent. Your AI assistant by Thiven.">
    <title>Chimtu AI — Smart AI. Real Results.</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --black: #0b0b0c;
            --dark: #111113;
            --dark2: #18181a;
            --cream: #f8f2e8;
            --cream2: #eee4d3;
            --gold: #d39a3a;
            --gold2: #f0bd65;
            --orange: #c87828;
            --muted: #aaa6a0;
            --line: rgba(211, 154, 58, .22);
            --white: #fff;
            --max: 1180px;
            --radius: 24px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: Inter, Arial, sans-serif;
            background: var(--black);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit
        }

        img {
            max-width: 100%;
            display: block
        }

        .container {
            width: min(var(--max), calc(100% - 40px));
            margin: auto
        }

        .gold {
            color: var(--gold2)
        }

        .section {
            padding: 105px 0;
            position: relative
        }

        .section-head {
            max-width: 720px;
            margin: 0 auto 55px;
            text-align: center
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            border: 1px solid var(--line);
            border-radius: 999px;
            color: var(--gold2);
            background: rgba(211, 154, 58, .06);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .section-head h2 {
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1.05;
            margin: 18px 0 16px;
        }

        .section-head p {
            color: var(--muted);
            font-size: 17px
        }

        /* Circuit background */
        .circuit {
            position: absolute;
            inset: 0;
            pointer-events: none;
            opacity: .45;
            background-image:
                linear-gradient(90deg, transparent 49.8%, rgba(211, 154, 58, .07) 50%, transparent 50.2%),
                linear-gradient(0deg, transparent 49.8%, rgba(211, 154, 58, .07) 50%, transparent 50.2%);
            background-size: 90px 90px;
            mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);
        }

        /* Header */
        .header {
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            right: 0;
            backdrop-filter: blur(18px);
            background: rgba(11, 11, 12, .74);
            border-bottom: 1px solid rgba(255, 255, 255, .06);
        }

        .nav {
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px
        }

        .brand-mark {
            width: 39px;
            height: 39px;
            border: 1px solid rgba(211, 154, 58, .5);
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: linear-gradient(145deg, #292624, #0e0e0f);
            color: var(--gold2);
            font-size: 18px;
            box-shadow: inset 0 0 18px rgba(211, 154, 58, .1);
        }

        .brand strong {
            font-family: "Space Grotesk";
            font-size: 19px
        }

        .brand small {
            display: block;
            color: #777;
            font-size: 8px;
            letter-spacing: .22em;
            margin-top: -3px
        }

        .nav-links {
            display: flex;
            gap: 30px;
            color: #bbb;
            font-size: 14px;
            font-weight: 600
        }

        .nav-links a:hover {
            color: var(--gold2)
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            border-radius: 12px;
            padding: 13px 19px;
            font-weight: 800;
            font-size: 13px;
            transition: .25s ease;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px)
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--gold2), var(--orange));
            color: #17110a;
            box-shadow: 0 10px 35px rgba(211, 154, 58, .18)
        }

        .btn-outline {
            border-color: rgba(255, 255, 255, .14);
            color: #eee;
            background: rgba(255, 255, 255, .03)
        }

        .menu-btn {
            display: none;
            background: none;
            border: 0;
            color: white;
            font-size: 23px
        }

        /* Hero */
        .hero {
            min-height: 900px;
            padding: 155px 0 90px;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden
        }

        .hero:before {
            content: "";
            position: absolute;
            width: 800px;
            height: 800px;
            right: -280px;
            top: 80px;
            background: radial-gradient(circle, rgba(211, 154, 58, .18), transparent 67%);
            filter: blur(20px);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.02fr .98fr;
            align-items: center;
            gap: 65px;
            position: relative;
            z-index: 2
        }

        .hero h1 {
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(52px, 7vw, 88px);
            line-height: .98;
            letter-spacing: -.055em;
            margin: 22px 0;
        }

        .hero h1 span {
            background: linear-gradient(100deg, #fff1d0, var(--gold2), #b96c25);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-copy {
            max-width: 640px;
            color: #aaa6a0;
            font-size: 18px
        }

        .hero-buttons {
            display: flex;
            gap: 13px;
            flex-wrap: wrap;
            margin: 31px 0 38px
        }

        .hero-proof {
            display: flex;
            gap: 28px;
            flex-wrap: wrap
        }

        .proof strong {
            display: block;
            font-size: 20px;
            color: #fff
        }

        .proof span {
            font-size: 11px;
            color: #777;
            text-transform: uppercase;
            letter-spacing: .11em
        }

        /* Phone */
        .phone-stage {
            position: relative;
            min-height: 620px;
            display: grid;
            place-items: center
        }

        .glow-ring {
            position: absolute;
            width: 530px;
            height: 530px;
            border-radius: 50%;
            border: 1px solid rgba(211, 154, 58, .16);
            box-shadow: 0 0 80px rgba(211, 154, 58, .07), inset 0 0 80px rgba(211, 154, 58, .05);
        }

        .glow-ring:before,
        .glow-ring:after {
            content: "";
            position: absolute;
            inset: 45px;
            border: 1px dashed rgba(211, 154, 58, .13);
            border-radius: 50%
        }

        .glow-ring:after {
            inset: 105px
        }

        .phone {
            width: 285px;
            height: 580px;
            border-radius: 43px;
            padding: 10px;
            background: linear-gradient(145deg, #4b443c, #0d0d0e 22%, #29221b 75%, #71604a);
            box-shadow: 0 35px 80px rgba(0, 0, 0, .65), 0 0 0 1px rgba(255, 255, 255, .14);
            transform: rotate(5deg);
            position: relative;
            z-index: 3;
        }

        .phone.back {
            position: absolute;
            width: 245px;
            height: 500px;
            right: 0;
            top: 80px;
            transform: rotate(13deg);
            z-index: 1;
            opacity: .76
        }

        .phone-screen {
            height: 100%;
            border-radius: 35px;
            background: #101011;
            overflow: hidden;
            padding: 20px 15px;
            color: white
        }

        .notch {
            width: 90px;
            height: 24px;
            background: #050506;
            border-radius: 20px;
            margin: -9px auto 16px;
            position: relative;
            z-index: 2
        }

        .app-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #999;
            font-size: 12px
        }

        .app-logo {
            font-family: "Space Grotesk";
            font-weight: 800;
            font-size: 20px;
            color: #eee
        }

        .app-logo i {
            color: var(--gold2);
            font-style: normal
        }

        .bot-card {
            margin-top: 35px;
            padding: 22px 14px;
            border: 1px solid rgba(211, 154, 58, .18);
            border-radius: 22px;
            background: linear-gradient(145deg, #24201b, #151516);
            text-align: center;
        }

        .bot-img {
            width: 118px;
            height: 118px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 12px;
            border: 1px solid rgba(211, 154, 58, .35);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .4);
        }

        .bot-card h4 {
            font-size: 17px
        }

        .bot-card p {
            font-size: 11px;
            color: #89847d;
            margin-top: 4px
        }

        .chat-box {
            margin-top: 16px;
            background: #f1e9dc;
            color: #222;
            border-radius: 14px;
            padding: 12px;
            font-size: 10px;
            text-align: left
        }

        .quick-tools {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-top: 18px
        }

        .quick-tools div {
            background: #1a1a1c;
            border: 1px solid #28282a;
            border-radius: 10px;
            padding: 10px 5px;
            text-align: center;
            font-size: 8px;
            color: #aaa
        }

        .quick-tools i {
            display: block;
            color: var(--gold2);
            font-size: 14px;
            margin-bottom: 4px
        }

        /* Trust */
        .trust {
            border-top: 1px solid rgba(255, 255, 255, .06);
            border-bottom: 1px solid rgba(255, 255, 255, .06);
            background: #0f0f10
        }

        .trust-inner {
            min-height: 110px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px
        }

        .trust-label {
            color: #666;
            font-size: 11px;
            letter-spacing: .18em;
            text-transform: uppercase
        }

        .trust-items {
            display: flex;
            gap: 50px;
            color: #777;
            font-family: "Space Grotesk";
            font-weight: 700
        }

        .trust-items span {
            display: flex;
            align-items: center;
            gap: 8px
        }

        /* Features */
        .features {
            background: linear-gradient(180deg, #111112, #0b0b0c)
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px
        }

        .feature {
            min-height: 245px;
            padding: 29px;
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 22px;
            background: linear-gradient(145deg, rgba(255, 255, 255, .045), rgba(255, 255, 255, .012));
            transition: .3s;
            position: relative;
            overflow: hidden;
        }

        .feature:hover {
            transform: translateY(-6px);
            border-color: rgba(211, 154, 58, .3);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .2)
        }

        .feature:after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            right: -50px;
            bottom: -50px;
            background: radial-gradient(circle, rgba(211, 154, 58, .12), transparent 70%)
        }

        .icon {
            width: 49px;
            height: 49px;
            border-radius: 15px;
            display: grid;
            place-items: center;
            color: var(--gold2);
            background: rgba(211, 154, 58, .08);
            border: 1px solid rgba(211, 154, 58, .2);
            font-size: 19px;
        }

        .feature h3 {
            font-family: "Space Grotesk";
            margin: 23px 0 9px;
            font-size: 20px
        }

        .feature p {
            font-size: 13px;
            color: #89847d
        }

        /* Showcase */
        .showcase {
            background: var(--cream);
            color: #171717
        }

        .showcase .section-head p {
            color: #68625b
        }

        .showcase-grid {
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 70px;
            align-items: center
        }

        .showcase-copy h3 {
            font-family: "Space Grotesk";
            font-size: clamp(35px, 5vw, 57px);
            line-height: 1.02;
            margin: 18px 0
        }

        .showcase-copy p {
            color: #65615a;
            font-size: 16px
        }

        .checks {
            display: grid;
            gap: 13px;
            margin: 26px 0
        }

        .check {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            font-size: 14px
        }

        .check i {
            color: #a96d25;
            margin-top: 4px
        }

        .dashboard {
            background: #171719;
            border-radius: 27px;
            padding: 14px;
            box-shadow: 0 30px 70px rgba(35, 26, 15, .25);
            transform: rotate(-2deg);
        }

        .dashboard-inner {
            background: #0e0e0f;
            border-radius: 20px;
            padding: 22px
        }

        .dash-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px
        }

        .dash-title {
            font-family: "Space Grotesk";
            font-size: 18px
        }

        .dash-grid {
            display: grid;
            grid-template-columns: 1.25fr .75fr;
            gap: 13px
        }

        .dash-card {
            border: 1px solid #262629;
            border-radius: 16px;
            padding: 17px;
            background: #151517
        }

        .dash-card h4 {
            font-size: 12px;
            color: #888;
            margin-bottom: 15px
        }

        .chart {
            height: 135px;
            display: flex;
            align-items: end;
            gap: 8px
        }

        .bar {
            flex: 1;
            border-radius: 5px 5px 2px 2px;
            background: linear-gradient(to top, #9b5f1d, var(--gold2));
            height: var(--h)
        }

        .metric {
            font-size: 28px;
            font-weight: 800
        }

        .metric small {
            font-size: 10px;
            color: #777;
            font-weight: 500
        }

        .activity {
            display: grid;
            gap: 10px
        }

        .activity div {
            display: flex;
            justify-content: space-between;
            color: #aaa;
            font-size: 10px;
            padding-bottom: 9px;
            border-bottom: 1px solid #242426
        }

        .activity b {
            color: #eee
        }

        /* Use cases */
        .use-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px
        }

        .use {
            padding: 25px 20px;
            border-radius: 20px;
            background: #131315;
            border: 1px solid #242426;
            text-align: center;
            transition: .25s;
        }

        .use:hover {
            border-color: rgba(211, 154, 58, .3);
            transform: translateY(-4px)
        }

        .use i {
            font-size: 25px;
            color: var(--gold2);
            margin-bottom: 16px
        }

        .use h3 {
            font-family: "Space Grotesk";
            font-size: 16px
        }

        .use p {
            font-size: 12px;
            color: #777;
            margin-top: 5px
        }

        /* CTA */
        .cta {
            padding: 110px 0;
            background:
                radial-gradient(circle at 50% 0, rgba(211, 154, 58, .17), transparent 42%),
                #111112;
            text-align: center;
            position: relative;
            overflow: hidden
        }

        .cta h2 {
            font-family: "Space Grotesk";
            font-size: clamp(40px, 6vw, 70px);
            line-height: 1;
            margin: 18px auto;
            max-width: 850px
        }

        .cta p {
            max-width: 600px;
            margin: auto;
            color: #89847d
        }

        .store-buttons {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 30px
        }

        .store {
            min-width: 180px;
            padding: 14px 19px;
            border-radius: 14px;
            background: #0a0a0b;
            border: 1px solid #2a2927;
            display: flex;
            align-items: center;
            gap: 12px;
            text-align: left;
        }

        .store i {
            font-size: 28px
        }

        .store small {
            display: block;
            color: #777;
            font-size: 9px
        }

        .store strong {
            font-size: 13px
        }

        /* FAQ */
        .faq {
            background: #f7f1e8;
            color: #181716
        }

        .faq .section-head p {
            color: #6d675f
        }

        .faq-list {
            max-width: 850px;
            margin: auto;
            display: grid;
            gap: 10px
        }

        details {
            background: #fff;
            border: 1px solid #e1d7c7;
            border-radius: 15px;
            padding: 19px 21px
        }

        summary {
            cursor: pointer;
            font-weight: 800;
            font-family: "Space Grotesk";
            list-style: none;
            display: flex;
            justify-content: space-between;
            gap: 20px
        }

        summary:after {
            content: "+";
            color: #a96d25;
            font-size: 20px
        }

        details[open] summary:after {
            content: "−"
        }

        details p {
            color: #69635c;
            font-size: 14px;
            padding: 13px 28px 2px 0
        }

        /* Footer */
        .footer {
            background: #09090a;
            border-top: 1px solid rgba(255, 255, 255, .06);
            padding: 65px 0 25px
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr .7fr .7fr .9fr;
            gap: 50px
        }

        .footer-brand p {
            color: #6f6b66;
            font-size: 13px;
            max-width: 330px;
            margin: 18px 0
        }

        .footer h4 {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .13em;
            color: #eee;
            margin-bottom: 17px
        }

        .footer ul {
            list-style: none;
            display: grid;
            gap: 10px;
            color: #6f6b66;
            font-size: 13px
        }

        .footer li a:hover {
            color: var(--gold2)
        }

        .social {
            display: flex;
            gap: 9px;
            margin-top: 17px
        }

        .social a {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            border: 1px solid #29292a;
            color: #888
        }

        .social a:hover {
            color: var(--gold2);
            border-color: rgba(211, 154, 58, .3)
        }

        .footer-bottom {
            margin-top: 55px;
            padding-top: 20px;
            border-top: 1px solid #1b1b1c;
            color: #555;
            font-size: 11px;
            display: flex;
            justify-content: space-between;
            gap: 15px
        }

        /* Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(25px);
            transition: .7s ease
        }

        .reveal.visible {
            opacity: 1;
            transform: none
        }

        @media(max-width:950px) {

            .nav-links,
            .nav-actions .btn-outline {
                display: none
            }

            .menu-btn {
                display: block
            }

            .hero-grid,
            .showcase-grid {
                grid-template-columns: 1fr
            }

            .hero {
                padding-top: 125px
            }

            .hero-copy {
                margin: auto
            }

            .hero-content {
                text-align: center
            }

            .hero-buttons,
            .hero-proof {
                justify-content: center
            }

            .phone-stage {
                min-height: 590px
            }

            .feature-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .use-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .trust-inner {
                flex-direction: column;
                justify-content: center;
                padding: 25px 0
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media(max-width:600px) {
            .container {
                width: min(var(--max), calc(100% - 28px))
            }

            .section {
                padding: 75px 0
            }

            .hero {
                min-height: auto;
                padding: 120px 0 60px
            }

            .hero h1 {
                font-size: 50px
            }

            .hero-copy {
                font-size: 15px
            }

            .hero-proof {
                gap: 18px
            }

            .phone-stage {
                min-height: 500px;
                transform: scale(.88);
                margin: -20px 0
            }

            .phone {
                width: 250px;
                height: 510px
            }

            .phone.back {
                width: 210px;
                height: 440px;
                right: -18px
            }

            .glow-ring {
                width: 420px;
                height: 420px
            }

            .feature-grid,
            .use-grid {
                grid-template-columns: 1fr
            }

            .dash-grid {
                grid-template-columns: 1fr
            }

            .showcase-grid {
                gap: 40px
            }

            .dashboard {
                transform: none
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px
            }

            .footer-brand {
                grid-column: 1/-1
            }

            .footer-bottom {
                flex-direction: column
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container nav">
            <a href="#" class="brand">
                <div class="brand-mark"><i class="fa-solid fa-bolt"></i></div>
                <div><strong>Chimtu<span class="gold">ai</span></strong><small>AI ASSISTANT BY THIVEN</small></div>
            </a>
            <nav class="nav-links">
                <a href="#features">Features</a>
                <a href="#experience">Experience</a>
                <a href="#use-cases">Use Cases</a>
                <a href="#faq">FAQ</a>
            </nav>
            <div class="nav-actions">
                <a class="btn btn-outline" href="#experience">Explore</a>
                <a class="btn btn-primary" href="#download">Get Chimtu AI <i class="fa-solid fa-arrow-right"></i></a>
                <button class="menu-btn" aria-label="Menu"><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="circuit"></div>
            <div class="container hero-grid">
                <div class="hero-content reveal">
                    <span class="eyebrow"><i class="fa-solid fa-sparkles"></i> Smart. Loyal. Intelligent.</span>
                    <h1>Your AI assistant for <span>real results.</span></h1>
                    <p class="hero-copy">
                        Chimtu AI understands what you need, helps you create, analyze, automate and get things done —
                        faster, smarter and better.
                    </p>
                    <div class="hero-buttons">
                        <a class="btn btn-primary" href="#download"><i class="fa-solid fa-download"></i> Get Chimtu
                            AI</a>
                        <a class="btn btn-outline" href="#features"><i class="fa-solid fa-play"></i> Explore
                            Features</a>
                    </div>
                    <div class="hero-proof">
                        <div class="proof"><strong>24/7</strong><span>AI Assistance</span></div>
                        <div class="proof"><strong>10+</strong><span>Smart Tools</span></div>
                        <div class="proof"><strong>1 App</strong><span>For Everything</span></div>
                    </div>
                </div>

                <div class="phone-stage reveal">
                    <div class="glow-ring"></div>

                    <div class="phone back">
                        <div class="phone-screen">
                            <div class="notch"></div>
                            <div class="app-top"><span>9:41</span><span><i class="fa-solid fa-wifi"></i> &nbsp;
                                    92%</span></div>
                            <div style="margin-top:28px;color:#aaa;font-size:12px;">New Chat</div>
                            <div class="chat-box" style="margin-top:25px">Explain quantum computing in simple terms.
                            </div>
                            <div class="chat-box" style="background:#211f1c;color:#ddd">Quantum computing uses quantum
                                bits (qubits) that can exist in multiple states at once...</div>
                        </div>
                    </div>

                    <div class="phone">
                        <div class="phone-screen">
                            <div class="notch"></div>
                            <div class="app-top">
                                <span>9:41</span><span><i class="fa-solid fa-wifi"></i> &nbsp; 92%</span>
                            </div>
                            <div style="margin-top:12px;display:flex;justify-content:space-between;align-items:center">
                                <div class="app-logo">Chimtu<i>ai</i></div>
                                <i class="fa-regular fa-bell" style="color:#888"></i>
                            </div>
                            <div class="bot-card">
                                <img src="data:image/jpeg;base64,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"
                                    class="bot-img" alt="Chimtu AI mascot">
                                <h4>👋 Hello, there!</h4>
                                <p>How can I help you today?</p>
                                <div class="chat-box">Ask me anything...</div>
                            </div>
                            <div class="quick-tools">
                                <div><i class="fa-solid fa-pen"></i>Write</div>
                                <div><i class="fa-solid fa-align-left"></i>Summarize</div>
                                <div><i class="fa-solid fa-language"></i>Translate</div>
                                <div><i class="fa-solid fa-lightbulb"></i>Brainstorm</div>
                                <div><i class="fa-solid fa-circle-info"></i>Explain</div>
                                <div><i class="fa-solid fa-ellipsis"></i>More</div>
                            </div>
                            <div style="margin-top:20px;color:#6d6963;font-size:9px;">Recent Conversations</div>
                            <div style="margin-top:8px;font-size:9px;color:#999;line-height:2.1">
                                Marketing Strategy for Launch<br>
                                Blog Outline: AI in Business<br>
                                Productivity Tips Summary
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trust">
            <div class="container trust-inner">
                <div class="trust-label">Built for everyone</div>
                <div class="trust-items">
                    <span><i class="fa-solid fa-graduation-cap"></i> Students</span>
                    <span><i class="fa-solid fa-briefcase"></i> Professionals</span>
                    <span><i class="fa-solid fa-store"></i> Businesses</span>
                    <span><i class="fa-solid fa-code"></i> Developers</span>
                    <span><i class="fa-solid fa-heart"></i> Everyone</span>
                </div>
            </div>
        </section>

        <section class="section features" id="features">
            <div class="circuit"></div>
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow">Powerful Features</span>
                    <h2>One assistant. <span class="gold">Many possibilities.</span></h2>
                    <p>From quick answers to serious work, Chimtu AI brings intelligent tools together in one simple
                        experience.</p>
                </div>
                <div class="feature-grid">
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-comments"></i></div>
                        <h3>AI Chat Assistant</h3>
                        <p>Natural conversations, instant answers and useful help whenever you need it.</p>
                    </article>
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-microphone"></i></div>
                        <h3>Voice & Image Input</h3>
                        <p>Speak, upload or share visual information to get intelligent responses.</p>
                    </article>
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-grid-2"></i></div>
                        <h3>Multi-Function Tools</h3>
                        <p>Summarize, translate, rewrite, explain, brainstorm and much more.</p>
                    </article>
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-user-check"></i></div>
                        <h3>Personalized Experience</h3>
                        <p>Chimtu learns how you work so assistance becomes more relevant over time.</p>
                    </article>
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <h3>Secure & Private</h3>
                        <p>Designed with privacy and responsible handling of your information in mind.</p>
                    </article>
                    <article class="feature reveal">
                        <div class="icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h3>Smart Automation</h3>
                        <p>Reduce repetitive work and turn everyday tasks into faster workflows.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section showcase" id="experience">
            <div class="container">
                <div class="showcase-grid">
                    <div class="showcase-copy reveal">
                        <span class="eyebrow">Work Smarter</span>
                        <h3>Turn ideas into <span style="color:#b56f26">action.</span></h3>
                        <p>Chimtu AI is more than a chat window. Use one intelligent workspace to think, create,
                            understand information and move from question to result.</p>
                        <div class="checks">
                            <div class="check"><i class="fa-solid fa-circle-check"></i><span><b>Write faster.</b> Create
                                    blogs, emails, captions and content.</span></div>
                            <div class="check"><i class="fa-solid fa-circle-check"></i><span><b>Understand better.</b>
                                    Simplify complex topics and documents.</span></div>
                            <div class="check"><i class="fa-solid fa-circle-check"></i><span><b>Decide smarter.</b>
                                    Analyze information and discover useful insights.</span></div>
                            <div class="check"><i class="fa-solid fa-circle-check"></i><span><b>Save time.</b> Automate
                                    repetitive tasks and workflows.</span></div>
                        </div>
                        <a class="btn btn-primary" href="#download">Start with Chimtu AI <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="dashboard reveal">
                        <div class="dashboard-inner">
                            <div class="dash-top">
                                <div class="dash-title">Chimtu AI <span class="gold">Insights</span></div>
                                <span style="font-size:10px;color:#777">Today <i
                                        class="fa-solid fa-chevron-down"></i></span>
                            </div>
                            <div class="dash-grid">
                                <div class="dash-card">
                                    <h4>ACTIVITY OVERVIEW</h4>
                                    <div class="metric">84% <small>productivity</small></div>
                                    <div class="chart">
                                        <div class="bar" style="--h:35%"></div>
                                        <div class="bar" style="--h:50%"></div>
                                        <div class="bar" style="--h:42%"></div>
                                        <div class="bar" style="--h:72%"></div>
                                        <div class="bar" style="--h:62%"></div>
                                        <div class="bar" style="--h:88%"></div>
                                        <div class="bar" style="--h:78%"></div>
                                    </div>
                                </div>
                                <div class="dash-card">
                                    <h4>RECENT AI TASKS</h4>
                                    <div class="activity">
                                        <div><span>Summarize</span><b>Done</b></div>
                                        <div><span>Translate</span><b>Done</b></div>
                                        <div><span>Write email</span><b>Done</b></div>
                                        <div><span>Analyze data</span><b>Done</b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-card" style="margin-top:13px">
                                <h4>AI ASSISTANT</h4>
                                <div style="display:flex;gap:12px;align-items:center">
                                    <img src="data:image/jpeg;base64,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"
                                        style="width:54px;height:54px;border-radius:15px;object-fit:cover" alt="">
                                    <div><b style="font-size:12px">Ready when you are.</b>
                                        <p style="font-size:10px;color:#777">Ask, create, analyze or automate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="use-cases">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow">Built For Everyone</span>
                    <h2>Whatever you do, <span class="gold">Chimtu helps.</span></h2>
                    <p>Bring intelligent assistance into the moments that matter.</p>
                </div>
                <div class="use-grid">
                    <div class="use reveal"><i class="fa-solid fa-graduation-cap"></i>
                        <h3>Students</h3>
                        <p>Learn better and faster.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-briefcase"></i>
                        <h3>Professionals</h3>
                        <p>Work smarter and save time.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-shop"></i>
                        <h3>Businesses</h3>
                        <p>Automate and grow with AI.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-code"></i>
                        <h3>Developers</h3>
                        <p>Build, code and innovate.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-pen-nib"></i>
                        <h3>Creators</h3>
                        <p>Turn ideas into content.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-chart-line"></i>
                        <h3>Analysts</h3>
                        <p>Find insights faster.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-language"></i>
                        <h3>Communicators</h3>
                        <p>Write and translate with ease.</p>
                    </div>
                    <div class="use reveal"><i class="fa-solid fa-heart"></i>
                        <h3>Everyone</h3>
                        <p>Simplify everyday life.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta" id="download">
            <div class="container reveal">
                <span class="eyebrow">Your Smart AI Assistant</span>
                <h2>Think smart. Work smart. <span class="gold">Grow smart.</span></h2>
                <p>Start using Chimtu AI and put an intelligent assistant in your pocket, on your desktop and wherever
                    your work happens.</p>
                <div class="store-buttons">
                    <a href="#" class="store"><i class="fa-brands fa-google-play"></i>
                        <div><small>GET IT ON</small><strong>Google Play</strong></div>
                    </a>
                    <a href="#" class="store"><i class="fa-brands fa-apple"></i>
                        <div><small>DOWNLOAD ON THE</small><strong>App Store</strong></div>
                    </a>
                    <a href="#" class="btn btn-primary" style="padding:17px 22px">Join Chimtu AI <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="section faq" id="faq">
            <div class="container">
                <div class="section-head reveal">
                    <span class="eyebrow">FAQ</span>
                    <h2>Questions, <span style="color:#b56f26">answered.</span></h2>
                    <p>Quick answers to common questions about Chimtu AI.</p>
                </div>
                <div class="faq-list">
                    <details class="reveal">
                        <summary>What is Chimtu AI?</summary>
                        <p>Chimtu AI is an intelligent assistant designed to help you chat, create content, understand
                            information, generate ideas and complete everyday tasks.</p>
                    </details>
                    <details class="reveal">
                        <summary>Who can use Chimtu AI?</summary>
                        <p>Chimtu AI is designed for students, professionals, businesses, developers, creators and
                            anyone who wants practical AI assistance.</p>
                    </details>
                    <details class="reveal">
                        <summary>Can I use voice and images?</summary>
                        <p>The landing page is prepared to showcase voice and image input. Connect these buttons to your
                            application's actual capabilities and API flows.</p>
                    </details>
                    <details class="reveal">
                        <summary>Where can I download it?</summary>
                        <p>Add your live Google Play and App Store URLs to the store buttons in this page. The current
                            buttons are placeholders.</p>
                    </details>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="brand">
                        <div class="brand-mark"><i class="fa-solid fa-bolt"></i></div>
                        <div><strong>Chimtu<span class="gold">ai</span></strong><small>AI ASSISTANT BY THIVEN</small>
                        </div>
                    </a>
                    <p>Smart. Loyal. Intelligent. An AI assistant built by Thiven to help people work, create and live
                        smarter.</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
                <div>
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#download">Download</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Thiven</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="mailto:hello@thiven.com">hello@thiven.com</a></li>
                        <li><a href="https://www.thiven.com" target="_blank">www.thiven.com</a></li>
                        <li>AI Assistant by Thiven</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom"><span>© 2026 Thiven. All rights reserved.</span><span>Chimtu AI • Smart. Loyal.
                    Intelligent.</span></div>
        </div>
    </footer>

    <script>
        const reveals = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: .12 });
        reveals.forEach(el => observer.observe(el));

        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', e => {
                const target = document.querySelector(link.getAttribute('href'));
                if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
            });
        });
    </script>
</body>

</html>