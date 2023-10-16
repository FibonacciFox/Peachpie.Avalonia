<?php
namespace System\Reflection\Emit;
/**
 */
enum StackBehaviour implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pop0 = 0;
	case Pop1 = 1;
	case Pop1_pop1 = 2;
	case Popi = 3;
	case Popi_pop1 = 4;
	case Popi_popi = 5;
	case Popi_popi8 = 6;
	case Popi_popi_popi = 7;
	case Popi_popr4 = 8;
	case Popi_popr8 = 9;
	case Popref = 10;
	case Popref_pop1 = 11;
	case Popref_popi = 12;
	case Popref_popi_popi = 13;
	case Popref_popi_popi8 = 14;
	case Popref_popi_popr4 = 15;
	case Popref_popi_popr8 = 16;
	case Popref_popi_popref = 17;
	case Push0 = 18;
	case Push1 = 19;
	case Push1_push1 = 20;
	case Pushi = 21;
	case Pushi8 = 22;
	case Pushr4 = 23;
	case Pushr8 = 24;
	case Pushref = 25;
	case Varpop = 26;
	case Varpush = 27;
	case Popref_popi_pop1 = 28;
}
