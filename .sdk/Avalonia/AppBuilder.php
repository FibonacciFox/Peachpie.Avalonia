<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AppBuilderOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride]public static function Configure_1 (){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $appFactory [generic: TApp]
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride]public static function Configure_2 ($appFactory){}
	/**
	 * @deprecated
	 * @param \System\Type $entryPointType
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride]protected static function Configure_3 ($entryPointType){}
	/**
	 * @deprecated
	 * @param \T|object $options
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride]public function With_1 ($options){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $options [generic: T]
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride]public function With_2 ($options){}
}
final class AppBuilder extends \System\Object
{
	use AppBuilderOverride;

	/**
	 * @property
	 * @var \System\Action
	 */
	public $RuntimePlatformServicesInitializer;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $RuntimePlatformServicesName;
	/**
	 * @property
	 * @var \Avalonia\Application
	 */
	public $Instance;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $ApplicationType;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $WindowingSubsystemInitializer;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $WindowingSubsystemName;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $RenderingSubsystemInitializer;
	/**
	 * @property
	 * @var \System\Func_2[System\Type,Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime]
	 */
	public $LifetimeOverride;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $RenderingSubsystemName;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\AppBuilder]
	 */
	public $AfterSetupCallback;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\AppBuilder]
	 */
	public $AfterPlatformServicesSetupCallback;
	/**
	 * @uses AppBuilderOverride::Configure_1 <br>public , args: ()<br>
	 * @uses AppBuilderOverride::Configure_2 <br>public , args: ($appFactory)<br>
	 * @uses AppBuilderOverride::Configure_3 <br>protected , args: ($entryPointType)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AppBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function Configure (\override ...$args){}
	/**
	 * @param \System\Action_1 $callback [generic: Avalonia\AppBuilder]
	 * @return \Avalonia\AppBuilder
	 */
	public function AfterSetup($callback){}
	/**
	 * @param \System\Action_1 $callback [generic: Avalonia\AppBuilder]
	 * @return \Avalonia\AppBuilder
	 */
	public function AfterPlatformServicesSetup($callback){}
	/**
	 * @param \Avalonia\AppBuilder+AppMainDelegate $main
	 * @param \System\String $args
	 * @return \System\Void|void
	 */
	public function Start($main, $args){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	public function SetupWithoutStarting(){}
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime $lifetime
	 * @return \Avalonia\AppBuilder
	 */
	public function SetupWithLifetime($lifetime){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public function UseWindowingSubsystem($initializer, $name){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public function UseRenderingSubsystem($initializer, $name){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public function UseRuntimePlatformSubsystem($initializer, $name){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	public function UseStandardRuntimePlatformSubsystem(){}
	/**
	 * @param \System\Func_2 $func [generic: System\Type,Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime]
	 * @return \Avalonia\AppBuilder
	 */
	public function UseLifetimeOverride($func){}
	/**
	 * @uses AppBuilderOverride::With_1 <br>public , args: ($options)<br>
	 * @uses AppBuilderOverride::With_2 <br>public , args: ($options)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\AppBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function With (\override ...$args){}
	/**
	 * @param \System\Action_1 $action [generic: Avalonia\Media\FontManager]
	 * @return \Avalonia\AppBuilder
	 */
	public function ConfigureFonts($action){}
	private function Setup(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SetupUnsafe(){}
}