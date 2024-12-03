<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('mypackage_table', function (Blueprint $table) {
    $table->id();
    $table->timestamps();
});