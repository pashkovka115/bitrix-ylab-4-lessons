<?php

namespace Sprint\Migration;


class AddMyProperties20220121151513 extends Version
{
    protected $description = "Написать миграцию на добавление 3-х свойств";

    protected $moduleVersion = "4.0.3";

    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists('credit_card', 'cards');

        $helper->Iblock()->addPropertyIfNotExists($iblockId, [
            'NAME' => 'Стоимость обслуживания карты в месяц',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'PRICE_MONTH',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'N',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);

        $helper->Iblock()->addPropertyIfNotExists($iblockId, [
            'NAME' => 'Срок действия карты в месяцах',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'QUANTITY_MONTH',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'N',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);

        $helper->Iblock()->addPropertyIfNotExists($iblockId, [
            'NAME' => 'Дата окончания действия карты',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'END_DATE',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S:Date',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
    }

    public function down()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists('credit_card', 'cards');

        $helper->Iblock()->deletePropertyIfExists($iblockId, 'PRICE_MONTH');
        $helper->Iblock()->deletePropertyIfExists($iblockId, 'QUANTITY_MONTH');
        $helper->Iblock()->deletePropertyIfExists($iblockId, 'END_DATE');
    }
}
