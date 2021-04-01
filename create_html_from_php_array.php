<?php
    
    function CreateHtmlElements($dom, $insertInto, $array) {
        foreach($array as $k=>$v) {
            if (strpos($k, '?') !== false) {
                $str = substr($k, 1);
                $elem = $dom->createElement($str, htmlentities($v));
                foreach($array as $k2=>$v2) {
                    if ($k2 != "" && strpos($k2, '?') === false) {
                        if ($k2 != "fn" || !is_array($v2)) {
                            $elem->setAttribute($k2, $v2);
                        } else {
                            foreach($v2 as $v3) {
                                CreateHtmlElements($dom, $elem, $v3());
                            }
                        }
                    }
                }
                $insertInto->appendChild($elem);
                $insertInto = $elem;                
            }
            if (is_array($v)) {
                CreateHtmlElements($dom, $insertInto, $v);
            }
        }
    }

    function CreateHtml($array) {
        $dom = new DOMDocument("1.0");
        CreateHtmlElements($dom, $dom, $array);
        echo $dom->saveHTML();
    }

?>
