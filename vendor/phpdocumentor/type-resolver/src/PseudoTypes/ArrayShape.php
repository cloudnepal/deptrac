<?php

/*
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @link      http://phpdoc.org
 *
 */
declare (strict_types=1);
namespace DEPTRAC_INTERNAL\phpDocumentor\Reflection\PseudoTypes;

use DEPTRAC_INTERNAL\phpDocumentor\Reflection\PseudoType;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Type;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Types\Array_;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Types\ArrayKey;
use DEPTRAC_INTERNAL\phpDocumentor\Reflection\Types\Mixed_;
use function implode;
/** @psalm-immutable */
class ArrayShape implements PseudoType
{
    /** @var ArrayShapeItem[] */
    private $items;
    public function __construct(ArrayShapeItem ...$items)
    {
        $this->items = $items;
    }
    /**
     * @return ArrayShapeItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    public function underlyingType() : Type
    {
        return new Array_(new Mixed_(), new ArrayKey());
    }
    public function __toString() : string
    {
        return 'array{' . implode(', ', $this->items) . '}';
    }
}
