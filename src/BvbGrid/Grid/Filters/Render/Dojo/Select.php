<?php

/**
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license
 * It is  available through the world-wide-web at this URL:
 * http://www.petala-azul.com/bsd.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to geral@petala-azul.com so we can send you a copy immediately.
 *
 * @package    BvbGrid\Grid
 * @copyright  Copyright (c)  (http://www.petala-azul.com)
 * @license    http://www.petala-azul.com/bsd.txt   New BSD License
 * @version    $Id: Select.php 1734 2011-05-14 22:31:07Z bento.vilas.boas@gmail.com $
 * @author     Bento Vilas Boas <geral@petala-azul.com >
 */
namespace BvbGrid\Grid\Filters\Render\Dojo;

use BvbGrid\Grid\Filters\Render\RenderAbstract;

class Select extends RenderAbstract
{
    /**
     * @see library/Bvb/Grid/Filters/Render/Bvb_Grid_Filters_Render_RenderInterface::render()
     */
    public function render()
    {
        Zend_Dojo::enableView($this->getView());
        $this->getView()->dojo()
             ->enable()
             ->setDjConfigOption('parseOnLoad',true)
             ->requireModule('dijit.form.Select');
        
        
        $this->setAttribute('dojoType', 'dijit.form.Select');
        
        if ( ! $this->hasAttribute('style') ) $this->setAttribute('style', 'width:120px !important;');
        
        return $this->getView()->formSelect($this->getFieldName(), 
                                            $this->getDefaultValue(), 
                                            $this->getAttributes(),
                                            $this->getValues());
    }
}