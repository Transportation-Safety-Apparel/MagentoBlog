<?php

class TSA_Blog_Model_Resource_Post_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('tsa_blog/post');
    }

}
