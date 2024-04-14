<?php

declare (strict_types=1);
namespace DEPTRAC_202404\PhpParser\Node\Expr\AssignOp;

use DEPTRAC_202404\PhpParser\Node\Expr\AssignOp;
class BitwiseOr extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_BitwiseOr';
    }
}
