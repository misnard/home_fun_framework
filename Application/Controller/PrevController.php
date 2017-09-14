<?php
namespace Application\Controller;

class PrevController
{
    public function make_prev($content) {
        $cuted = explode(' ', $content);
        $target = [];
        $count = 0;

        foreach ($cuted as $cut) {
            $count += strlen($cut);
            if ($count < 170) {
                $target[] = $cut;
            } else {
                break;
            }
        }
        $target = implode(' ', $target);
        $target = $target."...";

        return $target;
    }


    public function create_slug($id, $title) {
        $sluged = str_replace(' ','_', strtolower($title));
        $result = "article/".$id."-".$sluged.".html";
        return $result;
    }
}