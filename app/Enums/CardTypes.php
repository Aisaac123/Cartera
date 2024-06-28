<?php

namespace App\Enums;

enum CardTypes: string
{
    case CREDIT = 'credit'; //Tarjeta de credito
    case DEBIT = 'debit'; //Tarjeta de debito
    case VIRTUAL = 'virtual'; //Tarjeta virtual
    case PREPAID = 'prepaid'; //Tarjeta prepagada
    case TRADE = 'trade'; //Tarjeta de comercio
    case LOYALTY = 'loyalty'; //Tarjeta de lealtad
}
