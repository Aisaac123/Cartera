<?php

namespace App\Enums;

enum TransactionTypeEnum: string
{
    case DEPOSIT = 'deposit'; //Ingreso
    case WITHDRAWAL = 'withdrawal'; //Retiro
}
