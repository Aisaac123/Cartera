<?php

namespace App\Enums;

enum TransactionTypes: string
{
    case DEPOSIT = 'deposit'; //Ingreso
    case WITHDRAWAL = 'withdrawal'; //Retiro
}
