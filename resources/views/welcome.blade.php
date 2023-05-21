<x-app-layout>
    <style>
        .background {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>
    <div class="hero h-[calc(100vh-9rem)]">

        <div class="hero-content flex-col lg:flex-row-reverse">
            <video autoplay loop playsinline muted class="max-w-lg rounded-lg shadow-2xl">
                <source src="img/video ultrasound in 3D slide 1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div>
                <h1 class="text-5xl font-bold text-primary">ULTRASOUND SONOACE R7 HEALTHCARE ​TRAINING SOLUTION​</h1>
                <p class="py-6"></p>
                <a href="/login" class="btn btn-primary">Get Started</a>
                <a href="/learn-more" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <div class="py-10 h-[calc(100vh-9rem)]" id="about">
        <h1 class="uppercase text-2xl text-primary">About</h1>
        <ul>
            <li data-aos="fade-left" class="py-10">
                <h3 class="text-xl mb-5 text-secondary">What Is An About Us Page?​</h3>
                <h2>Ultrasound Healthcare Training Simulation is the application for the polytehcnic students
                    specificily for Biomedical Engineering Students to learn about the imaging machine that used for
                    diagnostic. This web application build to deliver standardize ultrasound machine’s knowledge as to
                    promotes the e-learning among students.</h2>
            </li>
            <li data-aos="fade-right" class="py-10">
                <h3 class="text-xl mb-5 text-secondary">Why Are These Pages Important?</h3>
                <h2>Ultrasound Healthcare simulation training web application is important for students as it provides a
                    safe, realistic, cost-effective, engaging, and effective way for them to learn and improve their
                    skills, which ultimately leads to better patient care and outcomes.</h2>

            </li>
        </ul>
    </div>

    <canvas class="background"></canvas>
    @push('scripts')
        <script>
            window.onload = function() {
                Particles.init({
                    selector: '.background',
                    color: ['#48BCD1'],
                    connectParticles: true,

                    // options for breakpoints
                    responsive: [{
                        breakpoint: 768,
                        options: {
                            maxParticles: 200,
                            color: '#48F2E3',
                            connectParticles: false
                        }
                    }, {
                        breakpoint: 425,
                        options: {
                            maxParticles: 100,
                            connectParticles: true
                        }
                    }, {
                        breakpoint: 320,
                        options: {
                            maxParticles: 0
                            // disables particles.js
                        }
                    }]
                });
            };
        </script>
    @endpush
</x-app-layout>
