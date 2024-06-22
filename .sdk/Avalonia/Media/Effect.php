<?php
namespace Avalonia\Media;
class Effect extends \Avalonia\Animation\Animatable implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IAffectsRender
{

	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsRender(...$properties){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function RaiseInvalidated($e){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Invalidated($value){}
	private static function ParseError($s){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\IEffect
	 */
	public static function Parse($s){}
	private function GetPropertyChangedSubscribers(){}
}