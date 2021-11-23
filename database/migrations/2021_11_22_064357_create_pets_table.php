<?php

use App\Models\Pet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('body')->nullable();
            $table->text('extract')->nullable();
            $table->string('edad')->nullable();
            $table->string('location')->nullable();
            $table->enum('status', [Pet::BORRADOR, Pet::PUBLICADO])->default(Pet::BORRADOR);
            $table->string('slug')->nullable()->unique();

            // Relaciones
            $table->foreignId('category_pet_id')->constrained('category_pets')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('pets');
    }
}
