<?php

namespace SocialMedia\Containers;

use Plenty\Plugin\Templates\Twig;

class SocialMediaSingleItemContainer
{
    public function call(Twig $twig):string
    {
      // Just a Test
        return $twig->render('SocialMedia::content.SocialMediaSingleItem');
    }
}
