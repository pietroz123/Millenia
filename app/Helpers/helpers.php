<?php

function setActive($nomeRota)
{
    return request()->routeIs($nomeRota) ? 'active' : '';
}