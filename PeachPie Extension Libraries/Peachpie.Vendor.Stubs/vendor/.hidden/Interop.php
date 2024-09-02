<?php

/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InteropOverride {
	/**
	 * @deprecated
	 * @param \Interop+Error $error
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $isDirError
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function CheckIo_1 ($error, $path, $isDirError){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $result
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $isDirError
	 * @return \System\Int64|int
	 */
	#[MethodOverride]protected static function CheckIo_2 ($result, $path, $isDirError){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $result
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $isDirError
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CheckIo_3 ($result, $path, $isDirError){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $result
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $isDirError
	 * @return \System\IntPtr
	 */
	#[MethodOverride]protected static function CheckIo_4 ($result, $path, $isDirError){}
}
class Interop extends \System\Object
{
	use InteropOverride;

	/**
	 * @param \System\Buffers\SpanFunc_5 $interopCall [generic: System\Char,TArg1,TArg2,TArg3,Interop+Globalization+ResultCode]
	 * @param \TArg1 $arg1
	 * @param \TArg2 $arg2
	 * @param \TArg3 $arg3
	 * @param \System\String& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function CallStringMethod($interopCall, $arg1, $arg2, $arg3, &$result){}
	private static function ThrowExceptionForIoErrno($errorInfo, $path, $isDirError){}
	/**
	 * @uses InteropOverride::CheckIo_1 <br>protected , args: ($error, $path, $isDirError)<br>
	 * @uses InteropOverride::CheckIo_2 <br>protected , args: ($result, $path, $isDirError)<br>
	 * @uses InteropOverride::CheckIo_3 <br>protected , args: ($result, $path, $isDirError)<br>
	 * @uses InteropOverride::CheckIo_4 <br>protected , args: ($result, $path, $isDirError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int64|int|\System\Int32|int|\System\IntPtr|mixed|\override
	 */
	#[MethodOverrideProtected]function CheckIo (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowIOExceptionForLastError(){}
	/**
	 * @param \Interop+ErrorInfo $errorInfo
	 * @param \System\String|string $path
	 * @param \System\Boolean|bool $isDirError
	 * @return \System\Exception
	 */
	protected static function GetExceptionForIoErrno($errorInfo, $path, $isDirError){}
	/**
	 * @param \Interop+ErrorInfo $errorInfo
	 * @param \System\String|string $path
	 * @return \System\Exception
	 */
	protected static function GetIOException($errorInfo, $path){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function GetRandomBytes($buffer, $length){}
	/**
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function GetCryptographicallySecureRandomBytes($buffer, $length){}
}