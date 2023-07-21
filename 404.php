<?php
get_header();
?>
    <section class="page-not-found">
        <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="error-404 not-found default-max-width">
                <div class="page-content py-auto">
                    <p class="title404">404</p>
                    <p class="text404">Página não encontrada</p>
                    <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="input-group mb-3">
                        <div class="input-group">
                            <input type="search" class="form-control border-0" placeholder="Buscar" aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
                            <div class="input-group-append">
                            </div>
                        </div>
                    </form>
                    <p class="textalt404">Não encontramos a página solicitada, tente buscar alguma palavra relacionada ao que procura.</p>
                </div><!-- .page-content -->
            </div><!-- .error-404 -->
        </div>
    </section>
<?php
get_footer();