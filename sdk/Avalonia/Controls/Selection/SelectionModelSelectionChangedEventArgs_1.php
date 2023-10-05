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
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @property
	 */
	public readonly $DeselectedIndexes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @property
	 */
	public readonly $SelectedIndexes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
	 * @property
	 */
	public readonly $DeselectedItems;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
	 * @property
	 */
	public readonly $SelectedItems;
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
