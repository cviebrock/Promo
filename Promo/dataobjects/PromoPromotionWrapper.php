<?php

/**
 * A recordset wrapper class for PromoPromotion objects.
 *
 * @copyright 2011-2016 silverorange
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 *
 * @see       PromoPromotion
 */
class PromoPromotionWrapper extends SwatDBRecordsetWrapper
{
    protected function init()
    {
        parent::init();

        $this->row_wrapper_class = SwatDBClassMap::get(PromoPromotion::class);
        $this->index_field = 'id';
    }
}
