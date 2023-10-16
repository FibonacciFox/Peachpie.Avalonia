<?php
namespace System\IO\Pipes;
/**
 */
class ExecuteHelper extends \System\Object
{
	/**
	 * @var \System\IO\Pipes\PipeStreamImpersonationWorker
	 * @field
	 */
	protected $_userCode;
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafePipeHandle
	 * @field
	 */
	protected $_handle;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_mustRevert;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_impersonateErrorCode;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_revertImpersonateErrorCode;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
