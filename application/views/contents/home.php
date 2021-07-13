<!-- Banner -->
<section>
    <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Pengumuman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="<?php echo base_url("assets/img/jpg/maintance.jpg")?>" alt="">
                <p class="text-center">Untuk mailaku.com 2021 masih dalam pengembangan</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-danger" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide container pb-3 mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
            <img src="<?php echo base_url('/assets/img/jpg/banner2.jpg')?>" class="d-block w-100 img-fluid" style="height: 25rem;" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('/assets/img/jpg/kumbaya.jpg')?>" class="d-block w-100 img-fluid" style="height: 25rem;" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('/assets/img/jpg/bannertokped.jpg')?>" class="d-block w-100 img-fluid" style="height: 25rem;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="mb-3">
    <div class="bg-light p-3">
        <div class="container d-flex gap-3">
            <div class="card bg-recommended" style="width: 12rem;">
                <p class="text-white fs-4">Rekomendasi Items</p>
            </div>
            <?php foreach ($rekomendasi_produk as $i => $rekomendasi_produk) {?>
                <div class="card" style="width: 14rem;">
                    <a href="??">
                        <div class="card-body">
                            <img src="<?php echo base_url()?>./public/product/<?php echo $rekomendasi_produk->photo1;?>" class="img-fluid rounded rounded-bottom">
                            <h5 class="card-title"><a class="no-underline fs-6 fw-light text-dark" href=""><?php echo $rekomendasi_produk->title; ?></a></h5>
                            <p class="card-text fs-5 fw-bold">Rp.<?php echo $rekomendasi_produk->price?></p>
                            <button type="button" class="btn btn-outline-danger btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2 me-2"></i>Add to cart</button>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<section class="mb-3">
    <div class="bg-light p-3">
        <div class="container d-flex gap-3">
            <div class="card bg-recommended" style="width: 12rem;">
                <p class="text-white fs-4">Produk Terbaru</p>
            </div>
            <?php foreach ($baru_produk as $i => $baru_produk) {?>
                <div class="card" style="width: 14rem;">
                    <a href="??">
                        <div class="card-body">
                            <img src="<?php echo base_url()?>./public/product/<?php echo $baru_produk->photo1;?>" class="img-fluid rounded rounded-bottom">
                            <h5 class="card-title"><a class="no-underline fs-6 fw-light text-dark" href=""><?php echo $baru_produk->title; ?></a></h5>
                            <p class="card-text fs-5 fw-bold">Rp.<?php echo $baru_produk->price?></p>
                            <button type="button" class="btn btn-outline-danger btn-sm mr-1 mb-2"><i class="fas fa-shopping-cart pr-2 me-2"></i>Add to cart</button>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- Kategori -->
<section>
    <div class="container p-3">
        <div class="container-flued overflow-auto gap-2 d-flex flex-nowrap row">
            <div class="border rounded kategori-size d-flex align-items-center px-3 bg-card-1">
                <div class="fw-bold text-white">
                    Semua Kategori
                </div>
            </div>
            <?php foreach($kategori as $i => $kategori) {?>
                <div class="border rounded kategori-size d-flex align-items-center px-3" style="background-image: url(<?php base_url('')?>./public/kategori/<?php echo $kategori->img?>)">
                    <div class="fw-bold text-white">
                        <?php echo $kategori->title?>
                    </div>
                </div>	
            <?php }?>
        </div>
    </div>
</section>
<!-- Hasil Kategori -->
<section class="mb-3 bg-light">
    
</section>
<!-- Mailaku News -->
<section>
    
</section>

                