<?php
namespace Application\Model\Articles;

use Core\Model\DbTable;

class ArticlesDb extends DbTable
{
    protected $_table = 'article';
    protected $_primary = 'IDARTICLE';
    protected $_classToMap = __NAMESPACE__.'\\Articles';
}