<?php
namespace Application\Model\Referencer;

use Core\Model\DbTable;

class ReferencerDb extends DbTable
{
    protected $_table = 'referencer';
    protected $_primary = 'IDARTICLE';
    protected $_classToMap = __NAMESPACE__.'/Referencer';
}