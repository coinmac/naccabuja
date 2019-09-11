<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->date('date_incorporated')->nullable();
            $table->string('office_address')->nullable();
            $table->string('correspondence_address')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->text('business_activities')->nullable();
            $table->text('other_activities')->nullable();
            $table->float('authorized_sharecapital')->nullable();
            $table->float('last_aturnover')->nullable();
            $table->integer('no_employees')->nullable();
            $table->string('partner1')->nullable();
            $table->string('partner2')->nullable();
            $table->string('partner3')->nullable();
            $table->string('member_category')->nullable();
            $table->string('pcontact_name')->nullable();
            $table->string('pposition')->nullable();
            $table->string('pemail')->nullable();
            $table->string('ptel')->nullable();
            $table->string('pfax')->nullable();
            $table->string('apcontact_name')->nullable();
            $table->string('apposition')->nullable();
            $table->string('apemail')->nullable();
            $table->string('aptel')->nullable();
            $table->string('apfax')->nullable();
            $table->string('usa_interest')->nullable();
            $table->string('usa_company')->nullable();
            $table->string('attend_meetings')->nullable();
            $table->string('serve_committee')->nullable();
            $table->string('proposed_by')->nullable();
            $table->string('memberno')->nullable();
            $table->string('financial_report')->nullable();
            $table->string('form_c07')->nullable();
            $table->string('cac')->nullable();
            $table->string('passport')->nullable();
            $table->string('userid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
