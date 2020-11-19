<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 text-center">
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
            <title>Search</title>
            <circle cx="10.5" cy="10.5" r="7.5" />
            <path d="M21 21l-5.2-5.2" />
          </svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="/login">Sign up</a>
      </div>
    </div>
  </header>
  <div class="col-md-7 px-0">
    <h1 class="display-4 font-italic">Elshinta Milenia <br>El's Shop</h1>
    <p class="lead my-3">Available Zara, Uniqlo dan H&M</p>
  </div>
</div>

<div class="row mb-2">
  <div class="col-md-6">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">Sabrina Zara Stripe Blouse</h3>
        <div class="mb-1 text-muted">Best Seller</div>
        <p class="card-text mb-auto">Baju berbahan tebal dan nyaman dipakai cocok digunakan sehari-hari. </p>
      </div>
      <div class="col-auto d-none d-lg-block">
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Tas Zara</h2>
        <p>Rp.450.000,00</p>

      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">Sepatu H&M</h2>
        <p>Rp.250.000,00</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">Hodie&Crewneck Uniqlo</h2>
        <p>Rp.499.000,00</p>
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Nike adalah merek yang dalam setahun ini kerap tersangkut kontroversi, yaitu merek fashion dari Swedia, H&M. Pesaingnya adalah merek dari Spanyol, Zara disusul Adidas di posisi keempat. Pesaing langsung H&M, yaitu Uniqlo berada di posisi ke 9, merosot 5 peringkat dari tahun lalu.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Shopee</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?= $this->endSection(); ?>