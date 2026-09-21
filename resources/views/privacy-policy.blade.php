<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Privacy Policy | Chimtu AI</title>

    <meta name="description" content="Privacy Policy for Chimtu AI - AI Assistant by Thiven.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --black: #09090a;
            --dark: #101011;
            --dark-2: #151516;
            --dark-3: #1b1b1d;

            --cream: #f8f2e8;
            --cream-2: #eee4d3;

            --gold: #d39a3a;
            --gold-light: #f0bd65;
            --orange: #c87828;

            --white: #ffffff;
            --text: #d7d3cc;
            --muted: #918d87;

            --border: rgba(255, 255, 255, .08);
            --gold-border: rgba(211, 154, 58, .25);

            --container: 1180px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", sans-serif;
            background: var(--black);
            color: var(--text);
            line-height: 1.75;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(var(--container), calc(100% - 40px));
            margin: auto;
        }

        /* ========================================
           HEADER
        ======================================== */

        .header {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(9, 9, 10, .88);
            backdrop-filter: blur(18px);

            border-bottom: 1px solid var(--border);
        }

        .nav {
            height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 30px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;

            border-radius: 12px;

            display: grid;
            place-items: center;

            color: var(--gold-light);

            border: 1px solid rgba(211, 154, 58, .45);

            background:
                linear-gradient(145deg,
                    #292624,
                    #0d0d0e);

            box-shadow:
                inset 0 0 20px rgba(211, 154, 58, .08);
        }

        .brand-name {
            font-family: "Space Grotesk", sans-serif;
            font-size: 19px;
            font-weight: 700;
            color: white;
        }

        .brand-name span {
            color: var(--gold-light);
        }

        .brand-sub {
            display: block;
            margin-top: -5px;

            font-size: 8px;
            letter-spacing: .2em;
            color: #777;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;

            color: #999;
            font-size: 13px;
            font-weight: 600;
        }

        .nav-links a {
            transition: .2s;
        }

        .nav-links a:hover {
            color: var(--gold-light);
        }

        .nav-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 11px 17px;

            border-radius: 11px;

            background:
                linear-gradient(135deg,
                    var(--gold-light),
                    var(--orange));

            color: #17110a;

            font-size: 12px;
            font-weight: 800;
        }

        /* ========================================
           HERO
        ======================================== */

        .page-hero {
            position: relative;

            padding: 100px 0 75px;

            overflow: hidden;

            text-align: center;

            border-bottom: 1px solid var(--border);
        }

        .page-hero::before {
            content: "";

            position: absolute;

            width: 700px;
            height: 500px;

            left: 50%;
            top: -260px;

            transform: translateX(-50%);

            background:
                radial-gradient(circle,
                    rgba(211, 154, 58, .18),
                    transparent 68%);

            pointer-events: none;
        }

        .page-hero::after {
            content: "";

            position: absolute;

            inset: 0;

            opacity: .18;

            background-image:
                linear-gradient(90deg,
                    transparent 49.5%,
                    rgba(211, 154, 58, .12) 50%,
                    transparent 50.5%),
                linear-gradient(0deg,
                    transparent 49.5%,
                    rgba(211, 154, 58, .12) 50%,
                    transparent 50.5%);

            background-size: 90px 90px;

            mask-image:
                linear-gradient(to bottom,
                    transparent,
                    black,
                    transparent);

            pointer-events: none;
        }

        .page-hero-content {
            position: relative;
            z-index: 2;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 14px;

            border: 1px solid var(--gold-border);

            border-radius: 999px;

            background: rgba(211, 154, 58, .05);

            color: var(--gold-light);

            font-size: 11px;
            font-weight: 800;

            letter-spacing: .15em;
            text-transform: uppercase;
        }

        .page-hero h1 {
            margin: 22px 0 15px;

            font-family: "Space Grotesk", sans-serif;

            font-size: clamp(45px, 7vw, 76px);

            line-height: 1;

            letter-spacing: -.05em;

            color: white;
        }

        .page-hero h1 span {
            color: var(--gold-light);
        }

        .page-hero p {
            max-width: 680px;
            margin: auto;

            color: var(--muted);

            font-size: 16px;
        }

        .updated {
            display: inline-block;

            margin-top: 18px;

            color: #666;

            font-size: 11px;
        }

        /* ========================================
           MAIN
        ======================================== */

        .legal-section {
            padding: 80px 0 110px;
        }

        .legal-layout {
            display: grid;

            grid-template-columns: 250px 1fr;

            gap: 30px;

            align-items: start;
        }

        /* ========================================
           SIDEBAR
        ======================================== */

        .legal-sidebar {
            position: sticky;
            top: 105px;

            padding: 20px;

            background: var(--dark);

            border: 1px solid var(--border);

            border-radius: 20px;
        }

        .sidebar-title {
            margin-bottom: 14px;

            color: #777;

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: .15em;
        }

        .legal-sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;

            padding: 10px 12px;

            border-radius: 9px;

            color: #8c8983;

            font-size: 12px;

            transition: .2s;
        }

        .legal-sidebar a i {
            width: 15px;

            color: #6d6962;

            font-size: 11px;
        }

        .legal-sidebar a:hover,
        .legal-sidebar a.active {
            color: var(--gold-light);

            background: rgba(211, 154, 58, .07);
        }

        .legal-sidebar a:hover i,
        .legal-sidebar a.active i {
            color: var(--gold-light);
        }

        /* ========================================
           POLICY CONTENT
        ======================================== */

        .policy-content {
            min-width: 0;
        }

        .policy-card {
            padding: 42px;

            background:
                linear-gradient(145deg,
                    rgba(255, 255, 255, .035),
                    rgba(255, 255, 255, .012));

            border: 1px solid var(--border);

            border-radius: 24px;
        }

        .policy-intro {
            display: flex;
            align-items: flex-start;
            gap: 18px;

            padding: 22px;

            margin-bottom: 35px;

            background: rgba(211, 154, 58, .055);

            border: 1px solid var(--gold-border);

            border-radius: 17px;
        }

        .intro-icon {
            flex: 0 0 45px;

            width: 45px;
            height: 45px;

            display: grid;
            place-items: center;

            border-radius: 13px;

            background: rgba(211, 154, 58, .1);

            border: 1px solid var(--gold-border);

            color: var(--gold-light);
        }

        .policy-intro h3 {
            margin-bottom: 4px;

            font-family: "Space Grotesk", sans-serif;

            font-size: 17px;

            color: white;
        }

        .policy-intro p {
            color: #8d8982;

            font-size: 13px;
        }

        .policy-block {
            padding: 32px 0;

            border-bottom: 1px solid rgba(255, 255, 255, .06);
        }

        .policy-block:first-of-type {
            padding-top: 0;
        }

        .policy-block:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .policy-block h2 {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 14px;

            font-family: "Space Grotesk", sans-serif;

            font-size: 24px;

            line-height: 1.25;

            color: white;
        }

        .number {
            width: 32px;
            height: 32px;

            flex: 0 0 32px;

            display: grid;
            place-items: center;

            border-radius: 9px;

            background: rgba(211, 154, 58, .08);

            border: 1px solid var(--gold-border);

            color: var(--gold-light);

            font-size: 11px;
            font-weight: 800;
        }

        .policy-block p {
            margin-bottom: 13px;

            color: #98938c;

            font-size: 14px;
        }

        .policy-block ul {
            display: grid;
            gap: 9px;

            margin: 15px 0 5px;
            padding-left: 0;

            list-style: none;
        }

        .policy-block li {
            position: relative;

            padding-left: 24px;

            color: #98938c;

            font-size: 14px;
        }

        .policy-block li::before {
            content: "";

            position: absolute;

            width: 6px;
            height: 6px;

            left: 3px;
            top: 10px;

            border-radius: 50%;

            background: var(--gold);
        }

        .highlight {
            color: var(--gold-light);
        }

        .contact-box {
            margin-top: 18px;

            padding: 22px;

            border-radius: 16px;

            background: #0c0c0d;

            border: 1px solid #29292b;
        }

        .contact-box div {
            display: flex;
            align-items: center;
            gap: 12px;

            color: #aaa;

            font-size: 13px;

            margin: 9px 0;
        }

        .contact-box i {
            width: 28px;
            height: 28px;

            display: grid;
            place-items: center;

            border-radius: 8px;

            color: var(--gold-light);

            background: rgba(211, 154, 58, .08);
        }

        /* ========================================
           BOTTOM CTA
        ======================================== */

        .policy-cta {
            margin-top: 28px;

            padding: 32px;

            border-radius: 20px;

            text-align: center;

            background:
                radial-gradient(circle at 50% 0,
                    rgba(211, 154, 58, .14),
                    transparent 55%),
                #111113;

            border: 1px solid var(--gold-border);
        }

        .policy-cta h3 {
            font-family: "Space Grotesk", sans-serif;

            color: white;

            font-size: 25px;

            margin-bottom: 7px;
        }

        .policy-cta p {
            color: #777;

            font-size: 13px;

            margin-bottom: 18px;
        }

        .cta-buttons {
            display: flex;

            justify-content: center;

            gap: 10px;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            padding: 12px 18px;

            border-radius: 11px;

            font-size: 12px;
            font-weight: 800;
        }

        .btn-primary {
            background:
                linear-gradient(135deg,
                    var(--gold-light),
                    var(--orange));

            color: #17110a;
        }

        .btn-outline {
            color: #eee;

            border: 1px solid #333;

            background: #171719;
        }

        /* ========================================
           FOOTER
        ======================================== */

        footer {
            padding: 55px 0 25px;

            background: #070708;

            border-top: 1px solid var(--border);
        }

        .footer-grid {
            display: grid;

            grid-template-columns: 1.5fr .7fr .7fr .9fr;

            gap: 45px;
        }

        .footer-about p {
            max-width: 330px;

            margin-top: 17px;

            color: #666;

            font-size: 12px;
        }

        footer h4 {
            margin-bottom: 15px;

            color: white;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: .13em;
        }

        footer ul {
            list-style: none;

            display: grid;

            gap: 9px;
        }

        footer li,
        footer li a {
            color: #666;

            font-size: 12px;
        }

        footer li a:hover {
            color: var(--gold-light);
        }

        .footer-bottom {
            display: flex;

            justify-content: space-between;

            gap: 20px;

            margin-top: 45px;

            padding-top: 20px;

            border-top: 1px solid #181819;

            color: #4e4d4a;

            font-size: 10px;
        }

        /* ========================================
           RESPONSIVE
        ======================================== */

        @media(max-width:900px) {

            .nav-links {
                display: none;
            }

            .legal-layout {
                grid-template-columns: 1fr;
            }

            .legal-sidebar {
                position: static;

                display: flex;

                flex-wrap: wrap;

                gap: 4px;
            }

            .sidebar-title {
                width: 100%;
            }

            .legal-sidebar a {
                flex: 1 1 180px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media(max-width:600px) {

            .container {
                width: min(100% - 28px, var(--container));
            }

            .nav {
                height: 68px;
            }

            .nav-button {
                padding: 9px 12px;
                font-size: 10px;
            }

            .page-hero {
                padding: 75px 0 55px;
            }

            .page-hero h1 {
                font-size: 45px;
            }

            .page-hero p {
                font-size: 14px;
            }

            .legal-section {
                padding: 50px 0 70px;
            }

            .policy-card {
                padding: 25px 20px;
                border-radius: 18px;
            }

            .policy-intro {
                padding: 17px;
            }

            .policy-block {
                padding: 27px 0;
            }

            .policy-block h2 {
                font-size: 20px;
            }

            .policy-block p,
            .policy-block li {
                font-size: 13px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }

            .footer-about {
                grid-column: 1 / -1;
            }

            .footer-bottom {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- ========================================
     HEADER
======================================== -->

    <header class="header">

        <div class="container nav">

            <a href="{{ url('/') }}" class="brand">

                <div class="brand-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div>
                    <div class="brand-name">
                        Chimtu<span>ai</span>
                    </div>

                    <span class="brand-sub">
                        AI ASSISTANT BY THIVEN
                    </span>
                </div>

            </a>


            <nav class="nav-links">

                <a href="{{ url('/') }}">Home</a>

                <a href="{{ url('/') }}#features">
                    Features
                </a>

                <a href="{{ url('/') }}#experience">
                    Experience
                </a>

                <a href="{{ url('/') }}#faq">
                    FAQ
                </a>

            </nav>


            <a href="{{ url('/') }}#download" class="nav-button">
                Get Chimtu AI
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </header>


    <!-- ========================================
     HERO
======================================== -->

    <section class="page-hero">

        <div class="container page-hero-content">

            <span class="eyebrow">
                <i class="fa-solid fa-shield-halved"></i>
                Privacy & Security
            </span>

            <h1>
                Privacy <span>Policy</span>
            </h1>

            <p>
                Your privacy matters to us. Learn how Chimtu AI
                collects, uses, protects and manages information
                when you use our services.
            </p>

            <span class="updated">
                Last Updated: September 21, 2026
            </span>

        </div>

    </section>


    <!-- ========================================
     POLICY CONTENT
======================================== -->

    <section class="legal-section">

        <div class="container legal-layout">


            <!-- SIDEBAR -->

            <aside class="legal-sidebar">

                <div class="sidebar-title">
                    On This Page
                </div>

                <a href="#introduction" class="active">
                    <i class="fa-solid fa-circle-info"></i>
                    Introduction
                </a>

                <a href="#information">
                    <i class="fa-solid fa-database"></i>
                    Information We Collect
                </a>

                <a href="#usage">
                    <i class="fa-solid fa-gears"></i>
                    How We Use Information
                </a>

                <a href="#sharing">
                    <i class="fa-solid fa-share-nodes"></i>
                    Information Sharing
                </a>

                <a href="#security">
                    <i class="fa-solid fa-shield"></i>
                    Data Security
                </a>

                <a href="#rights">
                    <i class="fa-solid fa-user-check"></i>
                    Your Rights
                </a>

                <a href="#children">
                    <i class="fa-solid fa-child"></i>
                    Children's Privacy
                </a>

                <a href="#changes">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    Policy Changes
                </a>

                <a href="#contact">
                    <i class="fa-solid fa-envelope"></i>
                    Contact Us
                </a>

            </aside>


            <!-- CONTENT -->

            <div class="policy-content">

                <div class="policy-card">


                    <!-- INTRO -->

                    <div class="policy-intro">

                        <div class="intro-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <div>

                            <h3>
                                Your data. Your trust. Our responsibility.
                            </h3>

                            <p>
                                This Privacy Policy explains how
                                Chimtu AI by Thiven handles information
                                associated with your use of the platform.
                            </p>

                        </div>

                    </div>


                    <!-- 01 -->

                    <div class="policy-block" id="introduction">

                        <h2>
                            <span class="number">01</span>
                            Introduction
                        </h2>

                        <p>
                            Welcome to Chimtu AI, an AI assistant
                            provided by Thiven. We respect your privacy
                            and are committed to protecting information
                            that you provide while using our application,
                            website and related services.
                        </p>

                        <p>
                            By using Chimtu AI, you acknowledge that
                            you have read and understood this Privacy
                            Policy.
                        </p>

                    </div>


                    <!-- 02 -->

                    <div class="policy-block" id="information">

                        <h2>
                            <span class="number">02</span>
                            Information We Collect
                        </h2>

                        <p>
                            Depending on how you use Chimtu AI, we may
                            collect information such as:
                        </p>

                        <ul>

                            <li>
                                Account information such as your name,
                                email address and profile details.
                            </li>

                            <li>
                                Content you submit to the AI assistant,
                                such as messages, prompts, documents,
                                images or other inputs.
                            </li>

                            <li>
                                Technical information such as device
                                type, operating system, browser and
                                application version.
                            </li>

                            <li>
                                Usage information relating to features
                                and interactions with our services.
                            </li>

                            <li>
                                Information you voluntarily provide when
                                contacting our support team.
                            </li>

                        </ul>

                    </div>


                    <!-- 03 -->

                    <div class="policy-block" id="usage">

                        <h2>
                            <span class="number">03</span>
                            How We Use Information
                        </h2>

                        <p>
                            Information may be used to provide, operate
                            and improve Chimtu AI and its features.
                        </p>

                        <ul>

                            <li>
                                Provide AI responses and requested
                                functionality.
                            </li>

                            <li>
                                Maintain and manage your account.
                            </li>

                            <li>
                                Improve application performance and
                                user experience.
                            </li>

                            <li>
                                Provide customer support.
                            </li>

                            <li>
                                Detect abuse, fraud, security incidents
                                and unauthorized activity.
                            </li>

                            <li>
                                Communicate important service updates.
                            </li>

                        </ul>

                    </div>


                    <!-- 04 -->

                    <div class="policy-block" id="sharing">

                        <h2>
                            <span class="number">04</span>
                            Information Sharing
                        </h2>

                        <p>
                            We do not sell your personal information.
                            Information may be shared with trusted
                            service providers when reasonably necessary
                            to operate our services.
                        </p>

                        <p>
                            Examples may include hosting providers,
                            infrastructure providers, analytics services,
                            payment providers and AI technology providers.
                        </p>

                        <p>
                            We may also disclose information where
                            required by applicable law, legal process,
                            court order or governmental request.
                        </p>

                    </div>


                    <!-- 05 -->

                    <div class="policy-block" id="security">

                        <h2>
                            <span class="number">05</span>
                            Data Security
                        </h2>

                        <p>
                            We use reasonable technical and organizational
                            measures designed to protect information from
                            unauthorized access, alteration, disclosure
                            or destruction.
                        </p>

                        <p>
                            However, no internet transmission or electronic
                            storage system can be guaranteed to be completely
                            secure.
                        </p>

                    </div>


                    <!-- 06 -->

                    <div class="policy-block" id="rights">

                        <h2>
                            <span class="number">06</span>
                            Your Rights
                        </h2>

                        <p>
                            Depending on applicable law, you may have rights
                            relating to your personal information, including:
                        </p>

                        <ul>

                            <li>
                                Request access to information associated
                                with your account.
                            </li>

                            <li>
                                Request correction of inaccurate information.
                            </li>

                            <li>
                                Request deletion of eligible account data.
                            </li>

                            <li>
                                Withdraw certain permissions or consent
                                where applicable.
                            </li>

                            <li>
                                Request information regarding how your data
                                is processed.
                            </li>

                        </ul>

                        <p>
                            To request account deletion, please visit our
                            <a href="{{ url('/delete-account') }}" class="highlight">
                                Account Deletion
                            </a>
                            page.
                        </p>

                    </div>


                    <!-- 07 -->

                    <div class="policy-block" id="children">

                        <h2>
                            <span class="number">07</span>
                            Children's Privacy
                        </h2>

                        <p>
                            Chimtu AI is not intended to be used in violation
                            of applicable age requirements. We do not
                            knowingly collect personal information from
                            children where prohibited by applicable law.
                        </p>

                        <p>
                            If you believe that a child has provided personal
                            information to us improperly, please contact us
                            so that appropriate action can be considered.
                        </p>

                    </div>


                    <!-- 08 -->

                    <div class="policy-block" id="changes">

                        <h2>
                            <span class="number">08</span>
                            Changes to This Policy
                        </h2>

                        <p>
                            We may update this Privacy Policy from time to
                            time to reflect changes in our services,
                            technology, legal requirements or business
                            practices.
                        </p>

                        <p>
                            When changes are made, the updated version will
                            be published on this page together with the
                            revised effective date.
                        </p>

                    </div>


                    <!-- 09 -->

                    <div class="policy-block" id="contact">

                        <h2>
                            <span class="number">09</span>
                            Contact Us
                        </h2>

                        <p>
                            If you have questions, concerns or requests
                            regarding this Privacy Policy, contact us
                            through the details below.
                        </p>

                        <div class="contact-box">

                            <div>
                                <i class="fa-solid fa-envelope"></i>

                                <a href="mailto:hello@thiven.com">
                                    hello@thiven.com
                                </a>
                            </div>

                            <div>
                                <i class="fa-solid fa-globe"></i>

                                <a href="https://www.thiven.com" target="_blank">
                                    www.thiven.com
                                </a>
                            </div>

                            <div>
                                <i class="fa-solid fa-building"></i>

                                <span>
                                    Thiven
                                </span>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- CTA -->

                <div class="policy-cta">

                    <h3>
                        Your privacy matters.
                    </h3>

                    <p>
                        Need to manage your account or request deletion?
                    </p>

                    <div class="cta-buttons">

                        <a href="{{ url('/delete-account') }}" class="btn btn-primary">

                            <i class="fa-solid fa-user-xmark"></i>

                            Delete Account

                        </a>

                        <a href="{{ url('/') }}" class="btn btn-outline">

                            <i class="fa-solid fa-house"></i>

                            Back to Chimtu AI

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ========================================
     FOOTER
======================================== -->

    <footer>

        <div class="container">

            <div class="footer-grid">


                <div class="footer-about">

                    <a href="{{ url('/') }}" class="brand">

                        <div class="brand-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>

                        <div>

                            <div class="brand-name">
                                Chimtu<span>ai</span>
                            </div>

                            <span class="brand-sub">
                                AI ASSISTANT BY THIVEN
                            </span>

                        </div>

                    </a>

                    <p>
                        Smart. Loyal. Intelligent.
                        An AI assistant built by Thiven
                        to help you work, create and live smarter.
                    </p>

                </div>


                <div>

                    <h4>Product</h4>

                    <ul>

                        <li>
                            <a href="{{ url('/') }}#features">
                                Features
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/') }}#experience">
                                Experience
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/') }}#download">
                                Download
                            </a>
                        </li>

                    </ul>

                </div>


                <div>

                    <h4>Legal</h4>

                    <ul>

                        <li>
                            <a href="{{ url('/privacy-policy') }}">
                                Privacy Policy
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/delete-account') }}">
                                Delete Account
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Terms & Conditions
                            </a>
                        </li>

                    </ul>

                </div>


                <div>

                    <h4>Contact</h4>

                    <ul>

                        <li>
                            <a href="mailto:hello@thiven.com">
                                hello@thiven.com
                            </a>
                        </li>

                        <li>
                            <a href="https://www.thiven.com" target="_blank">
                                www.thiven.com
                            </a>
                        </li>

                    </ul>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © 2026 Thiven. All rights reserved.
                </span>

                <span>
                    Chimtu AI • Smart. Loyal. Intelligent.
                </span>

            </div>

        </div>

    </footer>

</body>

</html>