<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateStatusEnumOnPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE patients MODIFY status ENUM('pending', 'reschedule', 'completed', 'accepted', 'cancel_requested', 'cancelled', 'cancel_denied') DEFAULT 'Pending'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                DB::statement("ALTER TABLE patients MODIFY status ENUM('pending', 'reschedule', 'completed', 'accepted', 'cancel_requested', 'cancelled', 'cancel_denied') DEFAULT 'Pending'");
    }
}
