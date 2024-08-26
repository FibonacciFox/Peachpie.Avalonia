<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StackTraceOverride {
	/**
	 * @deprecated
	 * @param \System\Diagnostics\StackTrace+TraceFormat $traceFormat
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function ToString_1 ($traceFormat){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\StackTrace+TraceFormat $traceFormat
	 * @param \System\Text\StringBuilder $sb
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ToString_2 ($traceFormat, $sb){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $fNeedFileInfo
	 */
	#[MethodOverride]public function __construct_2 ($fNeedFileInfo){}
	/**
	 * @param \System\Int32|int $skipFrames
	 */
	#[MethodOverride]public function __construct_3 ($skipFrames){}
	/**
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean|bool $fNeedFileInfo
	 */
	#[MethodOverride]public function __construct_4 ($skipFrames, $fNeedFileInfo){}
	/**
	 * @param \System\Exception $e
	 */
	#[MethodOverride]public function __construct_5 ($e){}
	/**
	 * @param \System\Exception $e
	 * @param \System\Boolean|bool $fNeedFileInfo
	 */
	#[MethodOverride]public function __construct_6 ($e, $fNeedFileInfo){}
	/**
	 * @param \System\Exception $e
	 * @param \System\Int32|int $skipFrames
	 */
	#[MethodOverride]public function __construct_7 ($e, $skipFrames){}
	/**
	 * @param \System\Exception $e
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean|bool $fNeedFileInfo
	 */
	#[MethodOverride]public function __construct_8 ($e, $skipFrames, $fNeedFileInfo){}
	/**
	 * @param \System\Diagnostics\StackFrame $frame
	 */
	#[MethodOverride]public function __construct_9 ($frame){}
}
class StackTrace extends \System\Object
{
	use StackTraceOverride;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const METHODS_TO_SKIP = '0';
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FrameCount;
	/**
	 * @param \System\Diagnostics\StackFrameHelper $sfh
	 * @param \System\Int32|int $iSkip
	 * @param \System\Boolean|bool $fNeedFileInfo
	 * @param \System\Exception $e
	 * @return \System\Void|void
	 */
	protected static function GetStackFramesInternal($sfh, $iSkip, $fNeedFileInfo, $e){}
	/**
	 * @param \System\Diagnostics\StackFrameHelper $StackF
	 * @param \System\Int32|int $iNumFrames
	 * @return \System\Int32|int
	 */
	protected static function CalculateFramesToSkip($StackF, $iNumFrames){}
	private function InitializeForException($exception, $skipFrames, $fNeedFileInfo){}
	private function InitializeForCurrentThread($skipFrames, $fNeedFileInfo){}
	private function CaptureStackTrace($skipFrames, $fNeedFileInfo, $e){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Diagnostics\StackFrame
	 */
	public function GetFrame($index){}
	/**
	 * @return \System\Diagnostics\StackFrame[]
	 */
	public function GetFrames(){}
	/**
	 * @uses StackTraceOverride::ToString_1 <br>protected , args: ($traceFormat)<br>
	 * @uses StackTraceOverride::ToString_2 <br>protected , args: ($traceFormat, $sb)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ToString (\override ...$args){}
	private static function ShowInStackTrace($mb){}
	private static function TryResolveStateMachineMethod($method, &$declaringType){}
	/**
	 * @uses StackTraceOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StackTraceOverride::__construct_2 <br>public , args: ($fNeedFileInfo)<br>
	 * @uses StackTraceOverride::__construct_3 <br>public , args: ($skipFrames)<br>
	 * @uses StackTraceOverride::__construct_4 <br>public , args: ($skipFrames, $fNeedFileInfo)<br>
	 * @uses StackTraceOverride::__construct_5 <br>public , args: ($e)<br>
	 * @uses StackTraceOverride::__construct_6 <br>public , args: ($e, $fNeedFileInfo)<br>
	 * @uses StackTraceOverride::__construct_7 <br>public , args: ($e, $skipFrames)<br>
	 * @uses StackTraceOverride::__construct_8 <br>public , args: ($e, $skipFrames, $fNeedFileInfo)<br>
	 * @uses StackTraceOverride::__construct_9 <br>public , args: ($frame)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}