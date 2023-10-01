<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class BidiDictionary_2 extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public  function ClearThenResetIfTooLarge(){}
	/**
	 * @param \Avalonia\Utilities\T1 $key
	 * @param \Avalonia\Utilities\T2 $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @param \Avalonia\Utilities\T1 $key
	 * @param \Avalonia\Utilities\T2& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \Avalonia\Utilities\T2 $value
	 * @param \Avalonia\Utilities\T1& $key
	 * @return \System\Boolean
	 */
	public  function TryGetKey($value, $key){}
	/**
	 * @param \Avalonia\Utilities\T1 $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @param \Avalonia\Utilities\T2 $value
	 * @return \System\Boolean
	 */
	public  function ContainsValue($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
