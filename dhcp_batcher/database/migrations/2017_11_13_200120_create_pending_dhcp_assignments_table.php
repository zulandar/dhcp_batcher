<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingDhcpAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_dhcp_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->macAddress('leased_mac_address');
            $table->ipAddress('ip_address');
            $table->macAddress('remote_id')->nullable();
            $table->boolean('expired');
            $table->timestamps();
            $table->index(['created_at', 'updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pending_dhcp_assignments');
    }
}
