<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $selectedProject->images }}" class="img-fluid" alt="{{ $selectedProject->name }}">
                    <div class="portfolio-links">
                        <a href="{{ $selectedProject->images }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="{{ $selectedProject->name }} 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                <h4>{{ $selectedProject->name }}</h4>
                @foreach ($selectedProject->description as $descriptions)
                    <h4>{{ $descriptions }}</h4>
                @endforeach
                @foreach ($selectedProject->technologies as $technology)
                    <h4>{{ $technology }}</h4>
                @endforeach
                <img src="{{ $selectedProject->images }}" alt="{{ $selectedProject->name }}">
            </div>
        </div>
    </div>

</section>
