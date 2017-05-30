<?php

namespace Bogkov\Contact\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Contact
 *
 * @package Bogkov\Contact\Model\ResourceModel
 */
class Contact extends AbstractDb
{
    const TABLE = 'contact';

    /**
     * Fields
     */
    const FIELD_ID = 'contact_id';

    /**
     * Status codes
     */
    const STATUS_CODE_WAIT_FOR_ANSWER = 'wait_for_answer';
    const STATUS_CODE_ANSWERED        = 'answered';

    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(static::TABLE, static::FIELD_ID);
    }
}
