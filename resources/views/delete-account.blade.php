<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Delete Account | Chimtu AI</title>

    <meta name="description" content="Request deletion of your Chimtu AI account and associated information.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #080808;
            color: #ffffff;
            font-family: "Inter", sans-serif;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================================
           CONTAINER
        ========================================= */

        .container {
            width: min(1280px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* =========================================
           HEADER
        ========================================= */

        .header {
            height: 112px;

            border-bottom: 1px solid rgba(255, 255, 255, 0.07);

            background: #090909;

            display: flex;
            align-items: center;

            position: sticky;
            top: 0;

            z-index: 1000;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Logo */

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 44px;
            height: 44px;

            border-radius: 14px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid rgba(245, 174, 64, 0.35);

            background:
                linear-gradient(145deg,
                    #211c15,
                    #17130e);

            color: #f6b647;

            font-size: 19px;

            box-shadow:
                0 10px 30px rgba(245, 174, 64, 0.08);
        }

        .logo-content {
            display: flex;
            flex-direction: column;
        }

        .logo-title {
            font-family: "Space Grotesk", sans-serif;

            font-size: 21px;
            font-weight: 700;

            line-height: 1.1;

            letter-spacing: -0.5px;
        }

        .logo-title span {
            color: #f4b347;
        }

        .logo-subtitle {
            margin-top: 3px;

            font-size: 8px;

            color: #777;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        /* Navigation */

        .navigation {
            display: flex;
            align-items: center;
            gap: 38px;
        }

        .navigation a {
            color: #969696;

            font-size: 14px;

            font-weight: 600;

            transition: 0.25s ease;
        }

        .navigation a:hover {
            color: #ffffff;
        }

        /* CTA */

        .header-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 9px;

            padding: 14px 21px;

            border-radius: 12px;

            background:
                linear-gradient(135deg,
                    #f7c15b,
                    #dc8b27);

            color: #111;

            font-size: 13px;

            font-weight: 700;

            box-shadow:
                0 10px 25px rgba(225, 151, 47, 0.12);

            transition: 0.25s ease;
        }

        .header-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 15px 35px rgba(225, 151, 47, 0.20);
        }

        /* =========================================
           PAGE
        ========================================= */

        .page-wrapper {
            padding: 88px 0 100px;
        }

        .page-layout {
            display: grid;

            grid-template-columns: 270px minmax(0, 1fr);

            gap: 32px;

            align-items: start;
        }

        /* =========================================
           SIDEBAR
        ========================================= */

        .sidebar {
            position: sticky;

            top: 145px;

            padding: 24px 22px;

            border-radius: 22px;

            background:
                linear-gradient(145deg,
                    #111111,
                    #0c0c0c);

            border: 1px solid rgba(255, 255, 255, 0.09);

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.25);
        }

        .sidebar-title {
            color: #777;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 1.5px;

            margin-bottom: 17px;

            text-transform: uppercase;
        }

        .sidebar-list {
            display: flex;

            flex-direction: column;

            gap: 5px;
        }

        .sidebar-link {
            display: flex;

            align-items: center;

            gap: 13px;

            padding: 11px 12px;

            border-radius: 10px;

            color: #8c8c8c;

            font-size: 13px;

            font-weight: 500;

            transition: 0.25s ease;
        }

        .sidebar-link i {
            width: 16px;

            text-align: center;

            font-size: 12px;
        }

        .sidebar-link:hover {
            color: #ffffff;

            background: rgba(255, 255, 255, 0.035);
        }

        .sidebar-link.active {
            color: #f2b34d;

            background:
                rgba(211, 151, 55, 0.09);
        }

        /* =========================================
           MAIN CARD
        ========================================= */

        .main-card {
            min-width: 0;

            padding: 45px;

            border-radius: 25px;

            background:
                linear-gradient(145deg,
                    #111111,
                    #0d0d0d);

            border: 1px solid rgba(255, 255, 255, 0.09);

            box-shadow:
                0 25px 80px rgba(0, 0, 0, 0.35);
        }

        /* =========================================
           TOP NOTICE
        ========================================= */

        .notice {
            display: flex;

            align-items: flex-start;

            gap: 20px;

            padding: 23px;

            margin-bottom: 68px;

            border-radius: 19px;

            border: 1px solid rgba(222, 157, 53, 0.35);

            background:
                linear-gradient(145deg,
                    rgba(211, 151, 55, 0.075),
                    rgba(211, 151, 55, 0.025));
        }

        .notice-icon {
            width: 48px;
            min-width: 48px;

            height: 48px;

            border-radius: 14px;

            display: flex;

            align-items: center;
            justify-content: center;

            color: #f3b64e;

            background:
                rgba(212, 153, 54, 0.08);

            border: 1px solid rgba(212, 153, 54, 0.28);

            font-size: 18px;
        }

        .notice h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 19px;

            line-height: 1.35;

            margin-bottom: 5px;
        }

        .notice p {
            color: #999;

            font-size: 13px;

            line-height: 1.7;
        }

        /* =========================================
           CONTENT SECTIONS
        ========================================= */

        .content-section {
            padding-bottom: 42px;

            margin-bottom: 42px;

            border-bottom:
                1px solid rgba(255, 255, 255, 0.07);
        }

        .content-section:last-child {
            border-bottom: none;

            margin-bottom: 0;

            padding-bottom: 0;
        }

        .section-heading {
            display: flex;

            align-items: center;

            gap: 13px;

            margin-bottom: 18px;
        }

        .section-number {
            width: 35px;
            height: 35px;

            min-width: 35px;

            border-radius: 11px;

            display: flex;

            align-items: center;
            justify-content: center;

            border: 1px solid rgba(215, 154, 53, 0.30);

            background:
                rgba(215, 154, 53, 0.055);

            color: #efad43;

            font-family: "Space Grotesk", sans-serif;

            font-size: 12px;

            font-weight: 600;
        }

        .section-heading h2 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 26px;

            line-height: 1.25;

            letter-spacing: -0.5px;
        }

        .content-section p {
            color: #999;

            font-size: 15px;

            line-height: 1.9;

            margin-bottom: 17px;
        }

        .content-section p:last-child {
            margin-bottom: 0;
        }

        /* =========================================
           BULLET LIST
        ========================================= */

        .content-list {
            list-style: none;

            margin-top: 20px;
        }

        .content-list li {
            position: relative;

            padding-left: 27px;

            margin-bottom: 13px;

            color: #999;

            font-size: 14px;

            line-height: 1.8;
        }

        .content-list li::before {
            content: "";

            position: absolute;

            left: 5px;
            top: 10px;

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #e8a63c;

            box-shadow:
                0 0 10px rgba(232, 166, 60, 0.35);
        }

        /* =========================================
           MAIL SECTION
        ========================================= */

        .mail-card {
            margin-top: 25px;

            padding: 32px;

            border-radius: 18px;

            text-align: center;

            background:
                linear-gradient(145deg,
                    rgba(224, 160, 56, 0.08),
                    rgba(224, 160, 56, 0.025));

            border:
                1px solid rgba(224, 160, 56, 0.20);
        }

        .mail-icon {
            width: 52px;
            height: 52px;

            margin: 0 auto 17px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                rgba(226, 164, 63, 0.10);

            border:
                1px solid rgba(226, 164, 63, 0.25);

            color: #f1b54d;

            font-size: 19px;
        }

        .mail-card h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 21px;

            margin-bottom: 8px;
        }

        .mail-card p {
            max-width: 600px;

            margin: 0 auto 23px;

            color: #929292;

            font-size: 14px;

            line-height: 1.75;
        }

        .mail-button {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 10px;

            padding: 14px 25px;

            border-radius: 11px;

            background:
                linear-gradient(135deg,
                    #f7bd55,
                    #dc8b29);

            color: #111;

            font-size: 14px;

            font-weight: 700;

            transition: 0.25s ease;

            box-shadow:
                0 12px 30px rgba(221, 143, 39, 0.15);
        }

        .mail-button:hover {
            transform: translateY(-2px);

            box-shadow:
                0 16px 35px rgba(221, 143, 39, 0.25);
        }

        /* =========================================
           IMPORTANT NOTE
        ========================================= */

        .important-note {
            margin-top: 22px;

            padding: 17px 20px;

            border-left: 2px solid #e2a13d;

            background:
                rgba(224, 160, 56, 0.035);

            color: #858585;

            font-size: 13px;

            line-height: 1.7;
        }

        .important-note strong {
            color: #b4b4b4;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .footer {
            border-top:
                1px solid rgba(255, 255, 255, 0.07);

            padding: 28px 0;
        }

        .footer-inner {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }

        .footer-copy {
            color: #666;

            font-size: 12px;
        }

        .footer-links {
            display: flex;

            align-items: center;

            gap: 22px;
        }

        .footer-links a {
            color: #707070;

            font-size: 12px;

            transition: 0.2s ease;
        }

        .footer-links a:hover {
            color: #e8aa42;
        }

        /* =========================================
           TABLET
        ========================================= */

        @media (max-width: 1000px) {

            .navigation {
                gap: 20px;
            }

            .page-layout {
                grid-template-columns: 220px minmax(0, 1fr);

                gap: 22px;
            }

            .main-card {
                padding: 32px;
            }

        }

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 760px) {

            .container {
                width: min(100% - 28px, 1280px);
            }

            .header {
                height: 82px;
            }

            .navigation {
                display: none;
            }

            .header-button {
                padding: 11px 15px;

                font-size: 12px;
            }

            .logo-title {
                font-size: 19px;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
            }

            .page-wrapper {
                padding: 35px 0 60px;
            }

            .page-layout {
                display: block;
            }

            .sidebar {
                position: static;

                margin-bottom: 20px;

                padding: 18px;
            }

            .sidebar-list {
                display: grid;

                grid-template-columns: 1fr 1fr;

                gap: 4px;
            }

            .sidebar-link {
                font-size: 12px;

                padding: 10px;
            }

            .main-card {
                padding: 20px;

                border-radius: 19px;
            }

            .notice {
                padding: 18px;

                gap: 14px;

                margin-bottom: 45px;
            }

            .notice-icon {
                width: 42px;
                min-width: 42px;

                height: 42px;

                font-size: 15px;
            }

            .notice h3 {
                font-size: 17px;
            }

            .notice p {
                font-size: 12px;
            }

            .content-section {
                padding-bottom: 32px;

                margin-bottom: 32px;
            }

            .section-heading h2 {
                font-size: 21px;
            }

            .content-section p {
                font-size: 14px;
            }

            .content-list li {
                font-size: 13px;
            }

            .mail-card {
                padding: 25px 18px;
            }

            .mail-button {
                width: 100%;
            }

            .footer-inner {
                flex-direction: column;

                text-align: center;
            }

            .footer-links {
                flex-wrap: wrap;

                justify-content: center;

                gap: 15px;
            }

        }

        /* =========================================
           SMALL MOBILE
        ========================================= */

        @media (max-width: 450px) {

            .sidebar-list {
                grid-template-columns: 1fr;
            }

            .header-button span {
                display: none;
            }

            .header-button {
                width: 42px;
                height: 42px;

                padding: 0;
            }

            .logo-subtitle {
                display: none;
            }

            .hero {
                padding-top: 30px;
            }

        }
    </style>
</head>

<body>


    <!-- =========================================
     HEADER
========================================= -->

    <header class="header">

        <div class="container header-inner">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">

                <div class="logo-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div class="logo-content">

                    <div class="logo-title">
                        Chimtu<span>ai</span>
                    </div>

                    <div class="logo-subtitle">
                        AI ASSISTANT BY THIVEN
                    </div>

                </div>

            </a>


            <!-- Navigation -->
            <nav class="navigation">

                <a href="{{ url('/') }}">
                    Home
                </a>

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


            <!-- Header Button -->
            <a href="{{ url('/') }}" class="header-button">

                <span>Get Chimtu AI</span>

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </header>


    <!-- =========================================
     PAGE
========================================= -->

    <main class="page-wrapper">

        <div class="container">

            <div class="page-layout">


                <!-- =================================
                 SIDEBAR
            ================================== -->

                <aside class="sidebar">

                    <div class="sidebar-title">
                        ON THIS PAGE
                    </div>

                    <div class="sidebar-list">

                        <a href="#request" class="sidebar-link active">

                            <i class="fa-solid fa-envelope"></i>

                            Account Deletion

                        </a>

                        <a href="#how" class="sidebar-link">

                            <i class="fa-solid fa-circle-info"></i>

                            How It Works

                        </a>

                        <a href="#information" class="sidebar-link">

                            <i class="fa-solid fa-database"></i>

                            Information Deleted

                        </a>

                        <a href="#retention" class="sidebar-link">

                            <i class="fa-solid fa-clock"></i>

                            Data Retention

                        </a>

                        <a href="#contact" class="sidebar-link">

                            <i class="fa-solid fa-envelope"></i>

                            Contact Us

                        </a>

                    </div>

                </aside>


                <!-- =================================
                 MAIN CONTENT
            ================================== -->

                <article class="main-card">


                    <!-- TOP NOTICE -->

                    <div class="notice">

                        <div class="notice-icon">

                            <i class="fa-solid fa-user-slash"></i>

                        </div>

                        <div>

                            <h3>
                                Your account. Your choice.
                            </h3>

                            <p>
                                You can request deletion of your Chimtu AI
                                account and associated eligible personal
                                information at any time.
                            </p>

                        </div>

                    </div>


                    <!-- =================================
                     01 ACCOUNT DELETION
                ================================== -->

                    <section id="request" class="content-section">

                        <div class="section-heading">

                            <div class="section-number">
                                01
                            </div>

                            <h2>
                                Account Deletion
                            </h2>

                        </div>

                        <p>
                            If you no longer want to use Chimtu AI, you can
                            request permanent deletion of your account.
                        </p>

                        <p>
                            To submit your request, simply send us an email
                            using the button below.
                        </p>

                        <div class="mail-card">

                            <div class="mail-icon">

                                <i class="fa-solid fa-envelope"></i>

                            </div>

                            <h3>
                                Request Account Deletion
                            </h3>

                            <p>
                                Send us an email from the email address
                                associated with your Chimtu AI account.
                                Please mention that you want to delete
                                your Chimtu AI account.
                            </p>

                            <a href="mailto:hello@thiven.com?subject=Chimtu%20AI%20-%20Account%20Deletion%20Request"
                                class="mail-button">

                                <i class="fa-solid fa-envelope"></i>

                                Mail Us

                            </a>

                        </div>

                    </section>


                    <!-- =================================
                     02 HOW IT WORKS
                ================================== -->

                    <section id="how" class="content-section">

                        <div class="section-heading">

                            <div class="section-number">
                                02
                            </div>

                            <h2>
                                How It Works
                            </h2>

                        </div>

                        <p>
                            Once we receive your account deletion request,
                            our team will review and process the request.
                        </p>

                        <ul class="content-list">

                            <li>
                                Send your account deletion request by email.
                            </li>

                            <li>
                                Include the email address registered with
                                your Chimtu AI account.
                            </li>

                            <li>
                                We may verify account ownership before
                                processing the request.
                            </li>

                            <li>
                                Your eligible account information will then
                                be deleted.
                            </li>

                        </ul>

                    </section>


                    <!-- =================================
                     03 INFORMATION DELETED
                ================================== -->

                    <section id="information" class="content-section">

                        <div class="section-heading">

                            <div class="section-number">
                                03
                            </div>

                            <h2>
                                Information Deleted
                            </h2>

                        </div>

                        <p>
                            When your deletion request is processed, we will
                            delete eligible information associated with your
                            Chimtu AI account.
                        </p>

                        <ul class="content-list">

                            <li>
                                Your account and profile information.
                            </li>

                            <li>
                                Your registered email address and associated
                                account details.
                            </li>

                            <li>
                                Eligible content and information associated
                                with your account.
                            </li>

                            <li>
                                Other personal information that is eligible
                                for deletion.
                            </li>

                        </ul>

                    </section>


                    <!-- =================================
                     04 DATA RETENTION
                ================================== -->

                    <section id="retention" class="content-section">

                        <div class="section-heading">

                            <div class="section-number">
                                04
                            </div>

                            <h2>
                                Data Retention
                            </h2>

                        </div>

                        <p>
                            Some information may need to be retained for a
                            limited period where required by applicable law,
                            regulatory requirements, legal obligations,
                            security purposes, or legitimate business
                            requirements.
                        </p>

                        <div class="important-note">

                            <strong>Important:</strong>
                            Account deletion may not immediately remove
                            information that we are legally required to
                            retain.

                        </div>

                    </section>


                    <!-- =================================
                     05 CONTACT
                ================================== -->

                    <section id="contact" class="content-section">

                        <div class="section-heading">

                            <div class="section-number">
                                05
                            </div>

                            <h2>
                                Contact Us
                            </h2>

                        </div>

                        <p>
                            If you have any questions regarding account
                            deletion or how your information is handled,
                            please contact us.
                        </p>

                        <div class="mail-card">

                            <div class="mail-icon">

                                <i class="fa-solid fa-headset"></i>

                            </div>

                            <h3>
                                Need Help?
                            </h3>

                            <p>
                                Our team is available to assist you with
                                account deletion and privacy-related
                                questions.
                            </p>

                            <a href="mailto:hello@thiven.com?subject=Chimtu%20AI%20-%20Account%20Deletion%20Request"
                                class="mail-button">

                                <i class="fa-solid fa-envelope"></i>

                                Mail Us

                            </a>

                        </div>

                    </section>


                </article>

            </div>

        </div>

    </main>


    <!-- =========================================
     FOOTER
========================================= -->

    <footer class="footer">

        <div class="container footer-inner">

            <div class="footer-copy">
                © {{ date('Y') }} Chimtu AI. All rights reserved.
            </div>

            <div class="footer-links">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <a href="{{ url('/privacy-policy') }}">
                    Privacy Policy
                </a>

                <a href="{{ url('/delete-account') }}">
                    Delete Account
                </a>

                <a href="mailto:hello@thiven.com">
                    Contact
                </a>

            </div>

        </div>

    </footer>


</body>

</html>