<?php

class Start extends Ekran {
    function wypisz() {
        $zadania = $this->db->fetchAll("select *, to_char(data_utworzenia, 'dd.mm.yyyy hh:mm') as data_sformatowana from zadania order by data_utworzenia desc, id_zadania");
        $this->smarty->assign("zadania", $zadania);
        return $this->smarty->fetch("start.tpl");
    }
}
