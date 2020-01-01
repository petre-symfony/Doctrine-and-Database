<?php

namespace App\Twig;

use App\Service\MarkdownHelper;
use Psr\Container\ContainerInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension {

	public function getFilters(): array {
      return [
        // If your filter generates SAFE HTML, you should add a third
        // parameter: ['is_safe' => ['html']]
        // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
        new TwigFilter('cached_markdown', [AppRuntime::class, 'processMarkdown'])
      ];
  }
}
