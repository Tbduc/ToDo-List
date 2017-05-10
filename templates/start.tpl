{extends file="wzor.tpl"}

{block name="tytul"}wszystkie zadania{/block}

{block name "tresc"}
<table class="table table-hover">
    {foreach from=$zadania item=zadanie}
        <tr>
            <td>
                <form action="wykonane.php" method="post">
                    <input type="hidden" name="id_zadania" value="{$zadanie.id_zadania}">
                    <button type="submit" class="btn btn-link" style="text-decoration: none">
                        {if $zadanie.czy_zrobione eq "t"}
                            &#9745;
                        {else}
                            &#9744;
                        {/if}
                    </button>
                </form>
            </td>
            <td><a href="?ekran=zadanie&id_zadania={$zadanie.id_zadania}">{$zadanie.nazwa}</a></td>
            <td>{$zadanie.data_sformatowana}</td>
        </tr>
    {/foreach}
</table>
{/block}
