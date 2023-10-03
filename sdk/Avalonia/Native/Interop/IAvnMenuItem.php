<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnMenuItem
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 */
	public function SetSubMenu($menu);
	/**
	 * @param \System\String|string $utf8String
	 */
	public function SetTitle($utf8String);
	/**
	 * @param \Avalonia\Native\Interop\AvnKey $key
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 */
	public function SetGesture($key, $modifiers);
	/**
	 * @param \Avalonia\Native\Interop\IAvnPredicateCallback $predicate
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $callback
	 */
	public function SetAction($predicate, $callback);
	/**
	 * @param \System\Int32|int $isChecked
	 */
	public function SetIsChecked($isChecked);
	/**
	 * @param \Avalonia\Native\Interop\AvnMenuItemToggleType $toggleType
	 */
	public function SetToggleType($toggleType);
	/**
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 */
	public function SetIcon($data, $length);
}
