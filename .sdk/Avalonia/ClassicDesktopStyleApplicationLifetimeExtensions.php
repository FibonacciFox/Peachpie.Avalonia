<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ClassicDesktopStyleApplicationLifetimeExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AppBuilder $builder
	 * @param \System\String $args
	 * @param \System\Action_1 $lifetimeBuilder [generic: Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function StartWithClassicDesktopLifetime_1 ($builder, $args, $lifetimeBuilder){}
	/**
	 * @deprecated
	 * @param \Avalonia\AppBuilder $builder
	 * @param \System\String $args
	 * @param \Avalonia\Controls\ShutdownMode $shutdownMode
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function StartWithClassicDesktopLifetime_2 ($builder, $args, $shutdownMode){}
}
class ClassicDesktopStyleApplicationLifetimeExtensions extends \System\Object
{
	use ClassicDesktopStyleApplicationLifetimeExtensionsOverride;


	private static function PrepareLifetime($builder, $args, $lifetimeBuilder){}
	/**
	 * @param \Avalonia\AppBuilder $builder
	 * @param \System\String $args
	 * @param \System\Action_1 $lifetimeBuilder [generic: Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime]
	 * @return \Avalonia\AppBuilder
	 */
	public static function SetupWithClassicDesktopLifetime($builder, $args, $lifetimeBuilder){}
	/**
	 * @uses ClassicDesktopStyleApplicationLifetimeExtensionsOverride::StartWithClassicDesktopLifetime_1 <br>public , args: ($builder, $args, $lifetimeBuilder)<br>
	 * @uses ClassicDesktopStyleApplicationLifetimeExtensionsOverride::StartWithClassicDesktopLifetime_2 <br>public , args: ($builder, $args, $shutdownMode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function StartWithClassicDesktopLifetime (\override ...$args){}
}