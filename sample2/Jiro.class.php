<?php
function categoryGenerator()
{
    yield "性別";
    yield from genderGenerator();
    yield "職業";
    yield from jobGenerator();
    yield "wwww";
    yield from ["aa", "bb"];
}

function genderGenerator()
{
    yield "男";
    yield "女";
}

function jobGenerator()
{
    yield "会社員";
    yield "自営業";
    yield "無職";
}

foreach(categoryGenerator() as $value) {
    print($value."\n");
}
