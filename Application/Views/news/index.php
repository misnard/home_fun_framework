<?php 
    $params = $this->getParams();
?>

<div class="row">
<!--colleft-->
<div class="col-md-8 col-sm-12">
	<div class="box-caption">
		<span>spotlight</span>
	</div>
	<!--sportlight-->
	<section class="owl-carousel owl-spotlight">
        <?php foreach ($params['spotlight'] as $article) : ?>
		<div>
			<article class="spotlight-item">
				<div class="spotlight-img">
                    <img alt="" src="<?= PUBLIC_URL; ?>images/product/<?= $article->get_FEATUREDIMAGEARTICLE(); ?>">
                    <a href="<?= PUBLIC_URL.$article->get_CategorieObj()->get_ROUTECATEGORIE(); ?>" class="cate-tag"><?= $article->get_CategorieObj()->get_LIBELLECATEGORIE(); ?></a>
                </div>
				<div class="spotlight-item-caption">
					<h2 class="font-heading">
						<a href="<?= PUBLIC_URL.$check_prev->create_slug($article->get_IDARTICLE(), $article->get_TITREARTICLE()); ?>">
                            <?= $article->get_TITREARTICLE(); ?>
						</a>
					</h2>
					<div class="meta-post">
						<a href="#">
                            <?= $article->get_AuteurObj()['NOMAUTEUR'] . " " . $article->get_AuteurObj()['PRENOMAUTEUR']; ?>
						</a>
						<em></em>
						<span>
							<?= $article->get_DATECREATIONARTICLE(); ?>
						</span>
					</div>
					<p><?= $check_prev->make_prev($article->get_CONTENUARTICLE()); ?> </p>
				</div>
			</article>
		</div>
		<?php endforeach; ?>
	</section>

    <!--spotlight-thumbs-->
    <section class="spotlight-thumbs">
        <div class="row">

            <?php foreach ($params['articles'] as $article):?>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="spotlight-item-thumb">
                        <div class="spotlight-item-thumb-img">
                            <a href="#"><img alt="" src="<?= PUBLIC_URL ?>/images/product/<?=$article->get_FEATUREDIMAGEARTICLE();?>" /></a>
                            <a href="<?= PUBLIC_URL.$article->get_CategorieObj()->get_ROUTECATEGORIE(); ?>" class="cate-tag"><?= $article->get_CategorieObj()->get_LIBELLECATEGORIE();?></a>
                        </div>
                        <h3><a href="#"><?= $article->get_TITREARTICLE();?></a></h3>
                        <div class="meta-post">
                            <a href="#"><?= $article->get_AuteurObj()['NOMAUTEUR'] . " " . $article->get_AuteurObj()['PRENOMAUTEUR']; ?></a>
                            <em></em>
                            <span><?= $article->get_DATECREATIONARTICLE();?></span>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </section>
</div>
<?php include SIDEBAR_SITE; ?>