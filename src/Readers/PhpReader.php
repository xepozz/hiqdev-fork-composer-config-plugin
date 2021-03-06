<?php

namespace Yiisoft\Composer\Config\Readers;

/**
 * PhpReader - reads PHP files.
 */
class PhpReader extends AbstractReader
{
    protected function readRaw($path)
    {
        $result = static function () {
            /** @noinspection NonSecureExtractUsageInspection */
            extract(func_get_arg(0));

            return require func_get_arg(1);
        };

        return $result($this->builder->getVars(), $path);
    }
}
