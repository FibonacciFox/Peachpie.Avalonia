<?php
namespace Avalonia\Input\TextInput;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextInputMethodClientOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $preeditText
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetPreeditText_1 ($preeditText){}
	/**
	 * @deprecated
	 * @param \System\String|string $preeditText
	 * @param \System\Nullable_1 $cursorPos [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetPreeditText_2 ($preeditText, $cursorPos){}
}
class TextInputMethodClient extends \System\Object
{
	use TextInputMethodClientOverride;
	/**
	 * @property
	 * @var \Avalonia\Visual
	 * @since readonly
	 */
	public $TextViewVisual;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $SupportsPreedit;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $SupportsSurroundingText;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SurroundingText;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $CursorRectangle;
	/**
	 * @property
	 * @var \Avalonia\Input\TextInput\TextSelection
	 */
	public $Selection;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_TextViewVisualChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_TextViewVisualChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CursorRectangleChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CursorRectangleChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_SurroundingTextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_SurroundingTextChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ResetRequested($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ResetRequested($value){}
	/**
	 * @uses TextInputMethodClientOverride::SetPreeditText_1 <br>public , args: ($preeditText)<br>
	 * @uses TextInputMethodClientOverride::SetPreeditText_2 <br>public , args: ($preeditText, $cursorPos)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetPreeditText (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseTextViewVisualChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseCursorRectangleChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseSurroundingTextChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseSelectionChanged(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RequestReset(){}
}