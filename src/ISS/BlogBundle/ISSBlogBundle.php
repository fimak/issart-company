<?php

namespace ISS\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ISSBlogBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
