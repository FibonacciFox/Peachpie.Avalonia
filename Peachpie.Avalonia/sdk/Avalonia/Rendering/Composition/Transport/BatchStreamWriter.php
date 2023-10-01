<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 */
class BatchStreamWriter extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitDataSegment(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NextDataSegment(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitObjectSegment(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NextObjectSegment(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\T $item
	 * @return \System\Void|void
	 */
	public  function Write($item){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Void|void
	 */
	public  function WriteObject($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
