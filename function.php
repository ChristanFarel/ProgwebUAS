<?php
$conn  = mysqli_connect('100.26.220.127', 'progweb', '', 'toko_baju');

function format_num($number)
{
    return "Rp " . number_format($number, 0, ",", ".") . ",-";
}
