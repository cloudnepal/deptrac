<?php

declare(strict_types=1);

namespace Tests\Qossmic\Deptrac\Configuration\Exception;

use PHPUnit\Framework\TestCase;
use Qossmic\Deptrac\Configuration\Exception\FileCannotBeParsedAsYamlException;

/**
 * @covers \Qossmic\Deptrac\Configuration\Exception\FileCannotBeParsedAsYamlException
 */
final class FileCannotBeParsedAsYamlExceptionTest extends TestCase
{
    public function testIsRuntimeException(): void
    {
        $exception = new FileCannotBeParsedAsYamlException();

        self::assertInstanceOf(\RuntimeException::class, $exception);
    }

    public function testFromFilenameAndExceptionReturnsException(): void
    {
        $filename = __FILE__;

        $exception = FileCannotBeParsedAsYamlException::fromFilenameAndException($filename, new \RuntimeException('abc'));

        $message = sprintf(
            'File "%s" cannot be parsed as YAML: abc',
            $filename
        );

        self::assertSame($message, $exception->getMessage());
    }
}
