<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>How We Work</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f4f3fb;
      font-family: 'Poppins', sans-serif;
    }

    .step-card {
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(140, 123, 255, 0.1);
      padding: 30px 20px;
      position: relative;
      min-height: 230px;
    }

    .step-card::before {
      content: attr(data-step);
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 32px;
      color: #e5e0ff;
      font-weight: 700;
    }

    .step-icon {
      position: absolute;
      top: 20px;
      right: 20px;
      color: #8c7bff;
      font-size: 32px;
    }

    .center-card {
      background: linear-gradient(135deg, #ece7ff, #f3efff);
      padding: 0;
      overflow: hidden;
    }

    .center-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .tag {
      background-color: #8c7bff;
      color: white;
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 12px;
      display: inline-block;
      margin-right: 5px;
    }
  </style>
</head>
<body>

<section class="py-5">
  <div class="container text-center">
    <p class="text-primary fw-semibold">// HOW WE WORK</p>
    <h2 class="fw-bold mb-4">Your Guide To Digital Marketing</h2>
    <p class="text-muted mb-5 mx-auto" style="max-width: 600px;">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
    </p>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-md-4">
        <div class="step-card" data-step="01">
          <div class="step-icon"><i class="bi bi-gear-fill"></i></div>
          <h5 class="fw-bold mt-5">Plan Strategically</h5>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
        </div>
      </div>

      <!-- Step 2 (center with image) -->
      <div class="col-md-4">
        <div class="step-card center-card">
          <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=600&q=80" class="center-image" alt="Creative Execution" />
          <div class="p-4 position-relative">
            <div class="step-icon"><i class="bi bi-lightbulb-fill"></i></div>
            <div class="fw-bold text-muted" style="font-size: 28px; color: #e5e0ff;">02</div>
            <h5 class="fw-bold mt-2">Execute Creatively</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
            <div class="tags mt-2">
              <span class="tag">#WeGrowBrands</span>
              <span class="tag">#YourGrowthPartner</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-4">
        <div class="step-card" data-step="03">
          <div class="step-icon"><i class="bi bi-graph-up-arrow"></i></div>
          <h5 class="fw-bold mt-5">Analyze & Optimize</h5>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

</body>
</html>
