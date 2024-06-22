<?php
namespace System\Runtime\InteropServices\ObjectiveC;
class ObjectiveCMarshal extends \System\Object
{


	/**
	 * @param \System\IntPtr $beginEndCallback
	 * @param \System\IntPtr $isReferencedCallback
	 * @param \System\IntPtr $trackedObjectEnteredFinalization
	 * @param \System\Runtime\InteropServices\ObjectiveC\ObjectiveCMarshal+UnhandledExceptionPropagationHandler $unhandledExceptionPropagationHandler
	 * @return \System\Void|void
	 */
	public static function Initialize($beginEndCallback, $isReferencedCallback, $trackedObjectEnteredFinalization, $unhandledExceptionPropagationHandler){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Span_1 &$taggedMemory [generic: System\IntPtr]
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	public static function CreateReferenceTrackingHandle($obj, &$taggedMemory){}
	/**
	 * @param \System\Runtime\InteropServices\ObjectiveC\ObjectiveCMarshal+MessageSendFunction $msgSendFunction
	 * @param \System\IntPtr $func
	 * @return \System\Void|void
	 */
	public static function SetMessageSendCallback($msgSendFunction, $func){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public static function SetMessageSendPendingException($exception){}
}