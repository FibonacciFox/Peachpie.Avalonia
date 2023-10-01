<?php
namespace Avalonia\Input\TextInput;
/**
 */
class TextInputMethodClient extends \System\Object
{
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_TextViewVisualChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_TextViewVisualChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CursorRectangleChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CursorRectangleChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_SurroundingTextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_SurroundingTextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_SelectionChanged($value){}
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_TextViewVisual(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsPreedit(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsSurroundingText(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_SurroundingText(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_CursorRectangle(){}
	/**
	 * @return \Avalonia\Input\TextInput\TextSelection
	 */
	public  function get_Selection(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextSelection $value
	 * @return \System\Void|void
	 */
	public  function set_Selection($value){}
	/**
	 * @param \System\String|string $preeditText
	 * @return \System\Void|void
	 */
	public  function SetPreeditText($preeditText){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseTextViewVisualChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseCursorRectangleChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseSurroundingTextChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RaiseSelectionChanged(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
