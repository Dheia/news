<?php 
class Cms5f33d6d9deeb5593804274_2a617bf967dd17adca0139c214ae82a5Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(isset($_GET["view"]))$this->page['view'] = $_GET["view"];
    if(isset($_GET["search"]))$this->page['search'] = $_GET["search"];
}
}
