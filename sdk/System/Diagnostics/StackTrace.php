<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StackTraceMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function ToString_2($traceFormat){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ToString_3($traceFormat, $sb){}
}
/**
 */
class StackTrace extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $METHODS_TO_SKIP;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FrameCount;
	/**
	 * @param \System\Diagnostics\StackFrameHelper $sfh
	 * @param \System\Int32|int $iSkip
	 * @param \System\Boolean $fNeedFileInfo
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
	/**
	 * @param \System\Exception $exception
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean $fNeedFileInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeForException($exception, $skipFrames, $fNeedFileInfo){}
	/**
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean $fNeedFileInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeForCurrentThread($skipFrames, $fNeedFileInfo){}
	/**
	 * @param \System\Int32|int $skipFrames
	 * @param \System\Boolean $fNeedFileInfo
	 * @param \System\Exception $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CaptureStackTrace($skipFrames, $fNeedFileInfo, $e){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FrameCount(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Diagnostics\StackFrame
	 */
	public  function GetFrame($index){}
	/**
	 * @return \System\Diagnostics\StackFrame[]
	 */
	public  function GetFrames(){}
	/**
	 * @uses StackTraceMethodsOverride::ToString_1 ()
	 * @uses StackTraceMethodsOverride::ToString_2 ($traceFormat)
	 * @uses StackTraceMethodsOverride::ToString_3 ($traceFormat, $sb)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodBase $mb
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShowInStackTrace($mb){}
	/**
	 * @param \System\Reflection\MethodBase& $method
	 * @param \System\Type& $declaringType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryResolveStateMachineMethod($method, $declaringType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
