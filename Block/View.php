<?php

namespace Codilar\ProductCount\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class View extends Template
{   
    /**
    * @var ProductCollectionFactory
    */
    protected $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionFactory, 
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;  
    }

    /*
    // return product count
    */
    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        // print_r($collection);
        // return $collection;
        return $collection->count();

    }
}