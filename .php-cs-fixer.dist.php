<?php

$header = <<<'EOF'
This file is part of the Blackfire Player package.

(c) Fabien Potencier <fabien@blackfire.io>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/Player')
;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'no_useless_return' => true,
        'no_useless_else' => true,
        'no_superfluous_elseif' => true,
        'explicit_indirect_variable' => true,
        'return_assignment' => true,
        'fopen_flags' => false,
        'strict_param' => true,
        'phpdoc_separation' => ['groups' => [['ORM\\*'], ['Assert\\*']]],
        'header_comment' => ['header' => $header],
    ))
;
