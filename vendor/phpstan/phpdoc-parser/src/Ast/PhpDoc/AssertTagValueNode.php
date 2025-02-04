<?php

declare (strict_types=1);
namespace DEPTRAC_INTERNAL\PHPStan\PhpDocParser\Ast\PhpDoc;

use DEPTRAC_INTERNAL\PHPStan\PhpDocParser\Ast\NodeAttributes;
use DEPTRAC_INTERNAL\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use function trim;
class AssertTagValueNode implements PhpDocTagValueNode
{
    use NodeAttributes;
    /** @var TypeNode */
    public $type;
    /** @var string */
    public $parameter;
    /** @var bool */
    public $isNegated;
    /** @var bool */
    public $isEquality;
    /** @var string (may be empty) */
    public $description;
    public function __construct(TypeNode $type, string $parameter, bool $isNegated, string $description, bool $isEquality = \false)
    {
        $this->type = $type;
        $this->parameter = $parameter;
        $this->isNegated = $isNegated;
        $this->isEquality = $isEquality;
        $this->description = $description;
    }
    public function __toString() : string
    {
        $isNegated = $this->isNegated ? '!' : '';
        $isEquality = $this->isEquality ? '=' : '';
        return trim("{$isNegated}{$isEquality}{$this->type} {$this->parameter} {$this->description}");
    }
}
