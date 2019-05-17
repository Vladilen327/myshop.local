{* шаблон корзины *}

<h1>Корзина</h1>

{if !$rsProducts}
    В корзине пусто.

{else}
    <h2>Данные заказа</h2>

    <form action="/cart/order/" method="POST">
    <table>
        <tr>
            <td>
                №
            </td>
            <td>
                Наименование
            </td>
            <td>
                Кол-во
            </td>
            <td>
                Цена за единицу
            </td>
            <td>
                Стоимость
            </td>
            <td>
                Действие
            </td>

        </tr>
        {foreach $rsProducts as $item name=products}
        <tr>
            <td>
                {$smarty.foreach.products.iteration}
            </td>
            <td>
                <a href="/product/{$item['id']}/">{$item['name']}</a><br>
            </td>
            <td>
                <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});">
            </td>
            <td>
                <span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span>
            </td>
            <td>
                <span id="itemRealPrice_{$item['id']}" >{$item['price']}</span>
            </td>
            <td>
                <a id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;"  title="Удалить из корзины">Удалить</a>
                <a id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;"  title="Восстановить товар">Восстановить</a>
            </td>
        </tr>
    {/foreach}
    </table>
        <input type="submit" value="Оформить заказ">
    </form>
{/if}