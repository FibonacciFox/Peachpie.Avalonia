<?php
namespace Avalonia\X11;
/**
 */
class X11Atoms extends \System\Object
{
	/**
	 * @param \System\IntPtr& $field
	 * @param \System\String|string $name
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitAtom($field, $name, $value){}
	/**
	 * @param \System\String|string $name
	 * @return \System\IntPtr
	 */
	public  function GetAtom($name){}
	/**
	 * @param \System\IntPtr $atom
	 * @return \System\String|string
	 */
	public  function GetAtomName($atom){}
	/**
	 * @param \System\IntPtr $display
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateAtoms($display){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
