<?php

namespace App\Enums;

enum TransactionStateEnum: string
{
    case ADVANCED = 'advanced'; //Adelantada
    case OVERDUE = 'overdue'; //Atrasada
    case PAID = 'paid'; //Pagada / A tiempo
}
