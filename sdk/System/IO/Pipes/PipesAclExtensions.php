<?php
namespace System\IO\Pipes;
/**
 */
class PipesAclExtensions extends \System\Object
{
	/**
	 * @param \System\IO\Pipes\PipeStream $stream
	 * @return \System\IO\Pipes\PipeSecurity
	 */
	public static function GetAccessControl($stream){}
	/**
	 * @param \System\IO\Pipes\PipeStream $stream
	 * @param \System\IO\Pipes\PipeSecurity $pipeSecurity
	 * @return \System\Void|void
	 */
	public static function SetAccessControl($stream, $pipeSecurity){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
