<?php
$params = $this->getParams();
$articles = $params["articles"];
$categorie = $params["categorie"];
?>
<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <div class="box-caption">
            <span><?= $categorie; ?></span>
        </div>
        <!--list-news-cate-->
        <div class="list-news-cate">
            <?php foreach ($articles as $article) : ?>
            <article class="news-cate-item">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <a href="<?= PUBLIC_URL.$check_prev->create_slug($article->get_IDARTICLE(), $article->get_TITREARTICLE()); ?>">
                            <img alt="" src="<?= PUBLIC_URL; ?>images/product/<?= $article->get_FEATUREDIMAGEARTICLE(); ?>">
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h3><a href="<?= PUBLIC_URL.$check_prev->create_slug($article->get_IDARTICLE(), $article->get_TITREARTICLE()); ?>"><?= $article->get_TITREARTICLE(); ?></a></h3>
                        <div class="meta-post">
                            <a href="#">
                                <?= $article->get_AuteurObj()['NOMAUTEUR'] . " " . $article->get_AuteurObj()['PRENOMAUTEUR']; ?>
                            </a>
                            <em></em>
                            <span>
                                <?= $article->get_DATECREATIONARTICLE(); ?>
                            </span>
                        </div>
                        <?= $check_prev->make_prev($article->get_CONTENUARTICLE()); ?>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="paging">
            <a href="#">Prev</a>
            <a href="#" class="current">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">Next</a>
        </div>

    </div>

</div>