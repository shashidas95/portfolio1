<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <ul>
                <li> MProgramming Languages: PHP, JavaScript</li>
                <li> Web Development Frameworks: Laravel, Vue.js </li>
                <li> Database Management: MySQL, MongoDB</li>
                <li> Version Control: Git, GitHub</li>
                <li> RESTful API Development</li>
                <li> Front-End Technologies: HTML, CSS, Tailwind CSS</li>
                <li> Package Managers: npm, Composer</li>
                <li> Testing Frameworks: PHPUnit</li>
                <li> Deployment and Continuous Integration: Docker, Jenkins</li>
                <li>Cloud Services: AWS, Heroku
                    Agile/Scrum Methodologies</li>
                <li> Remote Collaboration Tools: Slack, Zoom, Trello</li>
            </ul>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($projectData as $projects)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ $projects->images }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="{{ $projects->images }}" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('/projects/' . $projects->id) }}" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <a href="{{ url('/projects/' . $projects->id) }}">
                        <h4>{{ $projects->name }}</h4>
                    </a>

                    @foreach ($projects->description as $descriptions)
                        <h4>{{ $descriptions }}</h4>
                    @endforeach
                    @foreach ($projects->technologies as $technology)
                        <h4>{{ $technology }}</h4>
                    @endforeach
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</section><!-- End Portfolio Section -->
