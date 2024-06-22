<?php
namespace Avalonia\Controls;
class TextBoxTextInputMethodClient extends \Avalonia\Input\TextInput\TextInputMethodClient
{

	/**
	 * @property
	 * @var \Avalonia\Visual
	 * @since readonly
	 */
	public $TextViewVisual;
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
	 * @param \Avalonia\Controls\Presenters\TextPresenter $presenter
	 * @param \Avalonia\Controls\TextBox $parent
	 * @return \System\Void|void
	 */
	public function SetPresenter($presenter, $parent){}
	private static function GetTextLineText($textLine){}
	private function OnParentPropertyChanged($sender, $e){}
	/**
	 */
	public function __construct(){}
}