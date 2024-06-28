<?php

namespace App\Enums;

enum TransactionStates: string
{
    case ADVANCED = 'advanced'; //Adelantada
    case OVERDUE = 'overdue'; //Atrasada
    case PAID = 'paid'; //Pagada / A tiempo
}
