<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UsersAddPhone extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('phone')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'phone')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('phone');
            });
        }
    }
}
