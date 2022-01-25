<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>
<div class="news-list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
      <p class="news-item" id="">
        <b>Тариф карты:</b> <?= $arItem['NAME'] ?><br>
        <b>Номер карты:</b> <?= $arItem['CARD_NUMBER'] ?><br>
        <b>Владелец карты:</b> <?= $arItem['CARD_USER'] ?><br>
        <b>Тип карты:</b> <?= $arItem['CARD_TYPE'] ?><br>
        <b>Стоимость обслуживания карты в месяц:</b> <?= $arItem['PRICE_MONTH'] ?><br>
        <b>Срок действия карты в месяцах:</b> <?= $arItem['QUANTITY_MONTH'] ?><br>
        <b>Дата окончания действия карты:</b> <?= $arItem['END_DATE'] ?><br>
      </p><br>
    <?php } ?>
</div>

