<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

enum Religion: int
{
    case CHRISTIANITY = 1;
    case BUDDHISM = 2;
    case ETHNIC_RELIGIONS = 4;
    case HINDUISM = 5;
    case ISLAM = 6;
    case NON_RELIGIOUS = 7;
    case OTHER_SMALL = 8;
    case UNKNOWN = 9;
}
