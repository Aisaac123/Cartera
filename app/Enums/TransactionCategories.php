<?php

namespace App\Enums;

enum TransactionCategories: string
{
    case SERVICES = 'services'; //Servicios
    case CREDIT_FEE = 'credit_fee'; //Cuota de crédito
    case PAYMENT = 'payment'; //Pago
    case BUY = 'buy'; //Compra
    case OTHERS = 'others'; //Otros
}
