
<?php
include('header.php');
$sorgu_hareketler = mysqli_query($conn,"select * from hareketler");
?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
v            <di class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Blog Grid</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Blog </a>
            </di>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                <?php
                while($hareket=mysqli_fetch_array($sorgu_hareketler))
                {
                    echo '
                    <div class="col-md-6">
                    <a href="hareket.php?hareket='.hash('sha256',rand(1,1000)).$hareket['id'].hash('sha256',rand(1,1000)).'">
                    <div class="blog-item">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img class="img-fluid" src="img/'.$hareket['resim'].'" alt="">
                        </div>
                        <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                            <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                
                                <h6 class="text-light text-uppercase mb-0">'.$hareket['bolge'].'</h6>
                                
                            </div>
                            <a class="h5 text-uppercase text-light" href="">'.$hareket['ad'].'</h4></a>
                        </div>
                    </div>
                    </a>
                </div>
                ';
                }
            ?>
                    <!-- <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            </div>
                            <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                                <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                                    <span>01</span>
                                    <h6 class="text-light text-uppercase mb-0">January</h6>
                                    <span>2045</span>
                                </div>
                                <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center m-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <!-- <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div> -->
                <!-- Search Form End -->

                <!-- Category Start -->
                <?php include("components/tüm hareketler.php") ?>  
                <!-- Category End -->

                <!-- Recent Post Start -->
                <!-- <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Recent Post</h3>
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="img/blog-1.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="img/blog-2.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="img/blog-3.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="img/blog-1.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="img/blog-2.jpg" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                    </div>
                </div> -->
                <!-- Recent Post End -->

                <!-- Tags Start -->
                <!-- <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                    </div>
                </div> -->
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <?php include("components/motivasyon sözü.php") ?>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

    <?php
include('footer.php')

?>
