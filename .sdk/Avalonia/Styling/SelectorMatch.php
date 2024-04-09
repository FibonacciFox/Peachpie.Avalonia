<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectorMatchOverride {
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $match
	 */
	#[MethodOverride]public function __construct_1 ($match){}
	/**
	 * @param \Avalonia\Styling\SelectorMatchResult $result
	 */
	#[MethodOverride]public function __construct_2 ($result){}
}
final class SelectorMatch extends \System\ValueType implements
	\System\IEquatable_1
{
	use SelectorMatchOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Styling\SelectorMatch
	 */
	public static $NeverThisType;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Styling\SelectorMatch
	 */
	public static $NeverThisInstance;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Styling\SelectorMatch
	 */
	public static $AlwaysThisType;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Styling\SelectorMatch
	 */
	public static $AlwaysThisInstance;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMatch;
	/**
	 * @property
	 * @var \Avalonia\Styling\SelectorMatchResult
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \Avalonia\Styling\Activators\IStyleActivator
	 * @since readonly
	 */
	public $Activator;
	/**
	 * @param \Avalonia\Styling\SelectorMatch& &$other
	 * @return \Avalonia\Styling\SelectorMatch
	 */
	public function And(&$other){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Styling\SelectorMatch $left
	 * @param \Avalonia\Styling\SelectorMatch $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Styling\SelectorMatch $left
	 * @param \Avalonia\Styling\SelectorMatch $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses SelectorMatchOverride::__construct_1 <br>public , args: ($match)<br>
	 * @uses SelectorMatchOverride::__construct_2 <br>public , args: ($result)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}