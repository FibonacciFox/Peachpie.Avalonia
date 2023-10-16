<?php
namespace System\IO\Pipes;
/**
 */
class NamedPipeServerStreamAcl extends \System\Object
{
	/**
	 * @param \System\String|string $pipeName
	 * @param \System\IO\Pipes\PipeDirection $direction
	 * @param \System\Int32|int $maxNumberOfServerInstances
	 * @param \System\IO\Pipes\PipeTransmissionMode $transmissionMode
	 * @param \System\IO\Pipes\PipeOptions $options
	 * @param \System\Int32|int $inBufferSize
	 * @param \System\Int32|int $outBufferSize
	 * @param \System\IO\Pipes\PipeSecurity $pipeSecurity
	 * @param \System\IO\HandleInheritability $inheritability
	 * @param \System\IO\Pipes\PipeAccessRights $additionalAccessRights
	 * @return \System\IO\Pipes\NamedPipeServerStream
	 */
	public static function Create($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $pipeSecurity, $inheritability, $additionalAccessRights){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
