<?php

namespace SocialMedia\Containers;

use Plenty\Plugin\Templates\Twig;

class SocialMediaSingleItemJSContainer
{
    public function call(Twig $twig):string
    {
      // Just a Test
        return $twig->render('SocialMedia::content.SocialMediaSingleItemJS');
    }
}
