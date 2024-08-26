<?php
namespace Avalonia\Controls\Utils;
class FinderNode extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\IObservable_1[Avalonia\StyledElement]
	 * @since readonly
	 */
	public $Observable;
	/**
	 * @return \System\Void|void
	 */
	public function Init(){}
	private function OnValueChanged($next){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \System\Type $ancestorType
	 */
	public function __construct($control, $ancestorType){}
}