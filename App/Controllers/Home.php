<?php
class home extends controller{
    function __construct()
    {
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date='".date("Y/m/d")."'");
        $dataFilm=[];
        foreach($dataSche as $item){
            $dataFilm[]=$item->GetFilm();
        }
        $this->getView("home_page",$dataFilm);
    }
}
?>