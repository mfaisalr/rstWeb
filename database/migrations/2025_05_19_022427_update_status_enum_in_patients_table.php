<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateStatusEnumInPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    DB::statement("ALTER TABLE patients MODIFY status ENUM('Pending', 'Accepted', 'Rescheduled', 'Completed') DEFAULT 'Pending'");
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE patients MODIFY status ENUM('Pending', 'Accepted', 'Rescheduled') DEFAULT 'Pending'");
    }
}
