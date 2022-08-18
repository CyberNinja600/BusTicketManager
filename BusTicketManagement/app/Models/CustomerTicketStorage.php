<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTicketStorage extends Model
{
    protected $table="customer_ticket_storages";
    public $timestamp = false;
}
