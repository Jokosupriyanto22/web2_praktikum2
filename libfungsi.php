<?php

function grade($nilai_akhir)
{
    if (($nilai_akhir >= 0) && ($nilai_akhir <= 35)) {
        return "E";
    } else if (($nilai_akhir >= 36) && ($nilai_akhir <= 55)) {
        return "D";
    } else if (($nilai_akhir >= 56) && ($nilai_akhir <= 69)) {
        return "C";
    } else if (($nilai_akhir >= 70) && ($nilai_akhir <= 84)) {
        return "B";
    } else if (($nilai_akhir >= 85) && ($nilai_akhir <= 100)) {
        return "A";
    } else if (($nilai_akhir < 0) && ($nilai_akhir > 100)) {
        return "I";
    }
}

function kelulusan($nilai_akhir)
{
    if ($nilai_akhir > 55) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

function predikat($nilai_akhir)
{
    switch ($nilai_akhir) {
        case ($nilai_akhir >= 0) && ($nilai_akhir <= 35):
            return "Sangat Kurang";
            break;
        case ($nilai_akhir >= 36) && ($nilai_akhir <= 55):
            return "Kurang";
            break;
        case ($nilai_akhir >= 56) && ($nilai_akhir <= 69):
            return "Cukup";
            break;
        case ($nilai_akhir >= 70) && ($nilai_akhir <= 84):
            return "Memuaskan";
            break;
        case ($nilai_akhir >= 85) && ($nilai_akhir <= 100):
            return "Sangat cukup";
            break;
        case ($nilai_akhir < 0) && ($nilai_akhir > 100):
            return "Tidak Ada";
            break;
    }
}