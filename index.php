
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./imgs/favicon/favicon.ico">
    <title>SDN/Artwork</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script async src="https://api.countapi.xyz/hit/codefoxx.com/4d3c9089-9caa-4bda-a67b-dd9c9d7b73d7?callback=websiteVisits"></script>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg bg-light mb-1">
        <div class="container d-flex flex-wrap align-items-center justify-content-center">
            <img class="d-block mx-auto" src="./imgs/Aw.svg" alt="" width="60" height="37">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item "><a class="nav-link" href="https://sdnthailand.com/">Home</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <input onkeyup="searchsomething(this)" class="form-control justify-content-center col-md-12 me-2"
                        id="txt_search" type="text" placeholder="Search ArtWork...">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
                <div class="nav-profile">
                    <!-- <p class="nav-profile-name">Bearbug</p> -->
                    <div onclick="openCart()" style="cursor: pointer;" class="nav-profile-cart">
                        <!-- <i class="fas fa-cart-shopping"></i> -->
                        <div id="cartcount" class="cartcount" style="display: none;">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="menu">
    <div class="category  px-3 py-5 mb-3 text-center d-none d-sm-block">
        <span><a class="text-decoration-none pe-2 " href="#"></a><a onclick="searchproduct('all')" class="sidebar-items">
            All Artwork</a> 
            <a onclick="searchproduct('logo')" class="sidebar-items">
            logo
            </a>
            <a onclick="searchproduct('ysdn')" class="sidebar-items">
            ysdn
            </a>
            <!-- <a onclick="searchproduct('futsal')" class="sidebar-items">
            futsal
            </a> -->
            <!-- <a onclick="searchproduct('music')" class="sidebar-items">
            music
            </a> -->
            <a onclick="searchproduct('งดเหล้าเข้าพรรษา')" class="sidebar-items">
            งดเหล้าเข้าพรรษา
            </a>
            <a onclick="searchproduct('สงกรานต์')" class="sidebar-items">
            สงกรานต์
            </a>
            <!-- <a onclick="searchproduct('ลอยกระทง')" class="sidebar-items">
            ลอยกระทง
            </a> -->
            <a onclick="searchproduct('บุญประเพณี')" class="sidebar-items">
            บุญประเพณี
            </a>
            <a onclick="searchproduct('ชุมชนคนสู้เหล้า')" class="sidebar-items">
            ชุมชนคนสู้เหล้า
            </a>  
            <a onclick="searchproduct('ปลูกพลังบวก')" class="sidebar-items">
            ปลูกพลังบวก
            </a>
            <a onclick="searchproduct('โรงเรียนคำพ่อสอน')" class="sidebar-items">
            โรงเรียนคำพ่อสอน
            </a>
            <a onclick="searchproduct('อาหารปลอดภัย')" class="sidebar-items">
            อาหารปลอดภัย
            </a>
             <a onclick="searchproduct('พระสงฆ์')" class="sidebar-items">
            พระสงฆ์
            </a>
            <a onclick="searchproduct('กีฬา')" class="sidebar-items">
            กีฬา
            </a>
            </a>
            <a onclick="searchproduct('กฏหมาย')" class="sidebar-items">
            กฏหมาย
            </a>
            </a>
            <a onclick="searchproduct('อื่นๆ')" class="sidebar-items">
            อื่นๆ
            </a></span>

    </div>
    
    <h4 class="container  px-5 mt-10 d-none d-sm-block"><small>SDN/Artwork</small><a href="#"><i class="fa fa-rss px-2"></i></a></h4>

    <!--Photo Artwork -->
    <div class="container">
        <div id="productlist" class="product">
        </div>
    </div>

        <div id="modalDesc" class="modal" style="display: none;">
        <!--pre-nxt-->
                    <!-- <a id="prebtn"><img src="./imgs/pre.png" alt=""></a>
                    <a id="nxtbtn"><img src="./imgs/nxt.png" alt=""></a> -->
            <div onclick="closeModal()" class="modal-bg"></div>
                <div class="modal-popup">
                
                        <div class="modaldesc-detail">
                            <div class="detail-mobile">
                                <p class="fw-bolder" id="mdd-name">Product name</p>
                                <!-- <p id="mdd-price">500 THB</p> -->
                                <p id="mdd-desc">Lorem iaudantium harum doloremque alias. Quae, vel ipsum quasi,
                                    voluptas, sit optio nemo magni numquam non dicta voluptates porro! Vero eveniet numquam sit aut vel
                                    eligendi
                                    officiis iste tenetur expedita. Delectus vero quibusdam adipisci in. Esse.</p>
                                <!-- <br> -->
                                
                            </div>
                        </div>
                               
                <!-- <h2>Detail</h2>
                <br> -->
                <div class="modaldesc-content">
                    
                    <img id="mdd-img" class="modaldesc-img" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
                        <div class="btn-control">
                            <a onclick="closeModal()" id="btn"><i class="fa-solid fa-xmark"></i>
                            </a>
                            <a download href="#" id="btndownload" class="btn btn-buy">
                                Download free
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

    <!-- <div id="modalCart" class="modal" style="display: none;">
        <div onclick="closeModal()" class="modal-bg"></div>
        <div class="modal-page">
            <h2>My cart</h2>
            <br>
            <div id="mycart" class="cartlist">

            </div>
            <div class="btn-control">
                <button onclick="closeModal()" class="btn">
                    Cancel
                </button>
                <button onclick="buynow()" class="btn btn-buy">
                    Buy
                </button>
            </div>
        </div>
    </div> -->

    <!--widget-->
    <!--footer-->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; SDN/ArtWork | sdnthailand.com | <span id="visits"></span> Views |</p>
      
  
      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <img class="d-block mx-auto" src="./imgs/Aw.svg" alt="" width="80" height="57">
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item "><p class="nav-link" style ="color:#808B96" href="#">SDN/ArtWork</p></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li> -->
      </ul>
    </footer>
    <div class="dmtop">Scroll to Top</div>
  </div>
<script src="index.js"></script>
<script src="script.js"></script>
</body>
</html>


