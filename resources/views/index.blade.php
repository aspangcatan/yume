<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Streaming - Discover & Earn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .yume-bg {
            background: url('{{ asset('img/bg-yume.png') }}') no-repeat center center;
            background-size: cover;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .yume-bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 90%;
        }

        .feature-light, .feature-dark {
            padding: 60px 20px;
        }

        .feature-dark {
            background: rgb(242, 242, 242);
        }

        .feature-img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        /* Bullet icon styling */
        .bullet-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .yume-bg {
                height: auto;
                padding: 40px 0;
            }

            .hero-content {
                padding: 20px;
                font-size: 14px;
            }

            .feature-light, .feature-dark {
                padding: 40px 15px;
                text-align: center;
            }

            .feature-light h2, .feature-dark h2 {
                font-size: 28px;
            }

            .feature-light p, .feature-dark p {
                font-size: 16px;
            }

            .feature-dark ul, .feature-light ul {
                padding-left: 0;
            }

            .bullet-icon {
                width: 25px;
                height: 25px;
            }

            .feature-img {
                max-width: 90%;
                margin-top: 20px;
            }
        }

        @media (max-width: 480px) {
            .hero-content {
                padding: 15px;
                font-size: 12px;
            }

            .hero-content h1 {
                font-size: 24px;
            }

            .hero-content p {
                font-size: 14px;
            }

            .feature-light h2, .feature-dark h2 {
                font-size: 24px;
            }

            .feature-light p, .feature-dark p {
                font-size: 14px;
            }

            .feature-img {
                max-width: 100%;
            }
        }

    </style>
</head>
<body>

<!-- Hero Section -->
<section class="yume-bg">
    <div class="hero-content text-white text-center">
        <h1 class="display-4 fw-bold">Discover. Stream. Earn.</h1>
        <p class="fs-5 mt-3">Join a global platform where artists showcase their music and listeners get rewarded for streaming.</p>
    </div>
</section>

<!-- Features Section -->
<section class="feature-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold display-5 mb-4">A Rewarding Music Discovery Platform.</h2>
                <p class="fs-5 text-muted">YUME is a music discovery platform where listeners stream future hit makers and are rewarded for doing so.</p>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-start mb-3">
                        <img src="{{ asset('img/bullet.png') }}" class="bullet-icon">
                        <span class="fs-5 text-dark">Aspiring artists launch their careers with a captive audience eager to listen to their songs.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="bullet-icon">
                        <span class="fs-5 text-dark">Listeners are rewarded for streaming music and sharing the experience with others.</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/img-section-1.png') }}" alt="YUME">
            </div>
        </div>
    </div>
</section>

<!-- Dark Theme Feature Section -->
<section class="feature-dark py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0 px-md-4"> <!-- Added margin & padding -->
                <h2 class="fw-bold display-5 mb-4">The Platform for Future Chart Toppers</h2>
                <p class="fs-5 text-light">YUME gives aspiring artists a platform to break into the global scene.</p>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-start mb-3">
                        <img src="{{ asset('img/bullet.png') }}" class="bullet-icon">
                        <span class="fs-5">Get streamed globally by a community of listeners.</span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="{{ asset('img/bullet.png') }}" class="bullet-icon">
                        <span class="fs-5">Get a chance to headline international concerts.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="bullet-icon">
                        <span class="fs-5">Publish your songs <span class="text-info fw-bold">FOR FREE</span>.</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 order-md-1 text-center mb-4 mb-md-0 px-md-4"> <!-- Added margin & padding -->
                <img src="{{ asset('img/img-section-2.png') }}" alt="YUME" class="img-fluid mt-4">
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
