<!-- =================== Sample Work Section =================== -->
<section id="sample-work" class="py-5 bg-light">
  <div class="container">
    
    <!-- Heading -->
    <h2 class="mb-4 text-center"
        style="font-family:'Abril Fatface','Playfair Display',serif;font-size:2.5rem;font-weight:700;background:black;-webkit-background-clip:text;-webkit-text-fill-color:transparent;letter-spacing:2px;text-transform:uppercase;text-shadow:2px 2px 5px rgba(0,0,0,0.15);">
      Sample Work
    </h2>

    <p class="text-justify mb-4" style="font-size:1.1rem; color:#555;">
      A curated selection of my recent projects in graphic design, video editing, and document preparation. These samples
      highlight my creativity, technical skill, and commitment to delivering professional and polished work across
      different formats.
    </p>

    <div class="row g-4 justify-content-center">

<!-- GRAPHIC DESIGN -->
<div class="col-md-4">
  <div class="card shadow-sm h-100">
    <div class="card-body text-center">
      <h5 class="card-title mb-3">Graphic Design</h5>

      <div id="graphicCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">

          <?php
            $imageFolder = "Imagegroup1/"; // Folder with images
            $imageFiles = glob($imageFolder . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
            $isActive = true;

            foreach ($imageFiles as $file) {
                $fileName = basename($file);
                echo '<div class="carousel-item ' . ($isActive ? 'active' : '') . '">';
                echo '<img src="' . $imageFolder . $fileName . '" class="d-block w-100 rounded graphic-img" alt="Graphic Work">';
                echo '</div>';
                $isActive = false;
            }
          ?>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#graphicCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" style="background-image:none; color:black; font-size:2rem;">&#8249;</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#graphicCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" style="background-image:none; color:black; font-size:2rem;">&#8250;</span>
        </button>

      </div>

      <p class="mt-2">Logos, layouts, banners, thumbnails, posters, and branding materials.</p>
    </div>
  </div>
</div>

<!-- Modal for image popup -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <img src="" id="modalImage" class="img-fluid w-100" alt="Popup Image">
      </div>
      <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
  </div>
</div>

<script>
document.querySelectorAll('.graphic-img').forEach(img => {
  img.addEventListener('click', function() {
    const modalImage = document.getElementById('modalImage');
    modalImage.src = this.src; // Set the modal image to the clicked image
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modal.show();
  });
});
</script>


<!-- VIDEO EDITING -->
<div class="col-md-4">
  <div class="card shadow-sm h-100">
    <div class="card-body text-center">
      <h5 class="card-title mb-3">Video Editing</h5>

      <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">

          <?php
            $videoFolder = "videos/"; 
            $videoFiles = glob($videoFolder . "*.{mp4,webm,mov}", GLOB_BRACE);
            $isActive = true;

            foreach ($videoFiles as $file) {
                $fileName = basename($file);
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $type = match($ext) {
                    'mp4' => 'video/mp4',
                    'webm' => 'video/webm',
                    'mov' => 'video/quicktime',
                    default => 'video/mp4'
                };

                echo '<div class="carousel-item ' . ($isActive ? 'active' : '') . '">';
                echo '<video class="d-block w-100 rounded" loop controls>'; // Removed autoplay
                echo '<source src="videos/' . $fileName . '" type="' . $type . '">';
                echo 'Your browser does not support HTML5 video.';
                echo '</video>';
                echo '</div>';

                $isActive = false;
            }
          ?>

        </div>

        <button class="carousel-control-prev" type="button"
                data-bs-target="#videoCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button"
                data-bs-target="#videoCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>

      </div>

      <p class="mt-2">Reels, montages, ads, short-form edits, and content repurposing.</p>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.getElementById('videoCarousel');
  const videos = carousel.querySelectorAll('video');

  // Pause all videos initially
  videos.forEach(video => video.pause());

  // When carousel slides, pause all videos
  carousel.addEventListener('slid.bs.carousel', function () {
    videos.forEach(video => video.pause());
  });

  // Videos will only play if the user clicks the play button
});
</script>





<!-- DOCUMENTS -->
<div class="col-md-4">
  <div class="card shadow-sm h-100">
    <div class="card-body text-center">
      <h5 class="card-title mb-3">Documents</h5>

      <div id="documentsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">

          <?php
          $docFolder = "documents/"; 
          $docFiles = glob($docFolder . "*.{png,jpg,jpeg}", GLOB_BRACE);
          $isActive = true;

          foreach ($docFiles as $file) {
              $fileName = basename($file);
              echo '<div class="carousel-item ' . ($isActive ? 'active' : '') . '">';
              echo '<img src="documents/' . $fileName . '" class="d-block w-100 rounded document-img" alt="' . $fileName . '">';
              echo '</div>';
              $isActive = false;
          }
          ?>

        </div>

        <button class="carousel-control-prev" type="button"
                data-bs-target="#documentsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button"
                data-bs-target="#documentsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>

      </div>

      <p class="mt-2">Canva layouts, reports, presentations, and templates.</p>
    </div>
  </div>
</div>

<!-- Modal for document popup -->
<div class="modal fade" id="documentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body p-0">
        <img src="" id="modalDocumentImage" class="img-fluid w-100" alt="Popup Document">
      </div>
      <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
  </div>
</div>

<script>
// Document popup functionality
document.querySelectorAll('.document-img').forEach(img => {
  img.addEventListener('click', function() {
    const modalImage = document.getElementById('modalDocumentImage');
    modalImage.src = this.src; // Set the modal image to the clicked image
    const modal = new bootstrap.Modal(document.getElementById('documentModal'));
    modal.show();
  });
});
</script>



  </div>
</section>
