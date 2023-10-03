<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateHullShaderDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppHullShader
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppHullShader){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pShaderBytecode
	 * @param \System\IntPtr $BytecodeLength
	 * @param \System\IntPtr $pClassLinkage
	 * @param \System\Void** $ppHullShader
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pShaderBytecode, $BytecodeLength, $pClassLinkage, $ppHullShader, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
