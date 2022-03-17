<?php

function totalNilai($uts, $uas, $tugas)
{
    return ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);
}

function kelulusan($nilai)
{
    return $nilai > 55 ? "LULUS" : "TIDAK LULUS";
}

function grade($nilai)
{
    if ($nilai >= 0 && $nilai <= 35) {
        return "E";
    } else if ($nilai <= 55) {
        return "D";
    } else if ($nilai <= 69) {
        return "C";
    } else if ($nilai <= 84) {
        return "B";
    } else if ($nilai <= 100) {
        return "A";
    }

    return "I";
}

function predikat($grade)
{
    switch ($grade) {
        case 'A':
            return "NILAI SANGAT MEMUASKAN";
            break;
        case 'B':
            return "NILAI MEMUASKAN";
            break;
        case 'C':
            return "NILAI CUKUP";
            break;
        case 'D':
            return "NILAI KURANG";
            break;
        case 'E':
            return "NILAI SANGAT KURANG";
            break;
        default:
            return "NILAI TIDAK VALID, SILAHKAN DICEK KEMBALI !";
    }
}