<?php

function image_pdf($file, $x, $y, $w, $h, $type = '', $link = '', $align = '', $resize = false, $dpi = 300, $palign = 'C', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false)
{
    $image = '';
    if ($type == 'jpg' || $type == 'jpeg') {
        $info = getimagesize($file);
        $image = imagecreatefromjpeg($file);
    } elseif ($type == 'png') {
        $info = getimagesize($file);
        $image = imagecreatefrompng($file);
    } elseif ($type == 'gif') {
        $info = getimagesize($file);
        $image = imagecreatefromgif($file);
    } elseif ($type == 'bmp') {
        $info = getimagesize($file);
        $image = imagecreatefrombmp($file);
    }
  
    if (!empty($image)) {
        $ratio = $info[0] / $info[1];
        if ($w == 0) {
            $w = $h * $ratio;
        }
        if ($h == 0) {
            $h = $w / $ratio;
        }
  
        $this->Image('@'.$file, $x, $y, $w, $h, $type, $link, $align, $resize, $dpi, $palign, $ismask, $imgmask, $border, $fitbox, $hidden, $fitonpage, $alt);
        imagedestroy($image);
    }
}

?>
