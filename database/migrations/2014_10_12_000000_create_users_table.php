<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
=======
            $table->string('name');
>>>>>>> main
=======
            $table->string('name');
>>>>>>> main
=======
            $table->string('name');
>>>>>>> main
=======
            $table->string('name');
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
            $table->string('name');
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
            $table->string('name');
>>>>>>> main
=======
            $table->string('name');
>>>>>>> main
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('is_active')->default(0);
=======
>>>>>>> main
=======
>>>>>>> main
=======
>>>>>>> main
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> b7aa53c82f1e35723dcedb7d0a30fca061b3f9b4
=======
>>>>>>> main
=======
>>>>>>> main
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
