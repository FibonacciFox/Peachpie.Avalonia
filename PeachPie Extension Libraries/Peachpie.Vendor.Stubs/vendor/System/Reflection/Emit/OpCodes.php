<?php
namespace System\Reflection\Emit;
class OpCodes extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Nop;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Break;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg_0;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg_1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg_2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg_3;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc_0;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc_1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc_2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc_3;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc_0;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc_1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc_2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc_3;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarga_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Starg_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloca_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldnull;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_M1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_0;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_3;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_5;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_6;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_7;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldc_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Dup;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Pop;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Jmp;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Call;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Calli;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ret;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Br_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Brfalse_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Brtrue_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Beq_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bge_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bgt_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ble_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Blt_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bne_Un_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bge_Un_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bgt_Un_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ble_Un_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Blt_Un_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Br;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Brfalse;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Brtrue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Beq;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bge;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bgt;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ble;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Blt;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bne_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bge_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Bgt_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ble_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Blt_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Switch;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_U1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_U2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_U4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldind_Ref;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_Ref;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Add;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Sub;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Mul;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Div;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Div_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Rem;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Rem_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $And;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Or;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Xor;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Shl;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Shr;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Shr_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Neg;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Not;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_U4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_U8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Callvirt;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Cpobj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldobj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldstr;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Newobj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Castclass;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Isinst;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_R_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Unbox;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Throw;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldfld;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldflda;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stfld;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldsfld;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldsflda;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stsfld;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stobj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I1_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I2_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I4_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I8_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U1_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U2_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U4_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U8_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Box;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Newarr;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldlen;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelema;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_U1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_U2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_U4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem_Ref;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_R4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_R8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem_Ref;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldelem;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stelem;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Unbox_Any;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U8;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Refanyval;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ckfinite;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Mkrefany;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldtoken;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_U2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_U1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_Ovf_U;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Add_Ovf;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Add_Ovf_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Mul_Ovf;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Mul_Ovf_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Sub_Ovf;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Sub_Ovf_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Endfinally;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Leave;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Leave_S;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stind_I;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Conv_U;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix7;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix6;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix5;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix4;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix3;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix2;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefix1;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Prefixref;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Arglist;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ceq;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Cgt;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Cgt_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Clt;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Clt_Un;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldftn;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldvirtftn;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarg;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldarga;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Starg;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloc;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Ldloca;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Stloc;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Localloc;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Endfilter;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Unaligned;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Volatile;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Tailcall;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Initobj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Constrained;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Cpblk;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Initblk;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Rethrow;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Sizeof;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Refanytype;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\Emit\OpCode
	 */
	public static $Readonly;
	/**
	 * @param \System\Reflection\Emit\OpCode $inst
	 * @return \System\Boolean|bool
	 */
	public static function TakesSingleByteArgument($inst){}
}