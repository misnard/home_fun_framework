<?php
namespace Application\Controller;
use Application\Model\Articles\ArticlesDb;
use Application\Model\Categorie\CategorieDb;

class NewsController extends \Core\Controller\AppController
{
    public function index() 
    {
        $ArticleDb = new ArticlesDb();

        $articles = $ArticleDb->fetchAll();

        $spotlight = $ArticleDb->fetchAll('SPOTLIGHTARTICLE = 1');

        $this->render('news/index',['articles' => $articles, 'spotlight' => $spotlight]);
    }
    
    public function article()
    {
        $ArticleDb = new ArticlesDb();
        $article = $ArticleDb->fetchOne($_GET['idarticle']);
        $articles = $ArticleDb->fetchAll();

        $f_articles = $ArticleDb->fetchAll('IDCATEGORIE = '.$article->get_CategorieObj()->get_IDCATEGORIE());

        $this->render('news/article', ['article' => $article, 'articles', $articles, 'f_articles' => $f_articles]);
    }

    public function business()
    {
        $ArticleDb = new ArticlesDb();

        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 2');

        $this->render('news/categorie', ['categorie' => 'buisness', 'articles' => $articles]);
    }

    public function computing()
    {
        $ArticleDb = new ArticlesDb();

        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 3');

        $this->render('news/categorie', ['categorie' => 'computing', 'articles' => $articles]);
    }

    public function tech()
    {
        $ArticleDb = new ArticlesDb();

        $articles = $ArticleDb->fetchAll('IDCATEGORIE = 4');

        $this->render('news/categorie', ['categorie' => 'tech', 'articles' => $articles]);
    }
}

