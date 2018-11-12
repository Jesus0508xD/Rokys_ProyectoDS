
<?php include "include/header.php";?>
<?php include "include/navbar.php";?>
<main>
    <div class="breadcrumb">
        <ol>
            <li><a href="#">Home</a></li>
        </ol> 
    </div>
    <div class="left">
        <div class="key">
            <?php include "include/key.php";?>
        </div>
        <div class="btn-container">
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-cart-arrow-down"></i>   
                <span>Para Llevar</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-calendar-check-o"></i>
                <span>Reservacion</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-motorcycle"></i>
                <span>Delivery</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-check-circle"></i>
                <span>Marcar Entrega</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-gear"></i>
                <span>Administrar</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <span>!!!!!!</span></button>
            <button class="btn btn-normal" type="button" >
                <span>Salir</span>
            </button>
            <button class="btn btn-normal" type="button" >
                <i class="fa fa-times-circle"></i>
                <span>Salir</span>
            </button>
        </div>
    </div>

    <div class="right">
        <div id="mesas" class="nav">
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/1">1</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/2">2</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/3">3</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/4">4</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/5">5</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/6">6</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/7">7</a></div>
            <div class="btn-mesa"><a href="<?=RUTA_URL?>HomeController/verMesa/8">8</a></div>
        </div>
    </form>
</main>
<?php include "include/footer.php";?>