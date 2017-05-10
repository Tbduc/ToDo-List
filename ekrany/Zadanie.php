<?php

class Zadanie extends Ekran {
    function wypisz() {
        $id_zadania = $_GET["id_zadania"];
        $id_zadania = $this->db->quote($id_zadania, 'INTEGER');
        $zadanie = $this->db->fetchRow("select * from zadania where id_zadania=$id_zadania");
        $this->smarty->assign("zadanie", $zadanie);
        return $this->smarty->fetch("zadanie.tpl");
    }
}
