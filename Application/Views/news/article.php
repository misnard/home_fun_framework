<?php
$params = $this->getParams();
$article = $params["article"];
$f_articles = $params["f_articles"];
?>
<div class="row">
    <!--colleft-->
    <div class="col-md-8 col-sm-12">
        <!--post-detail-->
        <article class="post-detail">
            <h1><?= $article->get_TITREARTICLE(); ?></h1>
            <div class="meta-post">
                <a href="#">
                    <?= $article->get_AuteurObj()['NOMAUTEUR'] . " " . $article->get_AuteurObj()['PRENOMAUTEUR']; ?>
                </a>
                <em></em>
                <span>
                                <?= $article->get_DATECREATIONARTICLE(); ?>
                            </span>
            </div>

            <?= $article->get_CONTENUARTICLE(); ?>
            <h5 class="text-right font-heading"><strong><?= $article->get_AuteurObj()['NOMAUTEUR'] . " " . $article->get_AuteurObj()['PRENOMAUTEUR']; ?></strong> </h5>

        </article>
        <!--social-detail-->
        <div class="social-detail">
            <span>   Share article</span>

            <ul class="list-social-icon">
                <li>
                    <a href="#" class="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="google">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="youtube">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="rss">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>

            </ul>
        </div>

        <!--related post-->
        <div class="detail-caption">
            <span>  RELATED POST</span>
        </div>
        <section class="spotlight-thumbs spotlight-thumbs-related">
            <div class="row">
                <?php foreach ($f_articles as $article) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="<?= PUBLIC_URL.$check_prev->create_slug($article->get_IDARTICLE(), $article->get_TITREARTICLE()); ?>">
                                <img alt="" src="<?= PUBLIC_URL; ?>images/product/<?= $article->get_FEATUREDIMAGEARTICLE(); ?>">
                            </a>
                            <a href="<?= PUBLIC_URL.$article->get_CategorieObj()->get_ROUTECATEGORIE(); ?>" class="cate-tag"><?= $article->get_CategorieObj()->get_LIBELLECATEGORIE(); ?></a>
                        </div>
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
                    </div>
                </div>
                <?php endforeach; ?>

        </section>
    </div>
    <?php include(SIDEBAR_SITE); ?>
</div>