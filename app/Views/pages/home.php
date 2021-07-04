<?php
include('header.php');
?>
<section class="delivery-content">
    <aside>
        <div class="menu-left">
            <span>Menu</span>
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i>Lojas</a></li>
                <li><a href="#"><i class="fa fa-cutlery"></i>Cardápio</a></li>
                <li><a href="#"><i class="fa fa-wpforms"></i>Pedidos</a></li>
                <li><a href="#"><i class="fa fa-tags"></i>Cupons</a></li>
            </ul>
            <div class="info-dev">
                <span>Desenvolvido por</span>
                <div class="menu-left-info-dev">
                    <h3>DevLeo</h3>
                    <span>Versão 1.0</span>
                </div>
            </div>
        </div>
    </aside>
    <section class="content-right">
        <section class="banner-info">
            <div class="banner-logo">
                <img src="<?php echo INCLUDE_PATH_FULL_ASSETS ?>image/logop.jpg" alt="Burguer">
                <div class="banner-endereco">
                    <span>Nome da empresa</span>
                    <br>
                    <span><i class="fa fa-map-marker"></i> Rua dos sabores, 255, Natal - RN</span>
                </div>
                <div class="banner-cta">
                    <div class="link-cta">
                        <a href="#">Aberto para pedidos</a>
                    </div>
                    <span><i class="fa fa-clock-o"></i> 45min - Mínimo R$10,00</span>
                </div>
            </div>
        </section>
        <section class="categorias">
            <div class="container categorias-items">
                <div class="categorias-links">
                    <i class="fa fa-angle-double-left"></i>
                    <a href="#">Promo Combo</a>
                    <a href="#">Promoção</a>
                    <a href="#">Açai</a>
                    <a href="#">Combos</a>
                    <a href="#">Cupuaçu</a>
                    <a href="#">Hamburguer's</a>
                    <a href="#">Pastéis</a>
                    <a href="#">Sobremesas</a>
                    <i class="fa fa-angle-double-right"></i>
                </div>
            </div>
        </section>
        <?php include('cardapio.php'); ?>
    </section>
</section>