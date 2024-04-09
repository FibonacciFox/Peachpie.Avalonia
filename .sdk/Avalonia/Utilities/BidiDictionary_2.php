<?php
namespace Avalonia\Utilities;
final class BidiDictionary_2 extends \System\Object
{

	/**
	 * @return \System\Void|void
	 */
	public function ClearThenResetIfTooLarge(){}
	/**
	 * @param \T1 $key
	 * @param \T2 $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value){}
	/**
	 * @param \T1 $key
	 * @param \T2& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @param \T2 $value
	 * @param \T1& &$key
	 * @return \System\Boolean|bool
	 */
	public function TryGetKey($value, &$key){}
	/**
	 * @param \T1 $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @param \T2 $value
	 * @return \System\Boolean|bool
	 */
	public function ContainsValue($value){}
	/**
	 */
	public function __construct(){}
}