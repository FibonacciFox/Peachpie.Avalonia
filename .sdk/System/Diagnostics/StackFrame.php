<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DelegateEnumeratorOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $needFileInfo
	 */
	#[MethodOverride]public function __construct_2 ($needFileInfo){}
	/**
	 * @param \System\Int32|int $skipFrames
	 */
	#[MethodOverride]public function __construct_3 ($skipFrames){}
	/**
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean|bool $needFileInfo
	 */
	#[MethodOverride]public function __construct_4 ($skipFrames, $needFileInfo){}
	/**
	 * @param \System\String|string $fileName
	 * @param \System\Int32|int $lineNumber
	 */
	#[MethodOverride]public function __construct_5 ($fileName, $lineNumber){}
	/**
	 * @param \System\String|string $fileName
	 * @param \System\Int32|int $lineNumber
	 * @param \System\Int32|int $colNumber
	 */
	#[MethodOverride]public function __construct_6 ($fileName, $lineNumber, $colNumber){}
}
class StackFrame extends \System\Object
{
	use DelegateEnumeratorOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const OFFSET_UNKNOWN = '-1';
	private function BuildStackFrame($skipFrames, $needFileInfo){}
	private static function GetMethodDescFromNativeIP($ip){}
	/**
	 * @param \System\IntPtr $ip
	 * @return \System\Reflection\MethodBase
	 */
	protected static function GetMethodFromNativeIP($ip){}
	private function InitMembers(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public function GetMethod(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetNativeOffset(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetILOffset(){}
	/**
	 * @return \System\String|string
	 */
	public function GetFileName(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetFileLineNumber(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetFileColumnNumber(){}
	/**
	 * @uses StackFrameOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StackFrameOverride::__construct_2 <br>public , args: ($needFileInfo)<br>
	 * @uses StackFrameOverride::__construct_3 <br>public , args: ($skipFrames)<br>
	 * @uses StackFrameOverride::__construct_4 <br>public , args: ($skipFrames, $needFileInfo)<br>
	 * @uses StackFrameOverride::__construct_5 <br>public , args: ($fileName, $lineNumber)<br>
	 * @uses StackFrameOverride::__construct_6 <br>public , args: ($fileName, $lineNumber, $colNumber)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}