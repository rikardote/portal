<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Permisos
 *
 * @author  The scaffold-interface created at 2016-02-10 01:11:09am
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Permisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('permisos',function (Blueprint $table){

        $table->increments('id');
        
        $table->string('name');
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permisos');
     }
}
