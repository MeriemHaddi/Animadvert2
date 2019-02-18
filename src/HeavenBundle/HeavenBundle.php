<?php

namespace HeavenBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HeavenBundle extends Bundle
{
    public function getParent()
    {
       return"FOSUserBundle";
    }
}
