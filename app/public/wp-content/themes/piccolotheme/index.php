<?php get_header(); ?>

<div class="free-installation">
    <div class="container">
        <div clas="row">
            <div class="col">
                <p class="secondary-font medium-size-font">Scopri la nostra gamma di servizi</p>             
            </div>
        </div>
    </div>   
</div>

<div id="our-works" class="space-for-slider-products">
    <?php require_once('partials/slider-prodotti.php'); ?>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="special-banner">
                <h2 class="secondary-font text-center">Hai altre esigenze? Chiedi un preventivo o contattaci.</h2>
                <div class="needs">
                    <a class="btn btn-outline-warning" href="tel:3471779324" title="Telefono"><i class="fas fa-phone-square fa-2x" aria-hidden="true"></i> <span class="display-5"> 3471779324 </span></a>
                    <a class="btn btn-outline-success" href="https://api.whatsapp.com/send?phone=393471779324&amp;text=Salve,%20vorrei%20qualche%20informazione%20in%20merito%20ai%20vostri%20prodotti." title="Whatsapp"><i class="fab fa-whatsapp fa-2x" aria-hidden="true"></i> <span class="display-5"> Scrivici con Whatsapp </span></a>               
                </div>
                <p class="mt-3">Per richiedere un preventivo sulla base delle tue esigenze puoi chiamare il servizio clienti o indicare il tuo recapito telefonico per essere ricontattato, in alternativa è sufficiente  compilare il form di richiesta preventivo.</p>
            </div>
        </div>
    </div>
</div>

<?php require_once('partials/list-of-example.php'); ?>

<div class="our-experience">
    <div class="container">
        <h2 class="secondary-font text-center">Mettiamo al tuo servizio la nostra esperienza</h2>
        <div class="row">    
            <div class="col-12 col-lg-4">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/icons/price-quotation.png'; ?>" alt="preventivo">
                <p class="secondary-font">E' possibile ricevere la consulenza del nostro staff che 
                sarà sempre disponibile per presentare i prodotti e formulare un preventivo personalizzato. 
                Può essere utile avere un primo approccio a questo che è un vero e proprio universo di possibilità.</p>             
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/icons/measuration.png'; ?>" alt="misure">
                <p class="secondary-font">Le nostre competenze ed il know-how acquisito nel tempo ci danno la possibilità di accompagnarvi nello sviluppo di nuove idee e di nuovi progetti, 
                sfruttando tutti i rami del nostro settore per offrire un offerta completa e soluzioni innovative, ma soprattutto di trasformare in realtà le vostre idee.</p>           
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= get_stylesheet_directory_uri() . '/assets/icons/work.png'; ?>" alt="lavoro">
                <p class="secondary-font">Una volta valutate tutte le possibilità viene stabilita la migliore soluzione per il cliente e si inizia con la lavorazione</p>            
            </div>
        </div>
    </div>   
</div>

<div class="advice">
    <img src="<?= get_stylesheet_directory_uri() . '/assets/complete.jpg'; ?>" alt="special">
    <div class="helping">
        <h2 class="secondary-font text-uppercase">Troppo difficile prendere <br>la decisione GIUSTA?</h2>
        <button class="secondary-font text-uppercase btn btn-lg">Lasciati aiutare a scegliere</button>
    </div>
</div>

<?php require_once('partials/contact.php'); ?>

<?php get_footer(); ?>