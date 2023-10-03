<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectionModelSelectionChangedEventArgs_1MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function get_DeselectedItems_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function get_DeselectedItems_2(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function get_SelectedItems_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function get_SelectedItems_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SelectionModelSelectionChangedEventArgs_1 extends \Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs
{
	/**
	 * @uses SelectionModelSelectionChangedEventArgs_1MethodsOverride::get_DeselectedItems_1 ()
	 * @uses SelectionModelSelectionChangedEventArgs_1MethodsOverride::get_DeselectedItems_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_DeselectedItems(mixed ...$args){}
	/**
	 * @uses SelectionModelSelectionChangedEventArgs_1MethodsOverride::get_SelectedItems_1 ()
	 * @uses SelectionModelSelectionChangedEventArgs_1MethodsOverride::get_SelectedItems_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItems(mixed ...$args){}
}
