<?php

declare (strict_types=1);
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link      http://phpdoc.org
 */
namespace DEPTRAC_INTERNAL\phpDocumentor\Reflection\Types;

use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Type;
/**
 * Value Object representing a Callable type.
 *
 * @psalm-immutable
 */
final class Callable_ implements Type
{
    /** @var Type|null */
    private $returnType;
    /** @var CallableParameter[] */
    private $parameters;
    /**
     * @param CallableParameter[] $parameters
     */
    public function __construct(array $parameters = [], ?Type $returnType = null)
    {
        $this->parameters = $parameters;
        $this->returnType = $returnType;
    }
    /** @return CallableParameter[] */
    public function getParameters() : array
    {
        return $this->parameters;
    }
    public function getReturnType() : ?Type
    {
        return $this->returnType;
    }
    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     */
    public function __toString() : string
    {
        return 'callable';
    }
}
