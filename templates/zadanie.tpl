{extends file="wzor.tpl"}

{block name="tytul"}{$zadanie.nazwa}{/block}

{block name="tresc"}
<h2>
    {$zadanie.nazwa}
    {if $zadanie.czy_zrobione eq "t"}
        &#9745;
    {else}
        &#9744;
    {/if}
</h2>
<p>
    {$zadanie.opis}
</p>
{/block}
