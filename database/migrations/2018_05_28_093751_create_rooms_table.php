<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Residence_ID');
            $table->string('Campus');
            $table->string('Residence_name');
            $table->integer('Rooms_available');
            $table->string('Landlord');
            $table->bigInteger('Contact');
            $table->string('Layout');
            $table->string('Gender');
            $table->mediumText('Description');
            $table->decimal('Rental_per_month',8,2);
			$table->decimal('Advance_deposit',8,2);
            $table->decimal('Electricity_deposit',8,2);
            $table->decimal('Water_deposit',8,2);
			$table->string('Payment_terms');
			$table->decimal('Total_rent',8,2);
            $table->string('Image1');
            $table->string('Image2');
            $table->string('Image3');
            $table->string('Image4');
            $table->string('Image5');
            $table->string('Image6');
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
        Schema::dropIfExists('rooms');
        
    }
}
